<?php
    session_start();

    echo "im the handler";
    echo print_r($_post, 1);

    $password_from_database = "abc123";
    if ($password_from_database == $_POST["password"]) {
        echo "Access granted";
        exit();
    } else {
        header("Location: login.php");
        die();
    }