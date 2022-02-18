<?php

function database_connection(){
$dbserver = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'phpforbeginners';

$conn = mysqli_connect( $dbserver, $dbuser, $dbpass, $dbname );
return $conn;
}

?>