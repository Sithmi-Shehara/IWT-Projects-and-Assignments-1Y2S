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
    <title>About Us</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <style>
        .NavItemsHover {
            color: white;
        }

        .NavItemsHover:hover {
            color: gray;
        }
    </style>


</head>

<body>
    <?php include "hedder.php" ?>
    <div style="display: flex;">
        <div>
            <div class="sidebar" style="background-color:#666666 ; height: 800px;">
                <div class="">
                    <div style="width: 100%; color: white; margin-bottom: 0px;">
                   
                        <label for="" style="font-size: 20px; margin: 15px ;"> <?php echo $_SESSION["customer"]["Full_Name"] ?></label>
                        <hr>
                    </div>
                </div>

                
                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location='myProfile.php' ">
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

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover">
                    <label> About us</label>
                </div>

                

                <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location = 'login.php' ">
                    <label>Log Out</label>
                </div>
            </div>
        </div>

        <div>
            <div class="heading">
                <div class="underline">
                    <h1>About Us</h1>
                </div>
                <p>Welcome To SAFE TRAVELS Insurance Company.Enjoy Your Travel With A Great Cover!.....</p>
            </div>
            <div class="container">
                <section class="about">
                    <div class="about-image">
                        <img src="images/aboutus.jpg">
                    </div>
                    <div class="about-content">
                        <p>At SAFE TRAVELS,we are specialize in providing well-planned solutions to manage vehicle insurance with expertise and latest technology and we are loyal to ensure our clients with favourable attitudes related to clients'vehicles.</p>
                        <p>Our experienced professionals has developed this system to overcome challenges faced by vehicle owners and insurer with proper policy management,claims processing,customer management,risk management and reports</p>
                        <p>With a best service,we are surviving in the insurance industry with our innovative and effective management system.Our goal is to make insurance processes easy and to enhance customer experiences.Join us with this journey as we create a better future with transparency and trustworthy.</p>
                    </div>
                </section>
            </div>
        </div>





    </div>
    <?php include "footer.php" ?>


</body>

</html>