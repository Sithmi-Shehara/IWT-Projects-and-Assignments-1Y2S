 <?php

include_once "config.php";

// Perform the update operation
if (isset($_POST["update-btn"])) {
    // Retrieve the form data
    $customerName = $_POST['customer_name'];
    $nicNo = $_POST['NIC_no'];
    $address = $_POST['address'];
    $vehicleNo = $_POST['vehicle_no'];
    $phoneNumber = $_POST['phone_number'];
    $emailAddress = $_POST['email_address'];
    $grade = isset($_POST['grade']) ? $_POST['grade'] : '';
    $accidentTime = $_POST['accident_time'];
    $accidentPlace = $_POST['accident_place'];
    $image = isset($_FILES['image']['name']) ? $_FILES['image']['name'] : '';
    $comments = $_POST['comments'];

    // Update the latest inserted record in the claim_request table
    $sql = "UPDATE claimrequest 
            SET customer_name = IF('$customerName' = '', customer_name, '$customerName'),
                NIC_no = IF('$nicNo' = '', NIC_no, '$nicNo'),
                address = IF('$address' = '', address, '$address'),
                vehicle_no = IF('$vehicleNo' = '', vehicle_no, '$vehicleNo'),
                phone_number = IF('$phoneNumber' = '', phone_number, '$phoneNumber'),
                email_address = IF('$emailAddress' = '', email_address, '$emailAddress'),
                grade = IF('$grade' = '', grade, '$grade'),
                accident_time = IF('$accidentTime' = '', accident_time, '$accidentTime'),
                accident_place = IF('$accidentPlace' = '', accident_place, '$accidentPlace'),
                image = IF('$image' = '', image, '$image'),
                comments = IF('$comments' = '', comments, '$comments')
            WHERE id = (SELECT id FROM claimrequest ORDER BY id DESC LIMIT 1)";

    if ($conn->query($sql) === TRUE) {
        echo"<center><fieldset><h3><img src ='images/updateSuccess.png' width = '60px' height = 60px>";
        echo "Request Details updated successfully.</h3></fieldset></center>";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}

// Retrieve the updated record from the database
$sql = "SELECT * FROM claimrequest ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Generate the HTML table
    echo "<table border = '1'>";
    echo"<br><br>";
    echo "<center><p>Your Request Details</p></center>";
    echo "<tr><th>ID</th><th>Customer Name</th><th>NIC No</th><th>Address</th><th>Vehicle No</th><th>Phone Number</th><th>Email Address</th><th>Grade</th><th>Accident Time</th><th>Accident Place</th><th>Image</th><th>Comments</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row['ID'] . "</td>";
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
    echo "No records found.";
}

$conn->close();

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UpdateClaim</title>
    <style>
        h3, th ,td ,p{
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
        }
        button{
            
        border-radius: 0.5em;
        background: #ccc;
        border: none;
        font-weight: bold;
        margin-left: 40%;
        margin-top: 1.5em;
        align-items: flex-end;
      }
       button:hover {
        background-color:grey;
        cursor: pointer;
      }
      fieldset{
      color:black;
      border-color: yellow;
      width:500px;
      padding-top: 0;
      border-radius: 20px;  
    
    }
    p{
        font-weight: bold;
    }
    table{
        border-collapse: collapse;
        border:2px solid black;
    }
    td{
        padding:5px;
        border:2px solid black;
    }
    th{
        padding:5px;
        border:2px solid black;
    }
    </style>
</head>
<body>
<button onclick="window.location.href = 'Claim.php';"><img src = "images/back.png" width = 40px height = "40px">Back</button>
</body>
</html>


