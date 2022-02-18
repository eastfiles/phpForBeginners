<?php

include_once 'controller/database_operation.php';

// call database connection
 $conn = database_connection();

$sql = "SELECT * FROM users";
$query = mysqli_query( $conn, $sql );

	$rows = array();
  while ( $row = mysqli_fetch_assoc($query) ) {
  	 	$rows[] = $row;
  }

	foreach( $rows as $row ){
			echo $row['first_name'].' '.$row['last_name'].' '.$row['email'].'<br>';
		}

	// $rows = mysqli_fetch_all( $query );
	// foreach( $rows as $row ){
	// 	echo $row[1].' '.$row[2].' '.$row[5].'<br>';
	// }




?>