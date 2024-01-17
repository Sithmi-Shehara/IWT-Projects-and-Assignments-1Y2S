<?php
session_start();
require "connection.php";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashborad</title>
    <link rel="stylesheet" href="style.css">



</head>

<body style="background: black ;">
    <div class="container">

        <div class="insider">
            <div class="navigation">

                <hr>
                <div class="hedder">
                    <h3>Welcome Naveen</h3>
                </div>
                <hr>

                <br><br><br>

                <div class="tabbox">
                <div class="tabs" onclick="window.location ='adminDashboard.php'">
                        <label for="">Dashborad</label>
                    </div>
                    <div class="tabs" onclick="window.location = 'ManageCustomers.php'">
                        <label for="">Manage Customers</label>
                    </div>
                    <div class="tabs" onclick="window.location = 'ManageVehicle.php'">
                        <small for="">Manage Vehicles Details</small>
                    </div>
                    <div class="tabs" onclick="window.location = 'ClaimRequest.php'">
                        <label for="">Check Claim Requests</label>
                    </div>
                </div>
            </div>

            <div style="margin-top: 150px;">
            <h1>Vehicles Details</h1>

                <table border="1px solid" style="margin-left: 30px;">
                    <tr>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">Vehicle Number</th>
                        <th style="padding-left: 50px;padding-right: 50px; font-size: larger; color: black;">Engine Number</th>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">Chasis Number</th>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">Customer NIC</th>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">Update</th>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">Delete</th>
                    </tr>





                    <?php

                    $CUST_RS = database::search("SELECT * FROM  `vehicle`");
                    $CUST_NUM = $CUST_RS->num_rows;

                    for ($x = 0; $x < $CUST_NUM; $x++) {
                        $CUST_DATA = $CUST_RS->fetch_assoc();
                    ?>
                        <tr>
                            <th><input type="text" id="VehicleNo" value="<?php echo $CUST_DATA["Vehicle_No"] ?>"></th>
                            <th><input type="text" id="Engine_No" value="<?php echo $CUST_DATA["Engine_No"] ?>"></th>
                            <th><input type="text" id="Chasis_No" value="<?php echo $CUST_DATA["Chasis_No"] ?>"></th>
                            <th><input disabled type="text" id="Chasis_No" value="<?php echo $CUST_DATA["cus_nic"] ?>"></th>

                            <th><Button style="color: white; background-color: Blue;" onclick="UpdateVehicle('<?php echo $CUST_DATA['Vehicle_No'] ?>');">Update</Button></th>
                            <th><Button style="color: white; background-color: red;" onclick="DeleteVehicle('<?php echo $CUST_DATA['Vehicle_No'] ?>');">Delete</Button></th>
                        </tr>
                    <?php

                    }
                    ?>
                </table>
            </div>




        </div>


    </div>
    <script src="../script.js"></script>
</body>

</html>