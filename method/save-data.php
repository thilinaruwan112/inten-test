<?php
require_once('../include/config.php');
require_once('../include/functions.php');

$updateKey = $_POST["updateKey"];
$first_name = $_POST["first_name"];
$last_name = $_POST["last_name"];
$email = $_POST["email"];

$QueryResult = SaveData($first_name, $last_name, $email, $updateKey);
echo $QueryResult;
