<?php
$say = "Hello " . $_GET['first_name'] . " " . $_GET['last_name'];

?>
<html>

<head>
    <title>Query Parameter Get Multiple</title>
</head>

<body>
    <h1><?= $say ?></h1>
</body>

</html>