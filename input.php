<?php
require_once 'functions.php';
$db = connectDb();
$name = $_POST['name'];
$brand = $_POST['brand'];
$colour = $_POST['colour'];
$year = $_POST['year'];
$image = $_POST['image'];

$query = $db->prepare("INSERT INTO Shoes (name, brand, primary_colour, release_year, image) VALUES (:names, :brand, :colour, :year, :image);");
$query->bindParam(':names', $name, PDO::PARAM_STR, 255);
$query->bindParam(':brand', $brand, PDO::PARAM_STR, 255);
$query->bindParam(':colour', $colour, PDO::PARAM_STR, 255);
$query->bindParam(':year', $year, PDO::PARAM_INT,4);
$query->bindParam(':image', $image, PDO::PARAM_STR, 255);
$query->execute();

header("Location: index.php");