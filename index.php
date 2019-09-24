<?php

require_once 'functions.php';

$db = connectDb();

$collectionArr = getHeadingsFromDb($db);
$collectionData = getDataFromDb($db);

?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="Normalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<h1>Shoe Collection</h1>
<div>
    <?php
    outputFieldAsHeader($collectionArr);
    ?>
</div>

<div>
    <?php
    outputDataAsRows($collectionData);
    ?>
</div>

</body>
</html>