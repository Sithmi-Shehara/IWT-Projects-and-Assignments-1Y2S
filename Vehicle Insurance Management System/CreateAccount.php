<?php
require "connection.php";
session_start();


$fname = $_POST["fname"];
$lname = $_POST["lname"];
$nic = $_POST["nic"];
$email = $_POST["email"];
$dob = $_POST["dob"];
$tel = $_POST["tel"];

$vehiNo = $_POST["vehiNo"];
$policyNo = $_POST["policyNo"];
$engineNo = $_POST["engineNo"];
$chassisNo = $_POST["chassisNo"];
$cover = $_POST["cover"];
$password = $_POST["password"];
$addresss = $_POST["address"];




// valida
if (empty($fname)) {
    echo ("please enter your NIC");
} else if (empty($lname)) {
    echo ("please enter  a password ");
} else if (empty($nic)) {
    echo ("please enter  a password ");
} else if (empty($email)) {
    echo ("please enter  a password ");
} else if (empty($dob)) {
    echo ("please enter  a password ");
} else if (empty($tel)) {
    echo ("please enter  a password ");
} else if (empty($vehiNo)) {
    echo ("please enter  a password ");
} else if (empty($policyNo)) {
    echo ("please enter  a password ");
}else if (empty($policyNo)) {
    echo ("please enter  a password ");
}else if (empty($engineNo)) {
    echo ("please enter  a password ");
}else if (empty($cover)) {
    echo ("please enter  a password ");
}
 
$FullName = $fname." ".$lname;


Database::iud("INSERT INTO `customer` (`NIC`,`Full_Name`,`Phone_number`,`Email`,`DOB`,`Password`,`Address`)
VALUES('".$nic."','".$FullName."','".$tel."','".$email."','".$dob."','".$password."','".$addresss."')");

Database::iud("INSERT INTO `vehicle` (`Vehicle_No`,`Engine_No`,`Chasis_No`,`cus_nic`)
VALUES('".$vehiNo."','".$engineNo."','".$chassisNo."','".$nic."')");


echo("SignUp Success");













?>