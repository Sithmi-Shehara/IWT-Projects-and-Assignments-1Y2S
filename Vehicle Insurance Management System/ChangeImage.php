<?php
require "connection.php";
session_start();

if (isset($_FILES["uploadinput"])) {
    $file = $_FILES["uploadinput"];

    $fileType = $file["type"];

    $allowedExtentions  = array("image/jpg", "image/png", "image/jpeg", "image/xml+svg");



    if (in_array($fileType, $allowedExtentions)) {


        $fileExtention;


        if ($fileType == "image/jpg") {
            $fileExtention = ".jpg";
        } else if ($fileType == "image/png") {
            $fileExtention = ".png";
        } else if ($fileType == "image/jpeg") {
            $fileExtention = ".jpeg";
        } else if ($fileType == "image/xml+svg") {
            $fileExtention = ".svg";
        }


        $cus_rs = Database::search("SELECT * FROM `customer` WHERE `NIC` = '" . $_SESSION["customer"]["NIC"] . "'");
        $cus_data = $cus_rs->fetch_assoc();


        if ($cus_data["src"] == "") {

            $NewFileName = "images//ProfileImages//" . $_SESSION["customer"]["NIC"] . $fileExtention;
            move_uploaded_file($file["tmp_name"], $NewFileName);
            Database::iud("UPDATE `customer` SET `src`= '" . $NewFileName . "'  WHERE `NIC` = '" . $_SESSION["customer"]["NIC"] . "' ");

            echo ($NewFileName);
        } else {
            unlink($cus_data["src"]);

            $NewFileName = "images//ProfileImages//" . $_SESSION["customer"]["NIC"] . " " . $fileExtention;
            move_uploaded_file($file["tmp_name"], $NewFileName);
            Database::iud("UPDATE `customer` SET `src`= '" . $NewFileName . "'  WHERE `NIC` = '" . $_SESSION["customer"]["NIC"] . "' ");
            echo ($NewFileName);
        }
    } else {
        echo ("please Select Valid Image");
    }
} else {
    echo ("Please select a Image");
}
