<?php
$host = "185.114.157.173";
$dbname = "minecr13_intro";
$username = "minecr13_intro";
$password = "#INTRO123!";

try {
    $db = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $ex) {
    echo "Fout bij verbinden database: " . $ex->getMessage();
}