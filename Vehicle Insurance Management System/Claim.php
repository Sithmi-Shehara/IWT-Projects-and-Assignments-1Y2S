<?php

include_once "config.php";
if (isset($_POST["submit-btn"])) {

  // Retrieve the form data
  $customerName = $_POST['customer_name'];
  $nicNo = $_POST['NIC_no'];
  $address = $_POST['address'];
  $vehicleNo = $_POST['vehicle_no'];
  $phoneNumber = $_POST['phone_number'];
  $emailAddress = $_POST['email_address'];
  $grade = $_POST['grade'];
  $accidentTime = $_POST['accident_time'];
  $accidentPlace = $_POST['accident_place'];
  $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
  $comments = $_POST['comments'];

  // Prepare the SQL statement
  $sql = "INSERT INTO claimrequest (`customer_name`,nic_no, `address`, vehicle_no, phone_number, email_address, grade, accident_time, accident_place ,`image`, comments) 
            VALUES ('$customerName','$nicNo', '$address','$vehicleNo' , '$phoneNumber','$emailAddress' ,'$grade' ,'$accidentTime'  ,'$accidentPlace' ,'$image',  '$comments')";

  if ($conn->query($sql)) {
    echo "<center><fieldset>";
    echo "<h3><img src ='images/1930264_check_complete_done_green_success_icon.png' width = '30px' height = 30px>";
    echo "Your Request Recieved Successfully</h3>";
    echo "</fieldset></center>";
  } else {
    echo "Error" . $conn->error;
  }
}

?>

<?php
include_once "config.php";



// Retrieve all data from the claim_request table
$sql = "SELECT * FROM claimrequest ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // Display the table headers
  echo "<center><p> Your Request Details</p></center>";
  echo "<table border = '1'>";
  echo "<tr>";
  echo "<th>Customer Name</th>";
  echo "<th>NIC No</th>";
  echo "<th>Address</th>";
  echo "<th>Vehicle No</th>";
  echo "<th>Phone Number</th>";
  echo "<th>Email Address</th>";
  echo "<th>Grade</th>";
  echo "<th>Accident Time</th>";
  echo "<th>Accident Place</th>";
  echo "<th>Image</th>";
  echo "<th>Comments</th>";
  echo "</tr>";

  // Output data of each row
  while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td>" . $row['customer_name'] . "</td>";
    echo "<td>" . $row['nic_no'] . "</td>";
    echo "<td>" . $row['address'] . "</td>";
    echo "<td>" . $row['vehicle_no'] . "</td>";
    echo "<td>" . $row['phone_number'] . "</td>";
    echo "<td>" . $row['email_address'] . "</td>";
    echo "<td>" . $row['grade'] . "</td>";
    echo "<td>" . $row['accident_time'] . "</td>";
    echo "<td>" . $row['accident_place'] . "</td>";
    echo "<td><img src='images/" . $row['image'] . "' width='200' height='150'></td>";
    echo "<td>" . $row['comments'] . "</td>";
    echo "</tr>";
  }

  echo "</table>";
} else {
  echo "No data found.";
}

$conn->close();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Claim</title>
</head>

<body>
  <style>
    h3,
    th,
    td {
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    }

    label {
      text-align: center;
    }

    button {
      
      border-radius: 0.5em;
      background-color: lightblue;
      border: none;
      font-weight: bold;
      margin-left: 40%;
      margin-top: 1.5em;
      cursor: pointer;
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);

    }


    fieldset {
      color: green;
      border-color: green;
      width: 400px;
      border-radius: 10px;
    }

    .update-delete {
      color: black;
      border-color: darkblue;
      width: 400px;
      border-radius: 10px;
      margin-top: 20px;
      width: 800px;
      background-color: lightcyan;
    }

    p {
      font-weight: bold;
    }

    table {
      border-collapse: collapse;
      border: 2px solid black;
    }

    td {
      padding: 5px;
      border: 2px solid black;
    }

    th {
      padding: 5px;
      border: 2px solid black;
    }

    .container {
      display: flex;
      justify-content: center;
    }

    #check-status {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      text-decoration: none;
      display: inline-block;
      font-size: 16px;
      opacity: 0.8;
      transition: 0.3s;
      box-shadow: 0 12px 16px 0 rgba(0, 0, 0, 0.24), 0 17px 50px 0 rgba(0, 0, 0, 0.19);
      margin-left: 0;
    }

    .status {
      display: flex;
      justify-content: center;
      font-size: large;
      font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
      font-weight: bold;
      margin-top: 50px;
    }

    #check-status:hover {
      opacity: 1;
    }
  </style>

  <div class="status">
    Check your claim status now and stay updated on the progress of your request!"
    <button id="check-status" onclick="redirecttopage()"> Claim Status</button>
  </div>

  <div class="container">
    <fieldset class="update-delete">
      <label>

        <h3>Do you need to cancel the Request?</h3>
        <form method="post" action="DeleteClaim.php">
          <button id="delete-btn" name="delete-btn" onclick="RequestDelete()"><img src="images/cancelbtnclick.png" width="40px" height="40px">Cancel Request</button>
        </form>

       

         <form method="post" action="UpdateRequest.php">
          <h3>Do you need to Update the Request?</h3>
           <button id="update-btn" name="update-btn"><img src="images/clickhere.png" width="40px" height="40px">Update</button>
          
         </form> 

        

      </label>
    </fieldset>
  </div>



  <script>
    function RequestDelete() {
      alert("Your entire Claim Request will be deleted!");
    }

    function redirecttopage() {
      window.location.href = "claim_status_page.php";
    }
  </script>
</body>

</html>