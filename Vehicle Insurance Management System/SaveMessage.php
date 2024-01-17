<?php
session_start(); // 

require "connection.php";//connection file eka hadagannawa

$reson = $_POST["reason"];
$message = $_POST["message"]; // values deka php script ekata gannawa.

// validation Part
if(empty($reson)){
    echo(" Please enter a Reason ");
}else if(empty($message)){
    echo("Please Enter a Message");
}else{

    Database::iud("INSERT INTO `contact_us` (`NIC`,`Message`,`Reason`) 
    VALUES ('".$_SESSION["customer"]["NIC"]."','".$message."','".$reson."') "); // methanin create eka sampurna wenawa.
    
    echo("Success");

     
}
