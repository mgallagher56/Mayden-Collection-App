<?php

require_once 'functions.php';

$db = connectDb();

$collectionArr = getHeadingsFromDb($db);
$collectionData = getDataFromDb($db);

?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marc's SuperFun Shoe Collection</title>
    <link rel="stylesheet" type="text/css" href="Normalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<h1>Marc's SuperFun Shoe Collection</h1>
<div>
    <?php
    echo outputFieldAsHeader($collectionArr);
    ?>
</div>

<div>
    <?php
    echo outputDataAsRows($collectionData);
    ?>
</div>

</body>
</html>