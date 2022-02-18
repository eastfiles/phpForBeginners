<?php

$dbserver = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'phpforbeginners';

$conn = mysqli_connect( $dbserver, $dbuser, $dbpass, $dbname );

$first_name = 'juma';
$second_name = 'idd';
$last_name = 'rashid';
$gender = 'male';
$email = 'juma@gmail.com';

if( $conn ){

	$sql = "INSERT INTO users ( first_name, second_name, last_name, gender, email) VALUES ('".$first_name."', '".$second_name."', '".$last_name."', '".$gender."', '".$email."')";
	mysqli_query( $conn, $sql );

}else{
	echo "database fail";
}

?>