<?php
require "connection.php";
session_start();

$anic = $_POST["anic"];
$ap =$_POST["ap"];



$admin_Rs = Database::search("SELECT * FROM `admin` WHERE `S_NIC` = '".$anic."' AND `Password` = '".$ap."' ");
$admin_num = $admin_Rs->num_rows;





if($admin_num == 1 ){
    $admin_data = $admin_Rs->fetch_assoc();
    $_SESSION["admin"] = $admin_data;
    echo("Success");


}

?>