<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
// require 'home.php';

require 'con.php';
$sql = "SELECT c.id, c.description, c.weight, c.status, c.delivery_date, 
        s.sender_id, s.sender_name, s.sender_address, s.sender_phone, s.sender_email,
        r.receiver_id, r.receiver_name, r.receiver_address, r.receiver_phone, r.receiver_email
        FROM couriers c
        INNER JOIN senders s ON c.sender_id = s.sender_id
        INNER JOIN receivers r ON c.receiver_id = r.receiver_id";

        
$result = mysqli_query($con, $sql);
$track_id = $_POST['track_id'];

if (mysqli_num_rows($result) > 0) {
    $dataFound = false;

    echo "<table>";
    echo "<tr>
          <th>Courier ID</th>
          <th>Courier Details</th>             
          <th>Sender Details</th>                            
          <th>Receiver Details</tlaravel new project-name
          >              
          <th>Status</th>            
        </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        if ($track_id == $row['id']) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . " Description: " . $row['description'] .
                "<br>" . " Weight: " . $row['weight'] .
                "<br>" . " Delivery Date: " . $row['delivery_date'] .
                "<br>"."Locatin : ".
                "</td>";
            echo "<td>" . " Name: " . $row['sender_name'] .
                "<br>" . " Phone number: " . $row['sender_phone'] .
                "<br>" . " Address: " . $row['sender_address'] .
                "</td>";
            echo "<td>" ,"Name : ". $row['receiver_name'] .
                "<br>" . " Phone Number: " . $row['receiver_phone'] .
                "<br>" . " Address: " . $row['receiver_address'] .
                "</td>";
            echo "<td>" . $row['status'] . "</td>";
            echo "</tr>";
            $dataFound = true;
        }
    }

    echo "</table>";


    if (!$dataFound) {
        echo '
        <div class="container">
            <div class="form">
                <label for="">No Data Found</label>
                <div class="button">
                    <a href="track.php">Go Back</a>
                </div>
            </div>
        </div>';
    }
} else {
    echo '
    <div class="container">
        <div class="form">
            <label for="">No Data Found</label>
            <div class="button">
                <a href="track.php">Go Back</a>
            </div>
        </div>
    </div>';
}

echo '<div class="button"> <br>
<a href="track.php">Go Back</a>
</div>  
';

mysqli_close($con);

?>
<style>
    * {
        margin: 0;
        padding: 0;
    }

    table {
        width: 98%;
        position: relative;
        top: 10px;
        margin: auto;
        color: black;

    }

    th {
        height: 45px;
    }

    td {
        padding-left: 10px;
    }

    table,
    th,
    td {
        border: 1px solid gray;
        border-collapse: collapse;
    }

    tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

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

    a {
        text-decoration: none !important;
        border: 1px solid black;
        padding: 10px;
        position: relative;
        top: 15px;
        background-color: #27ae60;
        color: #f2f3f5;
        border: none;
        border-radius: 5px;
    }
</style>