<?php
require_once 'includes/config_sessioninc.php';
require_once 'includes/signup_viewinc.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Signup</h3>

    <form action="includes/signupinc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="passwrod" name="password" placeholder="Password">
        <input type="text" name="email" placeholder="E-mail">
        <button>Sign-up</button>
    </form>

    <?php
    check_signup_errors();
    ?>
    
</body>
</html>