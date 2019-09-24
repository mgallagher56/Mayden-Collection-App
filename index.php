<?php

require_once 'functions.php';

$db = connectDb();

$name = getNamesFromDb($db);
$brand = getBrandsFromDb($db);
$colour = getColourFromDb($db);
$year = getYearFromDb($db);
?>

<html>
<head>
    <link rel="stylesheet" type="text/css" href="Normalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<h1>Shoe Collection</h1>
<div class="name col-4">

</div>

<div class="brand col-4">
</div>

<div class="colour col-4">
</div>

<div class="year col-4">
</div>

</body>
</html>