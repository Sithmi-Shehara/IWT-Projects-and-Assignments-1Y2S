<?php
require "connection.php";

$V_No = $_POST["V_No"];


Database::iud("DELETE  FROM `vehicle` WHERE `Vehicle_No` = '".$V_No."' ");
echo("Success");


?>