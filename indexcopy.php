<?php
require_once 'functions.php';

if ($number= rand(0,100) %2 ==0) {
    $db = connectDb();
    $collectionData = getDataFromDb($db);
    $results = outputDataAsRows($collectionData);
} else{
    echo '';
}
?>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marc's SuperFun Shoe Collection</title>
    <link rel="stylesheet" type="text/css" href="Normalize.css">
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
</head>
<body>
<?php
if ($number ==0) {
    echo "<h1>Marc's SuperFun Shoe Collection</h1>";
echo'<div>';
  echo  '<ul class="header">';
  echo      '<li class="heading">Name</li>';
    echo    '<li class="heading">Brand</li>';
    echo    '<li class="heading">Primary Colour</li>';
    echo    '<li class="heading">Release Year</li>';
   echo '</ul>';
echo'</div>';

echo'<div>';
    $db = connectDb();
    $collectionData = getDataFromDb($db);
    $results = outputDataAsRows($collectionData);
 echo $results;
echo'</div>';
echo'<form action="input.php" method="post">';
    echo'<h3>New Entry</h3>';
   echo 'Enter Shoe Name: <input class="textBox" type="text" name="name" placeholder="Name">';
  echo  'Enter Brand: <input class="textBox" type="text" name="brand" placeholder="Brand">';
   echo 'Enter Primary Colour: <input class="textBox" type="text" name="colour" placeholder="Colour">';
  echo  'Enter Year of Release: <input class="textBox" type="text" name="year" placeholder="Year">';
   echo '<input class="submit" type="submit">';

echo '</form>';
}else{
echo 'No entry, try again';
}
?>
</body>
</html>