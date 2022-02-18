<?php

include_once "database_operation.php";

$conn = database_connection();

$id = $_POST['id'];

$sql = "DELETE FROM users WHERE id = '".$id."'";

$query = mysqli_query( $conn, $sql );

if( $query ){
	header('location: ../select_data2.php');
	exit();
}else{
	echo "not deleted";
}

?>