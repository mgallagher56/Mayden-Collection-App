<?php
require_once 'functions.php';
$db = connectDb();
$collectionData = getDataFromDb($db);
$results = outputDataAsRows($collectionData);
?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marc's SuperFun Shoe Collection</title>
    <link rel="stylesheet" type="text/css" href="Normalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>
    <header class="container">
        <h1>Marc's SuperFun Shoe Collection</h1>
    </header>

    <div class="bgImage container">
        <form action="input.php?auth=true" method="post">
            <h3>New Entry</h3>
            <p>Enter Shoe Name: <input max="30" class="textBox" type="text" name="name" placeholder="e.g. Yeezy Boost" required></p>
            <p>Enter Brand: <input max="20" class="textBox" type="text" name="brand" placeholder="e.g. adidas" required></p>
            <p>Enter Primary Colour: <input max="20" class="textBox" type="text" name="colour" placeholder="e.g. black" required></p>
            <p>Enter Year of Release: <input min="4" max="4" class="textBox" type="text" name="year" placeholder="e.g. 1999" required></p>
            <p>Enter Image url (.jpg/.png): <input class="textBox" type="url" name="image" placeholder="e.g. nike.com/shoe.jpg" required></p>
            <input class="submit" type="submit" value="Submit">
        </form>
    </div>

    <ul class="header container">
        <li class="heading">Name</li>
        <li class="heading">Brand</li>
        <li class="heading">Primary Colour</li>
        <li class="heading">Release Year</li>
        <li class="heading">Image</li>
    </ul>

    <div class="results">
        <?php echo $results; ?>
    </div>
</body>
</html>
