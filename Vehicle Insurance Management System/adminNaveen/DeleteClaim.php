<?php 
require "connection.php";
session_start();

$ID = $_POST["vid"];


Database::iud("DELETE FROM `claimrequest` WHERE `ID` = '".$ID."' ");

echo("Delete Success");






?>