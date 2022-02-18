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

	// foreach( $rows as $row ){
	// 		echo $row['first_name'].' '.$row['last_name'].' '.$row['email'].'<br>';
	// 	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>all users | page</title>
	<style>
		table{
			border: 1px solid black;
			border-collapse: collapse;
			width: auto;
		}
		th, td{
			border: 1px solid black;
			padding: 6px;
		}
		span{
			font-size: larger;
			font-weight: bold;
		}
	</style>
</head>
<body>
	<span>All Users Table</span>
<table>
	<thead>
		<tr>
			<th>First Name</th>
			<th>Second Name</th>
			<th>Last Name</th>
			<th>Gender</th>
			<th>email</th>
			<th>action</th>
		</tr>
	</thead>
	<tbody>
		<?php
			foreach( $rows as $row ){
				echo "<tr>
			<td>".$row['first_name']."</td>
			<td>". $row['second_name'] ."</td>
			<td>". $row['last_name'] ."</td>
			<td>". $row['gender'] ."</td>
			<td>". $row['email'] ."</td>
			<td>
				<a href='edit_user.php?user=".$row['id']."'><button>update</button></a>

				<button form='delete_form' type='submit' name='btn'>delete form</button>

				<form id='delete_form' method='POST' action='controller/deleteUser.php'>
					<input name='id' value='".$row['id']."' type='hidden'>
				</form>

			</td>
					</tr>";		
			}
		?>
	</tbody>
</table>
</body>
</html>
