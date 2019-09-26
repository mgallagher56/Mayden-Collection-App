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
        <li class="heading">Image</li>
    </ul>
</div>

<div>
    <?php echo $results; ?>
</div>

<form action="input.php?auth=true" method="post">
    <h3>New Entry</h3>
    Enter Shoe Name: <input class="textBox" type="text" name="name" placeholder="e.g. Yeezy Boost" required>
    Enter Brand: <input class="textBox" type="text" name="brand" placeholder="e.g. adidas" required>
    Enter Primary Colour: <input class="textBox" type="text" name="colour" placeholder="e.g. black" required>
    Enter Year of Release: <input class="textBox" type="text" name="year" placeholder="e.g. 1999" required>
    Enter Image Url: <input class="textBox" type="text" name="image" placeholder="e.g. www.flightclub.com/shoe.jpg" required>
    <input class="submit" type="submit">
</form>

</body>
</html>

