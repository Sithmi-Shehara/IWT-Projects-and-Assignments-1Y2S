  <?php
include_once "config.php";

if (isset($_POST["delete-btn"])) {
    // Delete the latest entered record from the claim_request table
    $sql = "DELETE FROM claimrequest ORDER BY id DESC LIMIT 1";
    if ($conn->query($sql)) {
        echo"<center><fieldset><h3><img src ='images/Delete_Sucess.png' width = '30px' height = 30px>";
        echo "Your Request Deleted Successfully."."</fieldset></center>";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Request</title>
    <style>
        button{
        border-radius: 0.5em;
        background: #ccc;
        border: none;
        font-weight: bold;
        margin-left: 40%;
        margin-top: 1.5em;
      }
       button:hover {
        background-color:lightgray ;
        cursor: pointer;
      }
      h3{
        font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;;
      }
      fieldset{
      color:black;
      border-color: red;
      width:400px;
      border-radius: 10px;
      
    }
        
    </style>
</head>
<body>
    <br>
<button onclick="window.location.href = 'ClaimRequest.php';"><img src = "images/back.png" width = 40px height = "40px" >back</button>

</body>
</html>