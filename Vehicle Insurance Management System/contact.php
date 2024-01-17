<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact Us</title>
    <link rel="stylesheet" href="contactstyle.css">


</head>

<body style="background-color: lightskyblue;">
    <?php include "hedder.php" ?>

   
    <div class="container1">
        <?php include "navigation.php" ?>
       
        <div class="form-contact">
            <div class="form-form">


                <div style="margin-left: 50px;">
                    <label for="" style="font-size: 50px; margin: 100px; color: blue;">Contact Us</label><br>
                    <br><br>
                    <label for="name">Name</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>:</span>
                    <label for=""><?php echo $_SESSION["customer"]["Full_Name"] ?></label>
                    <br><br>

                    <label for="email">Email Address:</label>
                    <label for=""><?php echo $_SESSION["customer"]["Email"] ?></label>
                    <br><br>

                    <label for="phone">Phone
                        No</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>:</span>
                    <label for=""><?php echo $_SESSION["customer"]["Phone_number"] ?></label>
                    <br><br>

                    <label for="reason">Reason:</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>:</span>
                    <input type="reason" id="reason" name="reason" required>
                    <br><br>

                    <label for="message">Message</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>:</span>
                    <input type="message" id="message" name="message" required>
                    <br><br>

                    <br><br>

                    <button onclick="SubmitMessage();">Submit</button>

                    <button onclick="window.location.reload();">clear</button>
                   


                </div>


                <div class="">
                    <div style="display: flex; justify-content: center; margin-top: 40px; margin-left: 80px;">
                        <label for="" style="font-size: 50px; color:blue;">Where to Find Us</label><br>
                    </div>
                    <img src="images/google map.jpg" style="height: auto; width: 300px; margin-left: 110px;">


                    <div style="margin-top: 50px; margin-left: 110px; ">
                        <h1> Get In Touch</h1>
                    </div>
                    <div style="margin-top: 10px; margin-left: 110px; ">

                        <p>You'll find us offices sitting right in the <br>town center in the middle of Western <br>Province </p>

                    </div>
                </div>



            </div>

        </div>



    </div>


    <?php include "footer.php" ?>
    <script src="script.js"></script>
    
</body>

</html>