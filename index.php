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

<form action="input.php" method="post">
    <h3>New Entry</h3>
    Enter Shoe Name: <input class="textBox" type="text" name="name" placeholder="Name">
    Enter Brand: <input class="textBox" type="text" name="brand" placeholder="Brand">
    Enter Primary Colour: <input class="textBox" type="text" name="colour" placeholder="Colour">
    Enter Year of Release: <input class="textBox" type="text" name="year" placeholder="Year">
    <input class="submit" type="submit">
</form>

</body>
</html>