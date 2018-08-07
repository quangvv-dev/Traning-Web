<?php 
	use MongoDB\Client;
	require "vendor/autoload.php";
	$con = new Client();
	$db=$con->qlns;
	$coll = $db->teams;
	// $insert = $coll->insertOne(
	// 	['name'=>'cu chuoi', 'description'=>'mo ta','logo'=>'logo.png','leader_id'=>123456]
	// );
	$user =$coll->find();
	// printf("insert %d document ", $insert->getInsertedCount());
	// var_dump($insert->getInsertedId());
	// foreach ($db->listCollections() as $value) {
	// 	var_dump($value);
	// }

	?>

	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<!-- Latest compiled and minified CSS & JS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
		<script src="//code.jquery.com/jquery.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
	</head>
	<body>
		<table class="table table-bordered">
			<thead>
				<tr>
					<td>id</td>
					<td>name</td>
					<td>description</td>
					<td>logo</td>
					<td>leader_id</td>
				</tr>
			</thead>
			<tbody>
				<?php foreach ($user as $document): ?>
				<tr>
					<td><?php echo $document["_id"] ?></td>
					<td><?php echo $document["name"] ?> </td>	
					<td><?php echo $document["description"] ?></td>	
					<td><?php echo $document["logo"] ?></td>	
					<td><?php echo $document["leader_id"] ?></td>	
				</tr>
					
				<?php endforeach ?>
			</tbody>
		</table>
	</body>

	</html>