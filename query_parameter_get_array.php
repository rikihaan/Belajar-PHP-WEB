<?php
$numbers = $_GET['number'];
$total = 0;
foreach ($numbers as $number) {
    $total += $number;
}
?>

<html>

<head>
    <title>Query Parameter Get Array</title>
</head>

<body>
    <h1>Total : <?= $total ?></h1>
</body>

</html>