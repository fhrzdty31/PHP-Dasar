<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
    <center>
        <?php
        // date
        echo "date :<br>";
        echo date("l, d M Y");
        ?>
        <hr>
        <?php
        // time
        // unix timestamp / epoch time
        echo "Unix Timestamp/ EPOCH Time :<br>";
        echo time();
        ?>
        <hr>
        <?php
        //strtotime
        echo "strtotime :<br>";
        echo date("l, d M Y", strtotime("15 jan 2009"));
        ?>
        <hr><br>
        <button>
            <a href="function.php">User Function</a>
        </button>
    </center>
</body>
</html>