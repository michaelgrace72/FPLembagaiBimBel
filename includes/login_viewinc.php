<?php

declare(strict_types= 1);


function output_username(){
    if(isset($_SESSION["user_id"])){
        echo "Logged in as " . $_SESSION["user_username"];
        echo '<li><form action="includes/logoutinc.php" ><button class="getstarted scrollto">Logout</button></form></li>';
    } else{
        echo "Not logged in";
        echo '<li><a class="getstarted scrollto" href="index.php">Login</a></li>';
    }
}
function check_login_errors(){
    if(isset($_SESSION["errors_login"])){
        $errors = $_SESSION['errors_login'];

        echo "<br>";

        foreach($errors as $error){
            echo '<p class="form-error">' . $error . '</p>';
        }
        unset($_SESSION["errors_login"]);
    } else if (isset($_GET["login"]) && $_GET["login"] === "success"){
        echo "<br>";
        echo '<p class="form-error">Login success!</p>';
    }

}