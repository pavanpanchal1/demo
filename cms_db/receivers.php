<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Receivers</title>
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
            background-color: #bbc9c160;
            padding: 2rem;
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

        label {
            width: fit-content;
            font-size: 27px;
        }
    </style>
</head>

<body>
    <?php

    error_reporting(E_ALL);
    ini_set('display_error', 1);
    session_start();

    require 'home.php';

    require 'con.php';
    if (isset($_REQUEST['receiver_name'])) {
        $receiver_name = stripslashes($_REQUEST['receiver_name']);
        $receiver_name = mysqli_real_escape_string($con, $receiver_name);
        $receiver_phone = stripslashes($_REQUEST['receiver_phone']);
        $receiver_phone = mysqli_real_escape_string($con, $receiver_phone);
        $receiver_email = stripslashes($_REQUEST['receiver_email']);
        $receiver_email = mysqli_real_escape_string($con, $receiver_email);
        $receiver_address = stripslashes($_REQUEST['receiver_address']);
        $receiver_address = mysqli_real_escape_string($con, $receiver_address);

        $query = "INSERT IGNORE INTO `receivers`(receiver_name,receiver_phone,receiver_email,receiver_address)  VALUES ('$receiver_name','$receiver_phone','$receiver_email','$receiver_address');";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "successfully stored the data";
        } else {
            echo "Error";
        }
    } else {

        ?>

        <div class="container">
            <div class="form">
                <form action="" method="post">
                    <label for="">RECEIVER DETAILS</label>
                    <input type="hidden" name="receiver_id">
                    <div class="receiver_name">
                        <input type="text" name="receiver_name" id="receiver_name" placeholder="Enter name">
                    </div>
                    <div class="receiver_phone">
                        <input type="tel" name="receiver_phone" id="receiver_phone" placeholder="Enter phone number">
                    </div>
                    <div class="receiver_email">
                        <input type="email" name="receiver_email" id="receiver_email" placeholder="Enter email">
                    </div>
                    <div class="receiver_address">
                        <input type="text" name="receiver_address" id="receiver_address" placeholder=" Enter addre">
                    </div>
                    <div class="submit">
                        <input type="submit" value="submit">
                    </div>
                </form>
            </div>
        </div>
    </body>
    <?php
    }
    ?>

</html>