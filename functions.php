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
 *Uses database connection to select field names from db and return the data as an associative array
 * @param PDO $db PDO Database connection
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
 * Uses database connection to select all data from db and return the data as an multidimensional array
 * @param PDO $db Database connection
 * @return array
 */
function getDataFromDb(PDO $db): array
{
    $query = $db->prepare("SELECT `name`, `brand`, `primary colour`, `release year` FROM `Shoes`");
    $query->execute();
    $collectionData = $query->fetchAll();
    return $collectionData;
}


/**
 * Uses data collection from db to output array key as a list item
 * @param $collectionArr array returned from db
 *
 * @return string if items in array <= 5, returns html list of db fields
 */
function outputFieldAsHeader(array $collectionArr) :string
{   if (count($collectionArr) <= 5) {
    $result = '<ul class="header">';
    foreach ($collectionArr as $items => $value) {
        $result .= '<li class="heading">' . $items . '</li>';
    };
    $result .= '</ul>';

    return $result;}

    else {
    return 'invalid input';
}
}



/**
 * A nested foreach loop to output the values of a multidimensional array as html list items
 * @param array $collectionArr
 *
 * @return string multiple if items in array <= 5, returns html list of db items
 */
function outputDataAsRows(array $collectionArr) :string
{   if (count($collectionArr) <= 5) {
    $result = '';
    foreach ($collectionArr as $name => $value) {
        $result .= '<ul class="dataList">';
        foreach ($value as $item) {
            $result .= '<li class="data">' . $item . '</li>';
        }
        $result .= '<br>' . '</ul>';
    };
    return $result;}
    else {
        return 'invalid input';
    }

}







