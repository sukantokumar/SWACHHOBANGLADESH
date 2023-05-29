<?php
include_once('header.php');
?>

<div class="register-form">
    <br/><br/>
    <?php


    // When form submitted, insert values into the database.
    if (isset($_REQUEST['submit']) && $_REQUEST['submit'] === 'Register') {
        // removes backslashes
        $result = save_register_data();
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login'>Login</a></p>
                  </div>";

        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='register'>registration</a> again.</p>
                  </div>";
        }
    } else {
        ?>

        <form class="form" action="" method="post">
            <h1 class="login-title">Registration</h1>
            <input type="text" class="login-input" name="username" placeholder="Username" required/>
            <input type="text" class="login-input" name="email" placeholder="Email Adress">
            <input type="password" class="login-input" name="password" placeholder="Password">
            <input type="submit" name="submit" value="Register" class="login-button">
            <p class="link"><a href="login">Click to Login</a></p>
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