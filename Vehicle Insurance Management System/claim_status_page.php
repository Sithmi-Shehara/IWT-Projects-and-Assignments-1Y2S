<?php
session_start();
require "connection.php";

?>

<!DOCTYPE html>
<html>

<head>
  <title>Claim Status</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      background-color: #f1f1f1;
      padding: 20px;
      width: 200px;
    }

    .main {
      flex-grow: 1;
      padding: 20px;
    }

    .footer {
      background-color: #333;
      color: #fff;
      padding: 20px;
      text-align: center;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th,
    td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }

    th {
      background-color: #f2f2f2;
    }

    .footer-line {
      border-top: 1px solid #fff;
      margin-top: 20px;
      padding-top: 10px;
    }

    .footer-social {
      display: flex;
      justify-content: center;
      align-items: center;
      margin-top: 20px;
    }

    .footer-social img {
      width: 30px;
      margin: 0 5px;
    }

    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    .container {
      display: flex;
      min-height: 100vh;
    }

    .sidebar {
      /* padding: 20px;
      width: 200px; */
      padding: 0px;
      background-color: #666666;
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
      /* Adjust the width as needed */
      height: 50px;
      margin-right: 100px;
      /* Adjust the margin between images */
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

<body style="background-color: lightblue;">

<div>
        <!-- hedder.php -->
        <div style="display: flex; justify-content: center;position: sticky; width: 100%;" class="HedderTopic1">
            <label>Safe Travels</label>
            <div>
                <img src="logo.png" class="HedderImage">
            </div>
        </div>
    </div>

  <div class="container">
    <?php include "navigation.php" ?>
    <div class="main">
      <h1>Claim Status</h1>
      <table>
        <thead>
          <tr>
            <th>Customer Name</th>
            <th>Request Date</th>
            <th>Status</th>
            <th>Approval Date</th>
          </tr>
        </thead>
        <tbody>
<!-- php Start -->
          <?php

          $claim_rs  = Database::search("SELECT * FROM `claimrequest`   WHERE `nic_no` = '" . $_SESSION["customer"]["NIC"] . "' ");
          $claim_num = $claim_rs->num_rows;


          if ($claim_num != 0 ) {
            for ($x = 0; $x < $claim_num; $x++) {
              $claim_data = $claim_rs->fetch_assoc();
          ?>

              <tr>
                <td><?php echo $claim_data["customer_name"] ?></td>
                <td><?php echo $claim_data["accident_time"] ?></td>
                
                <?php
                if ($claim_data["Status"] == 2) {
                ?>
                  <td>Approval</td>
                  <td><?php echo $claim_data["accident_time"] ?></td>
                <?php
                } else if ($claim_data["Status"] == 1) {
                ?>
                  <td>Rejected</td>
                <?php
                } else {
                ?>
                  <td>Pending</td>
                <?php
                }
                ?>


              </tr>


            <?php
            }
          } else {
            ?>

            <h1 style="color: gray;">No data in here </h1>
          <?php
          }
          ?>
          <!-- Add more rows as needed -->
        </tbody>
      </table>
    </div>
  </div>











  <?php
  include "footer.php"
  ?>

  </footer>



</body>

</html>