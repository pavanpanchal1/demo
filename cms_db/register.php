<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
        input[type=email],
        input[type=password] {
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
    ini_set('display_errors', 1);
    require 'con.php';

    if (isset($_REQUEST['email'])) {
        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        $query = "INSERT into `users` (email, password) VALUES ('$email', '$password');";
        if ($result = mysqli_query($con, $query)) {
            echo "<script language='javascript'>alert('Registered Successfully!');window.location='../cms_db/index.php';</script>";
            exit();
        } else {
            echo "Error";
        }
    }
    require 'home.php';
    ?>

    <div class="container">
        <div class="form">
            <form action="" method="post">
                <label for="">REGISTER</label>
                <div class="user">
                    <input type="text" placeholder="Enter email.." name="email" id="email">
                </div>
                <div class="pass">
                    <input type="password" name="password" id="password" placeholder="Enter password..">
                </div>

                <div class="sub">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>

</html>
