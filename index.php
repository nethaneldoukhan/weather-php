<?php
    // require_once('server.php');
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Page Title</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <!-- <link rel='stylesheet' type='text/css' media='screen' href='main.css'> -->
</head>
<body style="text-align: center">
    <h1>WEATHER</h1>

    <form action="index.php" method="POST" id="form">
        <input type="text" id="city" name="city" placehoder="Enter city">
        <button type="submit" name="get_weather">GET WEATHER</button>
    </form>

    <div id="main">
        <?php // require_once('result.php'); ?>
    </div>

    
    <script src='main.js'></script>
</body>
</html>