<?php

require_once 'functions.php';

$db = connectDb();

$collectionArr = getdataFromDb($db);

var_dump($collectionArr);

