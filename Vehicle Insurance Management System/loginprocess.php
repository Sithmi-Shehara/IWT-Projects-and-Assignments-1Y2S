<?php
session_start();
require "connection.php";


$NIC = $_POST["NIC"];
$password = $_POST["password"];



// Validation part
if (empty($NIC)) {
    echo ("please enter your NIC");
} else if (empty($password)) {
    echo ("please enter  a password ");
} else {

    $Customer_rs = Database::search("SELECT * FROM `customer` WHERE `NIC` = '".$NIC."' AND `Password` = '".$password."' ");
    $Customer_data = $Customer_rs->fetch_assoc();

    $Customer_Num = $Customer_rs->num_rows;

    if($Customer_Num == 1){
        $_SESSION["customer"] = $Customer_data;
        
        echo("Success");
    }else{
        echo("Error");
    }

    
}
