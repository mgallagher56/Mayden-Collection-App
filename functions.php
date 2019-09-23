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
function getHeadingsFromDb($db)
{
    $query = $db->prepare("SELECT `name`, `brand`, `primary colour`, `release year` FROM `Shoes`");
    $query->execute();
    $collectionArr = $query->fetch();
    return $collectionArr;
}

function getdataFromDb($db)
{
    $query = $db->prepare("SELECT `name`, `brand`, `primary colour`, `release year` FROM `Shoes`");
    $query->execute();
    $collectionArr2 = $query->fetchAll();
    return $collectionArr2;
}

function outputFieldAsHeader($collectionArr)
{
    echo '<ul>';
    foreach ($collectionArr as $items => $value) {
        echo('<li class="heading">' . $items . '</li>');
    };
    echo '</ul>';
}





