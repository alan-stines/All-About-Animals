<!DOCTYPE html>
<html>
<head>
	<title>incoming form</title>
	<!--link below is temporary until it can be replaced -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="_bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="_bower/jquery/dist/jquery.min.js"></script>
	<script src="_bower/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="_src/style.css" rel="stylesheet" />
</head>
<body>
	<!--need to also add sorting feature and possibly an add button? -->
		<?php include "header.php"?>

		<table class="table table-hover">
			<thead>
				<tr>
					<th>id</th>
					<th>Name</th>
					<th>number of IncomingForms</th>
					<th>number of OutgoingForms</th>
					<th>number of AdoptionForms</th>
					<th>Healthrecords</th>
					<th>check for pet in facility</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<th>example</th>
					<th><a href="incomingformtable.php">1</a></th>
					<th><a href="outgoingtable.php">1</a></th>
					<th><a href="adoptiontable.php">1</a></th>
					<th><a href="medicalform.php">Healthrecords</a></th>
					<th><input type="checkbox"></th>
				</tr>
		</table>
		</body>
		
		</html>