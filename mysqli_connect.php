<?php
// This file provides the information for accessing the database.and connecting to MySQL.
// First, we define the constants: #1
Define ('DB_USER', 'root'); // or whatever userid you created
Define ('DB_PASSWORD', 'root'); // or whatever password you created
Define ('DB_HOST', 'localhost');
Define ('DB_NAME', 'csc680');
// Next we assign the database connection to a variable that we will call $dbcon: #2
$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
mysqli_set_charset($dbcon, 'utf8');
?>