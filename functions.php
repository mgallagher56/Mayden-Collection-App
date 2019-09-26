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
 * Uses database connection to select all data from db and return the data as an multidimensional array
 *
 * @param PDO $db Database connection
 *
 * @return array Multidimensional array returned with data from selected fields in db
 */
function getDataFromDb(PDO $db): array {
    $query = $db->prepare("SELECT `name`, `brand`, `primary_colour`, `release_year`, `image` FROM `Shoes`");
    $query->execute();
    $collectionData = $query->fetchAll();
    return $collectionData;
}

/**
 *Foreach function to access data from multidimensional array and output as a html list
 *
 * @param array $collectionData array data returned from db
 *
 * @return string Outputs each row from db in a list with each data point as a list item
 */
function outputDataAsRows(array $collectionData) :string {
    if (count($collectionData[0]) == 5) {
        $result = '';
        foreach ($collectionData as $name => $value) {
            $result .= '<ul class="dataList">';
            $result .= '<li class="data">' . $value['name'] . '</li>';
            $result .= '<li class="data">' . $value['brand'] . '</li>';
            $result .= '<li class="data">' . $value['primary_colour'] . '</li>';
            $result .= '<li class="data">' . $value['release_year'] . '</li>';
            $result .= '<li class="data">' . '<img src="' . $value['image'] . '">' . '</li>';
            $result .= '</ul>';
        }
        return $result;
    }else {
        return 'invalid input';
    }
}
