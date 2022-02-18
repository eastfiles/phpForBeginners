<?php
// chukua data za user mwenye id ya $userId
include_once 'controller/database_operation.php';
// kuita function yenye connection
$conn = database_connection();
// kutengeza query
$userid = $_GET['user'];

$sql = "SELECT * FROM users WHERE id = ".$userid;

// sukuma kwenda kwenye database
$query = mysqli_query( $conn, $sql );
// chukua  data zinazorudi
$row = mysqli_fetch_assoc( $query );



?>

<div>
	<form method="POST" action="controller/userUpdate.php">
		<div>
			<span>Edit User Information</span><hr>
		</div>
		<div>
			<input type="hidden" name="userId" value="<?php echo $row['id'] ?>">
		</div>
		<div>
			<label for="first_name">first name</label>
			<input id="first_name" type="text" name="first_name" 
			value="<?php echo $row['first_name'] ?>">
		</div>

		<div>
			<label for="second_name">second name</label>
			<input id="second_name" type="text" name="second_name"
			value="<?php echo $row['second_name'] ?>">
		</div>

		<div>
			<label for="last_name">last name</label>
			<input id="last_name" type="text" name="last_name"
			value="<?php echo $row['last_name'] ?>">
		</div>

		<div>
			<label for="gender">gender</label>
			male: <input type="radio" name="gender" value="male" 
			 <?php if( $row['gender'] == "male" ){ echo "checked"; } ?> >
			female: <input type="radio" name="gender" value="female" 
			<?php if( $row['gender'] == "female" ){ echo "checked"; } ?>>
		</div>

		<div>
			<label for="email">email</label>
			<input id="email" type="email" name="email" 
			value="<?php echo $row['email'] ?>">
		</div>
		<div>
		<button type="submit" name="btn">submit</button>
		</div>

	</form>
</div>