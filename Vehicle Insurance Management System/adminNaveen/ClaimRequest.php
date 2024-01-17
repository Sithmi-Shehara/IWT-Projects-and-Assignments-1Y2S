<?php
require "../connection.php";

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Claim Request </title>
    <link rel="stylesheet" href="style.css">



</head>

<body style="background: black ;">

    <div class="container">

        <div class="insider">
            <div class="navigation">

                <hr>
                <div class="hedder">
                    <h3>Welcome Admin</h3>
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
            <h1>Claim Requests</h1>

                <table border="1px solid" style="margin-left:2px;">
                    <tr>
                        <th style="padding-left: 20px;padding-right: 20px; font-size: larger; color: black;">NIC</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Customer Name</th>
                        <!-- <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">address</th> -->
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Vehicle_No</th>
                        <!-- <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Phone Number</th> -->
                        <!-- <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Email</th> -->
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Grade</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">accident time</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Comments</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Change Status</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Accident Place</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Image</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Delete</th>

                    </tr>

                    <?php

                    $CUST_RS = database::search("SELECT * FROM  `claimrequest` ");
                    $CUST_NUM = $CUST_RS->num_rows;

                    for ($x = 0; $x < $CUST_NUM; $x++) {
                        $CUST_DATA = $CUST_RS->fetch_assoc();
                    ?>
                        <tr>
                            <th><?php echo $CUST_DATA["nic_no"] ?></th>
                            <th><?php echo $CUST_DATA["customer_name"] ?></th>
                            <!-- <th><?php echo $CUST_DATA["address"] ?></th> -->
                            <th><?php echo $CUST_DATA["vehicle_no"] ?></th>
                            <!-- <th><?php echo $CUST_DATA["phone_number"] ?></th> -->
                            <!-- <th><?php echo $CUST_DATA["email_address"] ?></th> -->
                            <th><?php echo $CUST_DATA["grade"] ?></th>
                            <th><?php echo $CUST_DATA["accident_time"] ?></th>
                            <th><?php echo $CUST_DATA["comments"] ?></th>
                            <th>

                                <?php
                                if ($CUST_DATA["Status"] == 0) {
                                ?>
                                    <Button style="color: white; background-color: green;" onclick="ApprovedCustomer('<?php echo $CUST_DATA['ID'] ?>');">Approve</Button>
                                    <Button style="color: white; background-color: red;" onclick="RejectVehicle('<?php echo $CUST_DATA['ID'] ?>');">Reject</Button>
                                <?php
                                } else if($CUST_DATA["Status"] == 1) {
                                ?>
                                    <Button style="color: white; background-color: gray;" onclick="ApprovedCustomer('<?php echo $CUST_DATA['ID'] ?>');">Approved</Button>
                                <?php
                                }else{
                                    ?>
                                     <Button style="color: white; background-color: black;" disabled onclick="RejectVehicle('<?php echo $CUST_DATA['ID'] ?>');">Rejected</Button>
                                    <?php
                                }
                                ?>

                            </th>
                            <th><?php echo $CUST_DATA["accident_place"] ?></th>
                            <th><img src="../images/<?php echo $CUST_DATA["image"] ?>" style="height: 50px; width: 50px;" alt=""></th>


                            <th><Button style="color: white; background-color: red;" onclick="DeleteClaim('<?php echo $CUST_DATA['ID'] ?>');">Delete</Button></th>

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