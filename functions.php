<?php

/**
 * Connects to mySQL database
 *
 * @return PDO db connection
 */
function connectDb() {
    $db = new PDO("mysql:host=db; dbname=marcCollection","root","password");
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    return $db;
}


/**
 *Uses database connection to select names from db and return the data as an associative array
 * @param $db array Database connection
 *
 * @return mixed returns the results from database extraction as an associative array
 */
function getNamesFromDb($db)
{
    $query = $db->prepare("SELECT `name` FROM `Shoes`");
    $query->execute();
    $nameArr = $query->fetch();
    return $nameArr;
}

/**
 *Uses database connection to select brands from db and return the data as an associative array
 * @param $db array Database connection
 *
 * @return mixed returns the results from database extraction as an associative array
 */
function getBrandsFromDb($db)
{
$query = $db->prepare("SELECT `brand` FROM `Shoes`");
    $query->execute();
    $brandArr = $query->fetch();
    return $brandArr;
}

/**
 *Uses database connection to select the primary colour from db and return the data as an associative array
 * @param $db array Database connection
 *
 * @return mixed returns the results from database extraction as an associative array
 */
function getColourFromDb($db)
{
    $query = $db->prepare("SELECT `primary colour` FROM `Shoes`");
    $query->execute();
    $colourArr = $query->fetchAll();
    return $colourArr;
}

/**
 *Uses database connection to select the release year from db and return the data as an associative array
 * @param $db array Database connection
 *
 * @return mixed returns the results from database extraction as an associative array
 */
function getYearFromDb($db)
{
    $query = $db->prepare("SELECT `release year` FROM `Shoes`");
    $query->execute();
    $yearArr = $query->fetchAll();
    return $yearArr;
}






