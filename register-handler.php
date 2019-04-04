<?php
session_start();
require_once 'Dao.php';
if(isset($_SESSION['user_id'])){
  header("Location: home.php");
}
$dao = new Dao();
  $email = $_POST["email"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  
  $_SESSION['login-presets'] = array($_POST);
  $messages = array();
  $valid = true;
  if (empty($email)) {
    $messages[] = "Please enter in an E-mail";
    $valid = false;
  }
  if (empty($password)) {
    $messages[] = "Please enter in your password";
    $valid = false;
  }
  if (empty($cpassword)) {
    $messages[] = "Please confirm your password";
    $valid = false;
  }
  if($password != $cpassword){
    $messages[]= "Passwords do not match!";
    $valid = false;
  }
  if($dao->regexEmail($email) == false){
    $messages[]= "Incorrect Email Format.";
    $messages[] = "Please use 123#$abc@123#$abc.com";
    $valid = false;
    $_SESSION['regmessages'] = $messages;
    header("Location: login.php");
    exit;
  }
  if($dao->userExists($email) == true){
      $messages[]= "Email is already taken";
      $valid = false;
  }
  if ($valid == false) {
    $_SESSION['regmessages'] = $messages;
    header("Location: login.php");
    exit;
  }
    $regmessage = $dao->createUser();
    $_SESSION['reg_con_message'] = $regmessage;
    header("Location: login.php");
exit;