<?php 
require "connection.php";
session_start();

$SEmail = $_POST["SEmail"];


if(empty($SEmail)){
    echo("Please Enter a Email ");
}else{
    Database::iud("INSERT INTO `subscribe` (`Email`) VALUE ('".$SEmail."') ");
    echo("Thanks for the Subscribe us");
}

?>