<?php
$name = isset($_GET['name']) ? "Hello " . $_GET['name'] : false;

?>
<html>

<head>
    <title>Query Parameter Get</title>
</head>

<body>
    <h1><?= $name ?></h1>
</body>

</html>