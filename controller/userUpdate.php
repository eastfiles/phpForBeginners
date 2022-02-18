<?php

include_once "database_operation.php";
$conn = database_connection();

// pokea data zako kutoka katika editUser Form
$first_name = $_POST['first_name'];
$second_name = $_POST['second_name'];
$last_name = $_POST['last_name'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$id = $_POST['userId'];

$sql = "UPDATE users SET 
	 first_name='".$first_name."',
	 second_name='".$second_name."',
	 last_name='".$last_name."',
	 gender='".$gender."',
	 email='".$email."' WHERE id ='".$id."' ";

$query = mysqli_query( $conn, $sql );

if( $query ){
	 header('location: ../select_data2.php');
	 exit();
}else{
	echo "data hazijatumwa";
}






?>