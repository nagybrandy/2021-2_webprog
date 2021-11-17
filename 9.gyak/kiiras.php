<?php
    if (['SERVER_ADDR'] != "157.181") {
        // continue
    } else {
        header("Location: https:/google.com/");
        exit(); //Stop running the script
        // go to form page again.
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

</body>
</html>