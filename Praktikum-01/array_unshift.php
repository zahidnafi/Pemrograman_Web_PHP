<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array Unshift</title>
</head>
<body>
<?php
    $tims = ["erwin", "Heru", "Ali", "Zaki"];
    array_unshift($tims, "Joko", "Wati");
    foreach($tims as $person) {
        echo $person. '<br/>';
    }
?>
</body>
</html>