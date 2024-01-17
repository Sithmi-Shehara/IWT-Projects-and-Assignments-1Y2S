<?php
require "connection.php";

$nic = $_POST["NIC"];

Database::iud("DELETE  FROM `customer` WHERE `NIC` = '".$nic."' ");
echo("Success");


?>