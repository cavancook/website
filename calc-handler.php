<?php
session_start();
require_once 'Dao.php';
$dao = new Dao();
//set values for monthly inputs
$_SESSION['rent-val'] = $_POST["rent"];
$_SESSION['util-val'] = $_POST["util"];
$_SESSION['food-val'] = $_POST["food"];
$_SESSION['carIns-val'] = $_POST["carIns"];
$_SESSION['fuel-val'] = $_POST["fuel"];
$_SESSION['healthIns-val'] = $_POST["healthIns"];
$_SESSION['loans-val'] = $_POST["loans"];
$_SESSION['misc-val'] = $_POST["misc"];

//set values for income inputs
$_SESSION['monthIn-val'] = $_POST["monthIn"];
$_SESSION['salary-val'] = $_POST["salary"];
$_SESSION['tReturn-val'] = $_POST["tReturn"];

//set values for savings inputs
$_SESSION['saving-val'] = $_POST["saving"];
$_SESSION['invest-val'] = $_POST["invest"];
$_SESSION['retire-val'] = $_POST["retire"];

$yearlyRent = $_SESSION['rent-val'] * 12;
$yearlyUtil = $_SESSION['util-val'] * 12;
$yearlyFood = $_SESSION['food-val'] * 12;
$yearlyCarIns = $_SESSION['carIns-val'] * 12;
$yearlyFuel = $_SESSION['fuel-val'] * 12;

$_SESSION['yearlyRent'] = $yearlyRent;

header("Location: total.php");