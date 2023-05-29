<?php
function db_connected()
{
    $host_name = 'localhost';
    $user_name = 'root';
    $password = '';
    $database = 'swacchobd';
    $con = mysqli_connect($host_name, $user_name, $password, $database);
// Check connection

    if (mysqli_connect_errno()) {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }

    return $con;
}

function save_contact_data()
{
    $con = db_connected();


    // removes backslashes
    $name = stripslashes($_REQUEST['name']);
    $name = mysqli_real_escape_string($con, $name);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $subject = stripslashes($_REQUEST['subject']);
    $subject = mysqli_real_escape_string($con, $subject);

    $message = stripslashes($_REQUEST['message']);
    $message = mysqli_real_escape_string($con, $message);

    $create_datetime = date("Y-m-d H:i:s");
    $query = "INSERT into `contact` (user_id, name, email,subject,message, create_datetime)
         VALUES (0,'$name','$email','$subject', '$message', '$create_datetime')";
    $result = mysqli_query($con, $query);
    return $result;
}

function save_donation_data()
{
    $con = db_connected();


    // removes backslashes
    $first_name = stripslashes($_REQUEST['first_name']);
    //escapes special characters in a string
    $first_name = mysqli_real_escape_string($con, $first_name);

    $last_name = stripslashes($_REQUEST['last_name']);
    $last_name = mysqli_real_escape_string($con, $last_name);

    $email = stripslashes($_REQUEST['email']);
    $email = mysqli_real_escape_string($con, $email);

    $phone = stripslashes($_REQUEST['phone']);
    $phone = mysqli_real_escape_string($con, $phone);

    $donation = stripslashes($_REQUEST['donation']);
    $donation = mysqli_real_escape_string($con, $donation);

    $create_datetime = date("Y-m-d H:i:s");
    $query = "INSERT into `donation` (user_id,first_name, last_name, email,phone,donation,create_datetime)
         VALUES (0,'$first_name', '$last_name', '$email', '$phone','$donation','$create_datetime')";
    $result = mysqli_query($con, $query);
    return $result;
}

function save_register_data()
{
    $con = db_connected();
    if (isset($_REQUEST['username']) && !mysqli_connect_errno()) {

        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $create_datetime = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, create_datetime)
         VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result = mysqli_query($con, $query);
        return $result;
    }

}

function get_login_data()
{
    $con = db_connected();
    if (isset($_POST['username']) && !mysqli_connect_errno()) {

        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        //Check user is exist in the database
        $query = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        return $rows;
    }
}