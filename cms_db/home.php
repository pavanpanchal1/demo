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
            overflow: hidden;

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

        .nav {
            width: 100% !important;
            max-width: 100%;
            display: block;
            margin: auto;
            position: relative;
            background-color: #bbc9c160;
            padding: 2rem;
            border-radius: 10px;

        }

        .list {
            width: 70%;
            margin: auto;
        }

        ul {
            list-style: none !important;
            display: flex;
            flex-direction: row;
            justify-content: space-around;
        }

        li {
            list-style: none;
            text-align: center;
        }

        li a {
            text-decoration: none;
            color: #4a697c;
            font-weight: 900;
            font-size: 20px;

        }
        .page{
            position: relative;
            right: -30%;
            top: 210px;
            overflow: hidden;
        
        }
        .page img{
            width: 700px;
            height: 500px;
        }
    </style>
</head>

<body>
    <div class="nav">
        <div class="list">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="sender.php">Senders</a></li>
                <li><a href="receivers.php">Receivers</a></li>
                <li><a href="couriers.php">Courier</a></li>
                <li> <a href="track.php">Track</a></li>
                <li><a href="phpmailer/PHPMailer-master/">Sendmail</a></li>
            </ul>
        </div>
    </div>
    <!-- <div class="page">
        <img src="images/img1.png" alt="">
    </div> -->
</body>

</html>