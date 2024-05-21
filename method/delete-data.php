<?php
require_once('../include/config.php');
require_once('../include/functions.php');

$updateKey = $_POST["updateKey"];

$QueryResult = DeleteData($updateKey);
echo $QueryResult;
