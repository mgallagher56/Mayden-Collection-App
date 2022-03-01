<?php


/**
 * Connects to mySQL database
 *
 * @return PDO db connection
 */
function connectDb(): PDO {
    $db = new PDO("mysql:host=" . getenv('host') . "; dbname=" . getenv('dbname') . '"', getenv('dbuser'), getenv('dbpass'));
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
            $result .= '<ul class="dataList container">';
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

/**
 * Uses db connection to validate and sanitise params and insert into db fields
 *
 * @param $db connection
 *
 * @param $name string db entry into field 'name'
 *
 * @param $brand string db entry into field 'brand'
 *
 * @param $colour string db entry into field 'colour'
 *
 * @param $year string db entry into field 'year'
 *
 * @param $image string db url entry into field 'image'
 *
 */
function insertIntoDb(PDO $db, $name, $brand, $colour, $year, $image){
    $query = $db->prepare("INSERT INTO Shoes (name, brand, primary_colour, release_year, image) VALUES (:names, :brand, :colour, :year, :image);");
    $query->bindParam(':names', $name, PDO::PARAM_STR, 255);
    $query->bindParam(':brand', $brand, PDO::PARAM_STR, 255);
    $query->bindParam(':colour', $colour, PDO::PARAM_STR, 255);
    $query->bindParam(':year', $year, PDO::PARAM_INT,4);
    $query->bindParam(':image', $image, PDO::PARAM_STR, 255);
    $query->execute();
}


/**
 * Checks the validity of form inputs. Allows input if conditions met, else sends to an error page without inputting data
 *
 * @param $name string input data from form input name
 *
 * @param $brand string input data from form input brand
 *
 * @param $colour string input data from form input colour
 *
 * @param $year string input data from form input year
 *
 * @param $image string input data from form input image
 *
 * @return bool returns user to index.php with data entered or sends to error.php if data not entered correctly
 */
function checkValidity($name, $brand, $colour, $year, $image){
    if ((strlen($name)) <= 255 &&
        (strlen($brand)) <= 255 &&
        (strlen($colour)) <= 255 &&
        ($year > 1900) && ($year < 2300) &&
        (strlen($image)) <= 255 &&
        ((strpos($image, '.jpg') == true) OR (strpos($image, '.jpeg') == true) OR (strpos($image, '.png') == true))){
        return true;
    } else{
        return false;
    }
}
