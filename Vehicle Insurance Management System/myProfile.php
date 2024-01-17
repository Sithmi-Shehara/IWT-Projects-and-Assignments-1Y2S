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
    <title>My Profile</title>

    <style>
        .container1 {
            display: flex;
            
        }

        .profile-heading {
            text-align: center;
            color: #76a0ef;
            margin-left: 20px;
            font-size: 50px;
        }

        .vertical-line {
            position: absolute;
            height: 100%;
            width: 10px;
            background-color: grey;
            left: 50%;
           
        }


        .profile-image {
            
            width: 150px;
            height: 150px;
            border-radius: 50%;
            
        }

        .details-container {
            margin-left: 100px;
            margin-top: 50px;
        }

        .text {

            font-size: 25px;
            font-family: Sans-serif;
            color: grey;
            justify-content: space-between;

        }

        .newbutton {
            margin-left: 10px;
        }


        .NavItemsHover {
            color: white;
        }

        .NavItemsHover:hover {
            color: gray;
        }
    </style>
</head>

<body>

    <div style="margin: 0px; padding: 0px;">
        <?php include "hedder.php" ?>
    </div>
    <div class="container1">
        <div style="width: 170px;">
            <div class="sidebar" style="background-color:#666666; height: 900px;">
                <div class="">
                    <div style="width: 100%; color: white; margin-bottom: 0px;">
                        <label for="" style="font-size: 20px; margin: 15px ;"> Welcome <br> <?php echo $_SESSION["customer"]["Full_Name"] ?></label>
                        <hr>
                    </div>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='' ">
                    <label> My profile</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px" class="NavItemsHover" onclick="window.location='InsuranceTypes.php'">
                    <label> Insurance Type</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='ClaimRequest.php'">
                    <label> Claim Request</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='claim_status_page.php'">
                    <label> Claim Status</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='payment_details.php'">
                    <label> Payments</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='contact.php'">
                    <label> Contact Us</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='AboutUs.php'">
                    <label> About us</label>
                </div>

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location = 'login.php'">
                    <label>Log Out</label>
                </div>
            </div>
        </div>

        <div style=" width: 100%;">
            <div style="display: flex; flex-direction: row; border-bottom: 5px solid black; ">
                <h1 class="profile-heading">My Profile</h1>
            </div>


            <div style="display: flex; flex-direction: row;">
                <div style="display: flex; flex-direction: column; margin-left: 55px; border-right: 3px solid black; padding-right: 80px; height: 100vh;">
                    <!-- Profile Image -->
                    <?php
                    $image_rs = Database::search("SELECT * FROM `customer` WHERE `NIC` = '" . $_SESSION["customer"]["NIC"] . "' ");
                    $image_data = $image_rs->fetch_assoc();
                    ?>
                    <img src="<?php echo $image_data["src"] ?>" class="profile-image" style="margin-left: 20px;" id="profileimage">
                    <!-- Edit Profile Image Button -->


                    <input type="file" accept="image/*" id="uploadinput" onchange="ProfileChange()" style="display: none; ">
                    <label id="edit-button" class="newbutton" for="uploadinput" style="background-color: black; color: white; font-weight: bold; border: 1px solid white; border-radius: 50px; padding: 20px    ;">Edit Profile Image</Label>
                    <button id="edit-button" style="background-color: red; color: white; margin-top: 20px;" onclick="DeleteAccount('<?php echo $_SESSION['customer']['NIC'] ?>');" class="newbutton">Delete Account</button>

                </div>

                <div class="details-container">

                    <?php
                    $custRS = Database::search("SELECT * FROM `customer` WHERE `NIC` = '" . $_SESSION["customer"]["NIC"] . "' ");
                    $custdata = $custRS->fetch_assoc();
                    ?>



                    <div>
                        <label class="text">Full Name: </label>
                        &nbsp;&nbsp;
                        <input type="text" value="<?php echo $custdata["Full_Name"] ?>">
                        <br><br>
                    </div>
                    <div>
                        <label class="text">NIC: <?php echo $_SESSION["customer"]["NIC"] ?></label> <br><br>
                    </div>
                    <div>
                        <label class="text">Email Address:</label>
                        &nbsp;&nbsp;
                        <input type="text" value="<?php echo $custdata["Email"] ?>">
                        <br><br>
                    </div>
                    <div>
                        <label class="text">Date Of Birth: <?php echo $_SESSION["customer"]["DOB"] ?></label><br><br>
                    </div>
                    <div>
                        <label class="text">Address: </label>
                        &nbsp;&nbsp;
                        <input type="text" value="<?php echo $custdata["Address"] ?>">
                        <br><br>
                    </div>
                    <div>
                        <label class="text">Telephone No: </label>
                        &nbsp;&nbsp;
                        <input type="text" value="<?php echo $custdata["Phone_number"] ?>">
                        <br><br>
                    </div>
                    <div>
                        <label class="text" for="password">Old Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" id="OLDpassword" name="password"><br><br>
                    </div>
                    <div>
                        <label class="text" for="password">New Password:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                        <input type="password" id="NEWpassword" name="password"><br><br>

                    </div>
                    <div>
                        <label class="text" for="password">Confirm Password:&nbsp;&nbsp;</label>
                        <input type="password" id="CONpassword" name="password"><br><br>
                    </div>

                    <div>
                        <button class="update-button" class="newbutton" type="submit" onclick="UpdatePassword();">Update Password</button>
                    </div>
                </div>



            </div>



        </div>


    </div>



    <center style="background-color: #666666;">


        <div class="footerline1" style="text-align: center;font-style: italic; color: white;">
            <h3> Terms And Conditions/ Privacy Policy</h3>
            <div class="footerline2" style="text-align: center;font-style: italic; color: black;">
                <h3>No69/2,Asiri Avenue, Wellawaththa</h3>
                <div class="underlined">
                    <h3>Contact us on (+94)76 1252 976 or (+94)76 9963908 <br>
                        or safetravels@insurance.lk</h3>
                </div>


            </div>
            <div class="footerlastline">
                <h3>Follow Us On:</h3>
            </div>

            <div class="footerlastline">
                <h3 style="color: white;">Subscribe Us</h3>
                <input type="text" id="SEmail" style="font-size: 20px; border-radius: 50px; background-color: #666666; color: white; margin-bottom: 10px;">
                <br>
                <button style="background-color: black; color: white; padding: 10px; font-size: larger; border-radius: 50px; margin-bottom: 10px;" onclick="Subscribe();">Enter</button>
            </div>

        </div>

        

        <div class="image-container">
            <img src="images/104461_twitter_icon.png" alt="Image 1">
            <img src="images/1964418_logo_media_play_social_youtube_icon.png" alt="Image 2">
            <img src="images/5279112_camera_instagram_social media_instagram logo_icon.png" alt="Image 3">
            <img src="images/5305154_fb_facebook_facebook logo_icon.png" alt="Image 4">
        </div>
        <br><br>
       
    </center>
    <script src="script.js"></script>
</body>

</html>