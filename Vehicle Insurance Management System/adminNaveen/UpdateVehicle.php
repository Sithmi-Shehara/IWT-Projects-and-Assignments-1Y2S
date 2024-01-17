<?php 
require "connection.php";
session_start();

$vehicle_No = $_POST["vehicleNo"];
$Engine_No = $_POST["Engine_No"];
$Chasis_No = $_POST["Chasis_No"];



    Database::iud("UPDATE `vehicle` SET `Vehicle_No` = '".$vehicle_No."', `Engine_No` = '".$Engine_No."', `Chasis_No` = '".$Chasis_No."' 
    WHERE `cus_nic` = '".$_SESSION["customer"]["NIC"]."' ");

    echo("Update Success");

?>