<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Forms</title>
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/contactstyle.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: sans-serif;

        }

        body {
            background-color: rgb(156, 198, 235);
            font-family: sans-serif;
            font-size: 15px;
            padding: 0 10px;
        }

        

        input {
            font-size: 15px;
            padding: 5px;
        }


        form div {
            margin-bottom: 40px;
        }

        .wrapper {
            max-width: 450px;
            width: 100%;
            background-color: rgb(255, 255, 255);
            margin: 20px auto;
            padding: 30px;
            box-shadow: 1px 1px 2px rgba(0, 0, 0, 0.125);
        }

        .wrapper .title {
            font-size: 24px;
            font-weight: 700;
            margin-bottom: 2px;
            color: rgb(81, 81, 211);
            text-align: left;
        }

        .wrapper .form {
            width: 100%;

        }

        .wrapper .form .input_field {
            margin-bottom: 15px;
            display: flex;
        }

        .wrapper .form .input_field p {
            font-size: 14px;
            color: black;
        }
    </style>
</head>

<body>
    <?php include "hedder.php" ?>
    <div class="wrapper" style="position: relative;">

        <div class="title">Customer Registration Form</div>

        <div class="form">

            <div class="input_field">
                <label for=" fname">First Name &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;</label>
                <input type="text" name="fname" id="fname" placeholder="first name" required>
            </div>

            <div class="input_field">
                <label for="lname">Last Name &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="lname" id="lname" placeholder="last name" required>
            </div>

            <div class="input_field">
                <label for="nic">NIC &nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="nic" id="nic" placeholder="000000000000" pattern="[0-9]{12}" required>
            </div>


            <div class="input_field">
                <label for="email">Email Address &nbsp;&nbsp;</label>
                <input type="email" name="email" id="email" placeholder="email address" autofocus required>
            </div>

            <div class="input_field">
                <label for="dob">Date Of Birth &nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="date" name="dob" id="dob" placeholder="dob" required>
            </div>

            <div class="input_field">
                <label for="address"> Address &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="address" id="address" placeholder="address" required>
            </div>

            <div class="input_field">
                <label for="address"> Password &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="Password" id="Password" placeholder="Password" required>
            </div>

            <div class="input_field" style="margin-bottom: 50px;">
                <label for="tel">Telephone No. &nbsp;&nbsp;</label>
                <input type="tel" name="tel" id="tel" placeholder="077-123-1234" pattern="[0]{1}[6-7]{2}-[0-9]{3}-[0-9]{4}" required>
            </div>


           



        </div>

    </div>

    <div class="wrapper" style="position: relative;">

        <div class="title">Vehicle Details Form</div>

        <div class="form">

            <div class="input_field">
                <label for="vehiNo">Vehicle No .&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                <input type="text" name="vehiNo" id="vehiNo" placeholder="vehicle number" required>
            </div>


            <div class="input_field">
                <label for="policyNo">Policy No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="policyNo" id="policyNo" placeholder="policy number" required>
            </div>


            <div class="input_field">
                <label for="engineNo">Engine No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="engineNo" id="engineNo" placeholder="engine number" required>
            </div>

            <div class="input_field">
                <label for="chassisNo">Chassis No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                <input type="text" name="chassisNo" id="chassisNo" placeholder="chassis number" required>
            </div>


            <div class="input_field">
                <label for="period">Period of Cover</label>
                <select name="" id="Cover" style="width: 200px; color: black;">
                    <option value="annual 3 months">annual 3 months</option>
                    <option value="annual 6 months">annual 6 months</option>
                </select>


            </div>


         

            <div style="margin-left:120px;">
                <div class="input_field">
                    <label for=""></label>
                   
                    <button onclick="createAccount();">Submit</button>
                    <button onclick=" window.location.reload();">reload</button>
                </div>
            </div>


        </div>

    </div>

 

    <?php include "footer.php" ?>
    <script src="script.js"></script>
</body>

</html>

<!--References-https://youtu.be/oKydcYbYyj4-->