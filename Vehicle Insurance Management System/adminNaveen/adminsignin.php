<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Signin</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="background: black ;">

    <div class="container">


        <div class="heddingBox">
            <label for="" class="hedding">Welcome to Admin Panel </label>
        </div>


        <div class="logingcontent">

            <div class="signinInputs">
                <label for="">Enter your NIC Number</label>
            </div>


            <div class="signinInputs" style="margin-bottom: 50px;">
                <input type="text" id="anic" class="inputField">
            </div>


            <div class="signinInputs">
                <label for="">Enter Your Password </label>
            </div>


            <div class="signinInputs">
                <input type="password" id="ap" class="inputField">
            </div>



            <div class="signinInputs">
                <button class="Button" onclick="adminlogin();" >Log In</button>
            </div>





        </div>


    </div>
<script src="script.js"></script>
</body>

</html>