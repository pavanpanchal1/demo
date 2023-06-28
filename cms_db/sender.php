<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sender</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        body {
            background: #f2f3f5;
            font-family: 'Roboto Condensed', sans-serif;
            color: #4a697c;
            text-align: center;
            height: auto !important;
            min-height: 100%;
            -webkit-box-sizing: border-box;
            box-sizing: border-box;

        }

        .container {
            width: 100% !important;
            max-width: 600px;
            display: block;
            margin: auto;
            position: relative;
            top: 8vh;
            background-color:#bbc9c160;
            padding:2rem;
            border-radius: 10px;


        }

        input[type=text],
        input[type=tel],
        input[type=email] {
            outline: none;
            border: none;
            width: 400px;
            height: 26px;
            border-bottom: solid thin black;
            padding: .5em;
            transition: all ease-in-out 0.3s;
            position: relative;
            margin-top: 20px;

        }

        input[type=submit] {
            background: #27ae60;
            color: white;
            font-size: large;
            cursor: pointer;
            text-transform: uppercase;
            letter-spacing: 4px;
            box-shadow: inset -1px -.5rem #9bbee4, .5rem rgba(#fff, .1) .5rem;
            height: fit-content;
            display: block;
            margin: auto;
            position: relative;
            top: 20px;
            left: calc((100% / 2)-10%);
            border: none;
            padding: 10px;
            border-radius: 2px;
        }
        label{
            width:fit-content;
            font-size: 27px;
            }
            
    </style>
</head>

<body>
    <?php

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    session_start();
    require 'home.php';
   
    require 'con.php';
    if (isset($_REQUEST['sender_name'])) {
        $sender_name = stripslashes($_REQUEST['sender_name']);
        $sender_name = mysqli_real_escape_string($con, $sender_name);
        $sender_phone = stripslashes($_REQUEST['sender_phone']);
        $sender_phone = mysqli_real_escape_string($con, $sender_phone);
        $sender_email = stripslashes($_REQUEST['sender_email']);
        $sender_email = mysqli_real_escape_string($con, $sender_email);
        $sender_address = stripslashes($_REQUEST['sender_address']);
        $sender_address = mysqli_real_escape_string($con, $sender_address);

        $query = "INSERT IGNORE INTO `senders`(sender_name,sender_phone,sender_email,sender_address) VALUES('$sender_name','$sender_phone','$sender_email','$sender_address');";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "Successfully stored the details";
        } else {
            echo "ERROR";
        }
    } else {
          ?>
    <div class="container">
        <div class="form">
            <form action="" method="post">
            <label for="">SENDER DETAILS</label>
                <input type="hidden" name="sender_id">
                <div class="sender_name">
                    <input type="text" name="sender_name" id="sender_name" placeholder="Enter name">
                </div>
                <div class="sender_phone">
                    <input type="tel" name="sender_phone" id="sender_phone" placeholder="Enter mobile number">
                </div>
                <div class="sender_email">
                    <input type="email" name="sender_email" id="sender_email" placeholder="Enter your email">
                </div>
                <div class="sender_address">
                    <input type="text" name="sender_address" id="sender_address" placeholder="Enter your address">
                </div>
                <div class="submit">
                    <input type="submit" value="submit">
                </div>
            </form>
        </div>
    </div>
    <?php
    }
    ?>
</body>

</html>