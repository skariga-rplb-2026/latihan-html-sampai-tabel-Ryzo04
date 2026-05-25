<?php
    $nominal = isset($_POST['nominal']) ? $_POST['nominal'] : 0;    
    $format = number_format($nominal, 2, ",", ".");
    echo "Format Nominal: Rp. $format";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>angka</title>
</head>
<body>
    <form action="#" method="post">
        Nominal Rp. <input type="text" name="nominal" /> <br/>
        <input type="submit" value="Submit" />
    </form> 
</body>
</html>
