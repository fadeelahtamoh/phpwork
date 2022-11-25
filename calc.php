<?php

    $s1 = $_POST['s1'];
    $s2 = $_POST['s2'];
    $s = 2.598 * $s1 * $s2

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ผลการคำนวณพื้นที่หกเหลี่ยม</title>
</head>
<body>
    <br>
    <p style='color:red'>
    <?php
        echo "ด้าน เท่ากับ ".$s1."<br>";
        ?>
        </p>
        <p style='color:blue'>
    <?php
        echo "ด้าน เท่ากับ ".$s2."<br>";
        ?>
        </p>
        <?php
        echo "ผลการคำนวณพื้นที่หกเหลี่ยม เท่ากับ ".$s;
    ?>
</body>
</html>