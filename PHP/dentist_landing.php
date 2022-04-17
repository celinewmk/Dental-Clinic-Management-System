<?php

ob_start();
session_start();

include 'functions.php';
include_once 'db.php';
error_reporting(0);


//get variable from previous page
$eID = $_SESSION['empID'];
$eUsername = $_SESSION['empUName'];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DCMS - Patient Homepage</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>
<body>
    <h1>DCMS - Dentist <?php echo $eUsername ?> homepage</h1>

    </div>
</body>
</html>