<?php 
require "connection.php";

$ID = $_POST["Vid"];

Database::iud("UPDATE `claimrequest` SET `Status` = '3'  WHERE `ID` = '".$ID."' ");
echo("Rejected");


?>