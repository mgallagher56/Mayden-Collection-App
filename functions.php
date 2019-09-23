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
