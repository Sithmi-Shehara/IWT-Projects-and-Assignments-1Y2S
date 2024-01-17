<?php

require "../connection.php";
$nic = $_POST["NIC"]; //nic eka javascript eken php script ekata  aragannawa


$Vrs = Database::search("SELECT * FROM `vehicle` INNER JOIN `customer` ON
`vehicle`.`cus_nic` = `customer`.`NIC`   
WHERE `customer`.`NIC` = '" . $nic . "' "); //VEHICLE EKA DELETE KARANAWA .

$vdata = $Vrs->fetch_assoc();
$num = $Vrs->num_rows;

if ($num != 0) {
    Database::iud("DELETE FROM `vehicle` WHERE `Vehicle_No` = '" . $vdata["Vehicle_No"] . "'  "); //mulinma Vehicle eka delete karanne. itapasse thama customer wa delete karanne

    Database::iud("DELETE FROM `customer` WHERE `NIC` = '" . $nic . "'  ");
    echo ("Delete Success (vehicle and Customer)");
} else {
    Database::iud("DELETE FROM `customer` WHERE `NIC` = '" . $nic . "'  ");
    echo ("Delete  Success (Customer)"); // vehicle ekak naththan witharai methanadi Customer Delete Wenne
}
