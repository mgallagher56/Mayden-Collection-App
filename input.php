<?php
require_once 'functions.php';
$db = connectDb();
$name = $_POST['name'];
$brand = $_POST['brand'];
$colour = $_POST['colour'];
$year = $_POST['year'];

$query = $db->prepare("INSERT INTO Shoes (name, brand, primary_colour, release_year) VALUES ('$name', '$brand','$colour','$year');");
$query->execute();
header("Location: index.php");