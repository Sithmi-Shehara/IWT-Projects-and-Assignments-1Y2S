<?php
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

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

  <div class="sidebar" style="background-color:#666666 ;">
    <div class="">
      <div style="width: 100%; color: white; margin-bottom: 0px;">
        <label for="" style="font-size: 20px; margin: 15px ;">  <?php echo $_SESSION["customer"]["Full_Name"]?></label>
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


    <div style="display: flex; justify-content: center; margin: 10px;" class="NavItemsHover" onclick="window.location = 'login.php' ">
      <label>Log Out</label>
    </div>
  </div>
</body>

</html>