<?php
require_once "classes/User.php";

$user1 = new User("Cavan", "password1");

if($user1->isPassValid("password1"){
    echo "Access Granted"
} else {
    echo "eh eh eh you forgot the magic word"
}