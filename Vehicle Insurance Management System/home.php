<!DOCTYPE html>
<html>

<head>
    <!--add a title-->

    <title> Home Page </title>
    <link rel="stylesheet" href="contactstyle.css">
    
</head>

<body class="body">
    <?php include "hedder.php" ?>
    <div class="bodyimage">
    </div>

    <div>
        <!--add a header-->
        <h1> "Enjoy Your <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Travel With A <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Great Cover" </h1>
        <center class="footerbutton">
            <div class="buttons">
                <button class="login-button" onclick="changeLoginpage()">Login</button>
                <button class="signup-button" onclick="window.location = 'web-forms.php' ">Sign Up</button>
            </div>
        </center>
    </div>

    <div>
        <?php include "footer.php" ?>
    </div>


    <script src="script.js"></script>
</body>

</html>