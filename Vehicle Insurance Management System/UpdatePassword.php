<?php
session_start();

require "connection.php";

$OLDpassword = $_POST["OLDpassword"];
$NEWpassword = $_POST["NEWpassword"];
$CONpassword = $_POST["CONpassword"];

// validations
if(empty($OLDpassword)){
    echo("Please Enter a Old Password");
}else if(empty($NEWpassword)){
    echo("Please Enter a New Password");
}else if(empty($CONpassword)){
    echo("Please Enter a confirm Password");
}else{

 $password_rs =    Database::search("SELECT * FROM `customer` WHERE `NIC` =  '".$_SESSION["customer"]["NIC"]."' ");

 $password_DATA = $password_rs->fetch_assoc();

 if($NEWpassword == $CONpassword){

    if($password_DATA["Password"] == $OLDpassword){
        Database::iud("UPDATE `customer` SET `password` = '".$CONpassword."' WHERE `NIC` = '".$_SESSION["customer"]["NIC"]."' ");
    }

 }else {
    echo("Please Try again Later");
 }
    
// Database::iud("UPDATE `customer`  ")

}




?>