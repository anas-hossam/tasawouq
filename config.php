<?php

$dbhost= 'localhost';
$dbuser= 'root';
$dbpass='iti';
$dbname='tasawouq';
// open connection
$con = new mysqli($dbhost, $dbuser,$dbpass,$dbname);  
 // Check connection
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }
//        echo "Connected successfully";