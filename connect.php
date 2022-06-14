<?php

/*
This file contains database configuration assuming you are running mysql using user "root" and password ""
*/

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'gym');

// Try connecting to the Database
$connection = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

//Check the connection
if($connection == false){
    dir('Error: Cannot connect');
}


/*
$host = "localhost";
$users = "root";
$pass = "";
$database ="gym";
$connection = mysqli_connect($host,$users,$pass,$database);
*/

?>