<?php
session_start();
require "connection.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>Claim Request</title>

  
    <style>
    body {
      background-color: rgb(196, 232, 236);
    }

    .myForm {
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      font-size: 0.8em;
      width: 60em;
      padding: 1em;
      border: 1px solid #ccc;
      background-color: white;
    }

    .myForm * {
      box-sizing: border-box;
    }

    .myForm fieldset {
      border: none;
      padding: 0;
    }

    .myForm legend,
    .myForm label {
      padding: 0;
      font-weight: bold;
    }

    .myForm label.choice {
      font-size: 0.9em;
      font-weight: normal;
    }

    .myForm label {
      text-align: left;
      display: block;
    }

    .myForm input[type="text"],
    .myForm input[type="tel"],
    .myForm input[type="email"],
    .myForm input[type="datetime-local"],
    .myForm input[type="file"],
    .muform input[type="checkbox"],
    .myForm select,
    .myForm textarea {
      float: right;
      width: 60%;
      border: 1px solid #ccc;
      font-family: "Lucida Sans Unicode", "Lucida Grande", sans-serif;
      font-size: 0.9em;
      padding: 0.3em;
    }

    .myForm textarea {
      height: 100px;
    }

    .myForm input[type="radio"],
    .myForm input[type="checkbox"] {
      margin-left: 40%;
    }

    .myForm button {
      padding: 1em;
      border-radius: 0.5em;
      background: darkgrey;
      border: none;
      font-weight: bold;
      margin-left: 40%;
      margin-top: 1.5em;
    }

    .myForm button:hover {
      background-color: grey;
      cursor: pointer;
    }

    .move-content {
      position: relative;
      top: -350px;
      right: 100px;
      left: 100px;
      margin-top: 400px;

    }

    .sidebar {

      background-color: #666666;

    }


    .NavItemsHover {
      display: flex;
      justify-content: center;
      padding: 10px;
      cursor: pointer;
      color: white;
    }

    .NavItemsHover:hover {
      color: gray;
    }

    .container {
      display: flex;
      justify-content: start;
    }



    .HedderTopic1 {
      display: flex;
      justify-content: start;
      background-color: #666666;
      font-size: 95px;
      font-weight: 100px;
      color: white;
    }
  </style>
</head>

<body>

  <div>
   
    <div style="display: flex; justify-content: center;position: sticky; width: 100%;" class="HedderTopic1">
      <label>Safe Travels</label>
      <div>
        <img src="logo.png" class="HedderImage">
      </div>
    </div>
  </div>

  <div class="container">
    <div class="sidebar">
      <div>
        
        <label for="" style="font-size: 20px; color:white; margin: 15px;"><?php echo $_SESSION["customer"]["Full_Name"]?></label>
        <hr>
      </div>

      <div class="NavItemsHover" onclick="window.location='myprofile.php'">
        <label>My Profile</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='InsuranceTypes.php'">
        <label>Insurance Types</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='ClaimRequest.php'">
        <label>Claim Request</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='claim_status_page.php'">
        <label>Claim Status</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='payment_details.php'">
        <label>Payments</label>
      </div>

      <div class="NavItemsHover" onclick="window.location='contact.php'">
        <label>Contact Us</label>
      </div>

      <div class="NavItemsHover"onclick="window.location='AboutUs.php'">
        <label>About Us</label>
      </div>

      <div class="NavItemsHover" onclick="logout();">
        <label>Log Out</label>
      </div>
    </div>

   

    <div class="move-content">
      <center>
        <h1>Claim Request</h1>

        <form class="myForm" method="post" enctype="multipart/form-data" action="Claim.php">
          <p>
            <label>Name
              <input type="text" name="customer_name" id="customer_name" placeholder="Only First Name & Last Name" required />
            </label>
          </p>

          <p>
            <label>Owner's NIC No
              <input type="text" name="NIC_no" id="NIC_no" maxlength="12" placeholder="1996*****V / 2001******45" pattern="[0-9V]+" title="Enter numbers from 0 to 9 or the letter V" required />
            </label>
          </p>

          <p>
            <label>Address
              <input type="text" name="address" id="address" required />
            </label>
          </p>

          <p>
            <label>Vehicle No
              <input type="text" name="vehicle_no" id="vehicle_no" placeholder="CAR-2548" required />
            </label>
          </p>

          <p>
            <label>Phone
              <input type="tel" name="phone_number" id="phone_number" maxlength="10" placeholder="071*****92" pattern="[0-9]+" title="Enter numbers from 0 to 9 only" required />
            </label>
          </p>

          <p>
            <label>Email
              <input type="email" name="email_address" id="email_address" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" />
            </label>
          </p>

          <fieldset>
            <legend>What is the Grade of the Accident?</legend>
            <p>
              <label class="choice">
                <input type="radio" name="grade" value="A" /> Grade
                A
              </label>
            </p>
            <p>
              <label class="choice">
                <input type="radio" name="grade" value="B" />Grade
                B
              </label>
            </p>
            <p>
              <label class="choice">
                <input type="radio" name="grade" value="C" />Grade
                C
              </label>
              <label style="font-size:medium;">Grading Criteria</label>
            <p>Important : - You may choose a preliminary grade for your claim based on your own rough Estimagte,<br>
              but the Final value of the claim will ultimately . we determine by the insurance compnay. <br> <br> <br>

              A :- If vehicle Accident damage is less than LKR 50,000
              <br>
              <br>
              <br>
              B :- If Vehicle accident damage is less than LKR 200,000
              <br>
              <br>
              <br>
              C :- If Vehicle accident damage is abou than LKR 200,000
            </p>



            <p>
              <label>Accident Date/Time
                <input type="datetime-local" name="accident_time" required />
              </label>
            </p>

            <p>
              <label>Accident Place
                <input type="text" name="accident_place" id="accident_place" placeholder="Police station name of area" required />
              </label>
            </p>

            <p>
              <label>Vehicle Image:
                <input type="file" id="image" name="image" />
              </label>
            </p>

            <p>
              <label>Additional Details
                <textarea name="comments" id="comments" maxlength="500"></textarea>
              </label>
            </p>

            <br><br><br>
            <label for="doc">I agree to the terms and conditions
              <input type="checkbox" id="doc" onclick="enableButton()" />
            </label>

            <p>

              <button name="submit-btn" id="submit" value="submit" disabled>Submit</button>

            </p>



        </form>
      </center>
    </div>


  </div>







  <script src="js/index.js"></script>
  <?php

  include_once "footer.php";

  ?>
  <script>
    function enableButton() {

      if (document.getElementById("doc").checked) {

        document.getElementById("submit").disabled = false;
      } else {
        document.getElementById("submit").disabled = true;
      }
    }
  </script>
</body>

</html>