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
    <title>Admin Dashborad</title>
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
            <h1>Customers</h1>

                <table border="1px solid" style="margin-left:2px;">
                    <tr>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">NIC</th>
                        <th style="padding-left: 50px;padding-right: 50px; font-size: larger; color: black;">Full Name</th>
                        <th style="padding-left: 40px;padding-right: 40px; font-size: larger; color: black;">Email</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Phone Number</th>
                        <th style="padding-left: 50px;padding-right: 50px; font-size: larger; color: black;">Address</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Delete Customer</th>
                        <th style="padding-left: 10px;padding-right: 10px; font-size: larger; color: black;">Update</th>
                    </tr>

                    <?php

                    $CUST_RS = database::search("SELECT * FROM  `customer`");
                    $CUST_NUM = $CUST_RS->num_rows;

                    for ($x = 0; $x < $CUST_NUM; $x++) {
                        $CUST_DATA = $CUST_RS->fetch_assoc();
                    ?>
                        <tr>
                            <th><input type="text" disabled id="nic" value="<?php echo $CUST_DATA["NIC"] ?>"></th>
                            <th><input type="text" id="name" value="<?php echo $CUST_DATA["Full_Name"] ?>"></th>
                            <th><input type="text" id="email" value="<?php echo $CUST_DATA["Email"] ?>"></th>
                            <th><input type="text" id="mobile" value="<?php echo $CUST_DATA["Phone_number"] ?>"></th>
                            <th><input type="text" id="address" value="<?php echo $CUST_DATA["Address"] ?>"></th>

                            <th><Button style="color: white; background-color: red;" onclick="DeleteCustomer('<?php echo $CUST_DATA['NIC'] ?>');">Delete</Button></th>
                            <th><Button style="color: white; background-color: blue;" onclick="UpdateCustomer('<?php echo $CUST_DATA['NIC'] ?>');">Update</Button></th>
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