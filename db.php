<?php 

$conn = new mysqli('localhost', 'root', '', 'dependent_dropdown');

if (!$conn) {
    die('Error... can\'t connect to database');
    exit();
}