<?php

if (!isset($_GET['auth'])) {
    header("Location: index.php");
}

require_once 'functions.php';
$db = connectDb();
$name = $_POST['name'];
$brand = $_POST['brand'];
$colour = $_POST['colour'];
$year = $_POST['year'];
$image = $_POST['image'];

insertIntoDb($db,$name,$brand,$colour,$year,$image);

checkValidity($name,$brand,$colour,$year,$image);


