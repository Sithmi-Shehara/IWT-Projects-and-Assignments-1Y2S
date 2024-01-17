<?php
require "connection.php";

$NIC = $_POST["NIC"];
$name = $_POST["name"];
$email = $_POST["email"];
$mobile = $_POST["mobile"];
$address = $_POST["address"];



// validation part


if(empty($name)){
    echo("Please enter Customer Name");
}else if(empty($email)){
    echo("Please enter Customer Email");
}else if(empty($mobile)){
    echo("Please enter Customer mobile");
}else if(empty($address)){
    echo("Please enter Customer adddress");
}else{


Database::iud("UPDATE `customer`
SET `Full_Name` = '".$name."', `Phone_number` = '".$mobile."' , `Email` = '".$email."' , `Address` = '".$address."'
WHERE `NIC` = '".$NIC."' ");

echo("Update Success");

}




?>