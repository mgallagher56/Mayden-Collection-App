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
 *Uses database connection to select fields from db and return the data as an associative array
 * @param $db array Database connection
 *
 * @return mixed returns the results from database extraction as an associative array
 */
function getdataFromDb($db)
{
    $query = $db->prepare("SELECT `name`, `brand`, `primary colour`, `release year` FROM `Shoes`");
    $query->execute();
    $collectionArr = $query->fetchall();
    return $collectionArr;
}
