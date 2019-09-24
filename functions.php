<?php

/**
 * Connects to mySQL database
 *
 * @return PDO db connection
 */
function connectDb(): PDO {
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
function getHeadingsFromDb(PDO $db): array
{
    $query = $db->prepare("SELECT `name`, `brand`, `primary colour`, `release year` FROM `Shoes`");
    $query->execute();
    $collectionArr = $query->fetch();
    return $collectionArr;
}


/**
 * Uses data collection from db to output array key as a list item
 * @param $collectionArr array returned from db
 *
 * @return string html list of db items
 */
function outputFieldAsHeader(array $collectionArr): string
{
    echo '<ul>';
    foreach ($collectionArr as $items => $value) {
        echo('<li class="heading">' . $items . '</li>');
    };
    echo '</ul>';
}





