<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Track your order</title>
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


        input[type=number] {
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
    <div class="container">
        <div class="form">
            <label for="">Track Your Product</label>
            <form action="couriers_data.php" method="post">
                <div class="input">
                    <input type="number" name="track_id" id="track_id" placeholder="Enter Track Id">
                </div>
                <div class="submit">
                    <input type="submit" value="Track">
                </div>
            </form>
        </div>
    </div>
</body>

</html>