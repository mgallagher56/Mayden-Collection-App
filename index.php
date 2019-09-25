<?php
require_once 'functions.php';
$db = connectDb();
$collectionData = getDataFromDb($db);
$results = outputDataAsRows($collectionData);
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
    <ul class="header">
        <li class="heading">Name</li>
        <li class="heading">Brand</li>
        <li class="heading">Primary Colour</li>
        <li class="heading">Release Year</li>
    </ul>
</div>

<div>
    <?php echo $results; ?>
</div>

</body>
</html>