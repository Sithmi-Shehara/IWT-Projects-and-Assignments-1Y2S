<?php
session_start();
require "connection.php";



$date = $_POST["date"];
$amount = $_POST["amount"];
$cardholdername = $_POST["cardholdername"];
$cardnumber = $_POST["cardnumber"];
$cvvnumber = $_POST["cvvnumber"];
$expire = $_POST["expire"];



// Validation part
if (empty($date)) {
    echo ("please enter  a cvvnumber ");
} else if (empty($amount)) {
    echo ("please enter  a expiredate ");
} else if (empty($cardholdername)) {
    echo ("please enter  a expiredate ");
} else if (empty($cardnumber)) {
    echo ("please enter  a expiredate ");
} else if (empty($cvvnumber)) {
    echo ("please enter  a expiredate ");
} else if (empty($expire)) {
    echo ("please enter  a expiredate ");
} else {


    Database::iud("INSERT INTO `payment` (`NIC`,`Cardholdername`,`Payment_Date`,`Amount`)
    VALUES('" . $_SESSION["customer"]["NIC"] . "','" . $_SESSION["customer"]["Full_Name"] . "','" . $date . "','" . $amount . "') ");

    echo ("Payment Success");
}
