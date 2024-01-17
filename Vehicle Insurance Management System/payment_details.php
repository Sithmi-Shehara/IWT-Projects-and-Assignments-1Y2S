<?php
session_start();


?>

<!DOCTYPE html>
<html>

<head>
  <title>Payment Details</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      align-items: center;
      background-color: lightblue;
      justify-content: center;
      border: 1px solid;
    }

    .main {
      flex-grow: 1;
      padding: 20px;
    }

    .footerbutton {
      margin-top: 300px;
    }

    .footerline1 {
      text-align: center;
      font-style: italic;
      color: purple;
    }

    .footerline2 {
      text-align: center;
      font-style: inherit;
      color: black;
    }

    .footerlastline {
      text-align: center;
      font-style: italic;
      color: purple;
    }

    hr {
      border: 1px solid black;
    }

    .logo {
      display: block;
      margin-left: auto;
      margin-right: auto;
    }

    .image-container {
      display: flex;
      justify-content: center;
    }

    .image-container img {
      width: 50px;
      /*Adjust the width as needed */
      height: 50px;
      margin-right: 100px;
    }


    .container {
      display: flex;
      min-height: 100vh;
      background-color: lightblue;
      justify-content: center;

    }

    .color {
      background-color: white;
    }

    .sidebar {
      /* padding: 20px;
      width: 200px; */
      padding: 0px;
      background-color: #666666;
    }


    .contentBodyPaymentDetails {
      width: 100ch;
      height: 500px;
      /* justify-content: center;
      align-items: center;
      align-content: center; */
    }

    .NavItemsHover {
      color: white;
    }

    .NavItemsHover:hover {
      color: gray;
    }
  </style>

  <link rel="stylesheet" href="styles.css">
  <!-- <form name="Userpaymentform" method="POST" action="payment_report.php"></form> -->
</head>

<body>
  <?php include "hedder.php"; ?>

  <div style="display: flex; ">

    <div>
      <div class="sidebar" style="background-color:#666666 ; height: 100vh;">
        <div class="">
          <div style="width: 100%; color: white; margin-bottom: 0px;">
            <label for="" style="font-size: 20px; margin: 15px ;"><?php echo $_SESSION["customer"]["Full_Name"] ?></label>
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

        <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover"onclick="window.location='AboutUs.php'">
          <label> About us</label>
        </div>

        <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="logout();">
          <label>Log Out</label>
        </div>
      </div>

    </div>

    <div>
      <div class="container" style="margin-left: 250px;">
      
        <div class="contentBodyPaymentDetails" style=" width: 100%; ">
        
          <div>


          <div style="display: flex; justify-content: center;">
          <h2>Payment Report</h2>
          </div>

            <label for="paymentDate">Payment Date:</label>
            <input type="date" id="date" name="date" required><br><br>

            <label for="paymentDate">Amount:</label>
            <input type="text" id="amount" required><br><br>

            </select><br><br>

            <h3>Payment Details</h3>

            <label for="cardholder-name">Card Holder's Name:</label>
            <input type="text" id="cardholdername" name="cardholder-name"><br><br>

            <label for="card-number">Card Number:</label>
            <input type="text" id="cardnumber" name="card-number" placeholder="card-number" pattern="[0-9]{16}" required><br><br>

            <label for="cvv-number">CVV Number:</label>
            <input type="text" id="cvvnumber" name="cvv-number" placeholder="cvv-number" pattern="[0-9]{3}" required><br><br>

            <label for="expire-date">Expiration Date:</label>
            <input type="date" id="expire" required><br><br>


            <br><br><br>
            <div style="float:  center  ;">
              <button onclick="Pay();"> Pay </button>
            </div>


            <div style="float: right;">
              <!-- <button onclick="download();">Download Report</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span></span> -->
            </div>
          </div>



        </div>
      </div>

    </div>
  </div>

  <script src="script.js"></script>

  <?php include "footer.php" ?>


</body>

</html>