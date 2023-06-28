<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Couriers</title>
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
        input[type=password],
        input[type=number],
        select {
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

        select {
            height: 30px;
            width: 415px;
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
    session_start();
    require 'home.php';

    require 'con.php';
    // $query = "SELECT * FROM `senders` JOIN `receivers` ON `sender_id` = `receiver_id`;";

    // $result = mysqli_query($con, $query);

    // if (mysqli_num_rows($result) > 0) {
    //     // Iterate through each row of the result set
    //     while ($row = mysqli_fetch_assoc($result)) {


    //     }
    // } else {
    //     echo "No couriers found.";
    // }
    // // Close the database connection
    // mysqli_close($con);
    ?>
    <div class="container">
        <div class="form">
            <form action="" method="post">
                <input type="hidden" name="sender_id" value="">
                <input type="hidden" name="receiver_id" value="">
                <select id="customer_name" name="customer_name" required>
                    <?php
                    $query = "SELECT sender_id FROM senders";
                    $result = mysqli_query($con, $query);
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<option value="' . $row['sender_id'] . '">' . $row['sender_id'] . '</option>';
                    }
                    ?>
                </select>
                <div <div class="description">
                    <input type="text" name="description" id="description" placeholder="Description">
                </div>
                <div class="weight">
                    <input type="number" name="weight" id="weight" placeholder="Wight in kg.">
                </div>
                <div class="status">
                    <select name="status" id="status" placeholder="select">
                        <option value="">Select...</option>
                        <option value="Pending">Pending</option>
                        <option value="In Transit">In Transit</option>
                        <option value="Delivered">Delivered</option>
                    </select>
                </div>
                <div class="submit">
                    <input type="submit" value="Submit">
                </div>
            </form>
        </div>
    </div>
</body>
<?php
// }
?>

</html>