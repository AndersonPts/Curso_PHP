<?php
try {
    $conn = new PDO("mysql:host=localhost;dbname=sakila", "root", "root");
    
    $query = "SELECT * FROM actor";
    
    $stsm = $conn->query($query);
    
} catch (Exception $e) {
}