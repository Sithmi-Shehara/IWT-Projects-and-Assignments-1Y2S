<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <style>
        /* .body1{
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        } */

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

<body>
    <div>
        <!-- hedder.php -->
        <div style="display: flex; justify-content: center;position: sticky; width: 100%;" class="HedderTopic1">
            <label>Safe Travels</label>
            <div>
                <img src="logo.png" class="HedderImage">
            </div>
        </div>
    </div>

</body>

</html>