<?php
include_once('header.php');

?>

<div class="login-form">
    <br/><br/>
<?php

//include("auth_session.php");
// When form submitted, check and create user session.
if (isset($_POST['submit']) && $_POST['submit']==='Login') {

    $rows=get_login_data();

    if ($rows == 1) {

            $_SESSION['username'] = $_POST['username'];


        // Redirect to user dashboard page
        header("Location: dashboard.php");
    } else {
        echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login'>Login</a> again.</p>
                  </div>";
    }
} else {
    ?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link"><a href="register">New User Registration</a></p>
    </form>
    <?php
}

?>
    <br/><br/>
</div>

<?php

  include_once('footer.php');
?>
<!--</html>-->