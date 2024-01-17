<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>

    <style>
        .container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            
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
            height: 50px;
            margin-right: 100px;
           
        }

        .HedderTopic {
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
        
        <div style="display: flex; justify-content: center;" class="HedderTopic">
            <label>Safe Travels</label>
            <div>
                <img src="logo.png" class="HedderImage">
            </div>
        </div>
    </div>

    <div>

    </div>
    <div class="Box">
        <div class="Container">
            <div class="top-header">
                <span>Have an Account?</span><br>
                <header>Login</header>
            </div>

            <div class="input-field">
                <input type="text" id="NIC" class="input" placeholder="NIC" required>
                <br>
                <br>

            </div>
            <div class="input-field">
                <input type="password" id="loginpassword" class="input" placeholder="Password" required>
                <br>
                <br>

            </div>

            <div class="input-field">
                <input type="submit" class="submit" value="Sign up" onclick="login();">
            </div>

            <div class="bottom">
                <div class="left">
                    <input type="checkbox" id="checkbox">
                    <label for="checkbox">Remember Me</label>
                </div>
                <div class="right">
                    <label><a href='#'>Forget Password</a></label>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>

</html>