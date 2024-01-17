<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>All Insurance Types</title>

  <style>
    body {
      text-align: center;
      background-color: rgb(196, 232, 236);
    }

    .full_coverImg {
      margin-right: 50px;
    }

    .thirdCoverImg {
      margin-left: 50px;
    }

    .tableCenter {
      margin-left: auto;
      margin-right: auto;
      margin-top: 20px;
      margin-bottom: 150px;
      width: max-content
    }

    img:hover {
      animation: shake 0.5s;
      animation-iteration-count: infinite;
    }

    @keyframes shake {
      0% {
        transform: translate(1px, 1px) rotate(0deg);
      }

      10% {
        transform: translate(-1px, -2px) rotate(-1deg);
      }

      20% {
        transform: translate(-3px, 0px) rotate(1deg);
      }

      30% {
        transform: translate(3px, 2px) rotate(0deg);
      }

      40% {
        transform: translate(1px, -1px) rotate(1deg);
      }

      50% {
        transform: translate(-1px, 2px) rotate(-1deg);
      }

      60% {
        transform: translate(-3px, 1px) rotate(0deg);
      }

      70% {
        transform: translate(3px, 1px) rotate(-1deg);
      }

      80% {
        transform: translate(-1px, -1px) rotate(1deg);
      }

      90% {
        transform: translate(1px, 2px) rotate(0deg);
      }

      100% {
        transform: translate(1px, -2px) rotate(-1deg);
      }
    }

    .move-content {
      position: absolute;
      top: 130px;
      right: 100px;
      left: 100px;

    }

    .sidebar {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      background-color: #666666;
    }

    .sidebar>div {
      flex: 1 0 100%;
      
    }

    .NavItemsHover {
      padding: 5px;
      cursor: pointer;
      color: black;
      color: white;
    }

    .NavItemsHover:hover {
      color: gray;
    }
  </style>
</head>

<body>

  <?php
  include_once "hedder.php";
  ?>



  <div class="sidebar" style="height: 450px;">
    <div>
      
      <label for="" style="font-size: 20px; margin: 15px; color: white;"><?php echo $_SESSION["customer"]["Full_Name"]?></label>
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

    <div class="NavItemsHover" onclick="window.location='AboutUs.php'">
      <label>About Us</label>
    </div>



    <div class="NavItemsHover" onclick="logout();">
      <label>Log Out</label>
    </div>
  </div>


  <div class="move-content">
    <div>
      <h1>All Insurance Types</h1>
    </div>

    <div >
      <table class="tableCenter">
        <tr>  
          <th>
            <a href="FullInsurance.php">
              <img src="images/fullCoverage.jpg" alt="fullCoverage" class="full_coverImg" />
            </a>
          </th>

          <th>
            <a href="ThirdPartyInsurance.php">
              <img src="images/third_Party.jpg" alt="third_Party" class="thirdCoverImg" />
            </a>
          </th>
        </tr>

        <tr>
          <th>Full Insurance</th>
          <th>Third Party Insurance</th>
        </tr>
      </table>
    </div>
  </div>
  <?php

  include_once "footer.php";

  ?>
</body>

</html>



<!--References-https://www.w3schools.com/howto/howto_css_shake_image.asp-->
