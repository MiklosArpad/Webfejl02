<?php

require_once('../config/connect.php');

if (isset($_POST['knev']) && !empty($_POST['knev'])) {
    $vnev = $_POST['veznev'];
    $knev = $_POST['knev'];
}

$sql = "INSERT INTO user(vezeteknev, keresztnev) VALUES (vezeteknev, keresztnev);";
$result = $connection->query($sql);

if (!$result) {
    die("Hiba a felvitel során!");
}

$connection->close();
