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
                    <h3>Welcome <?php echo $_SESSION["customer"]["Full_Name"] ?></h3>
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

            <div>
                <div class="custInfo">
                    <div class="custhed">
                        <label style="color: black; font-size: 25px;">Number of Customers</label><br>
                    </div>
                    <div class="custhed">
                        <?php
                        $CUS_RS = Database::search("SELECT * FROM `customer` ");
                        $CUS_NUM = $CUS_RS->num_rows;
                        ?>
                        <label style="font-weight: bolder; color: orange; font-size: 25px; "><?php echo $CUS_NUM ?></label><br>
                    </div>
                </div>

        

              

            </div>

            <div>
                <div class="custInfo">

                    <div class="custhed">
                        <label style="color: black; font-size: 25px;">Number of Vehicles Registered</label><br>
                    </div>
                    <?php
                    $CUS_RS = Database::search("SELECT * FROM `customer` ");
                    $CUS_NUM = $CUS_RS->num_rows;
                    ?>
                    <div class="custhed">
                        <label style="font-weight: bolder; color: orange; font-size: 25px; "><?php echo $CUS_NUM ?></label><br>
                    </div>
                </div>

            </div>






        </div>




    </div>


    </div>

</body>

</html>