<?php
if (!isset($_GET['name']) || $_GET['name'] == "") {
    http_response_code(400);
    echo "name is required";
    exit();
} else {
    $name = isset($_GET['name']) ? "Hello " . $_GET['name'] : false;
}

?>
<html>

<head>
    <title>Query Parameter Get</title>
</head>

<body>
    <h1><?= $name ?></h1>
</body>

</html>