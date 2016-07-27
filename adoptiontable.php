<!DOCTYPE html>
<html>
<head>
	<title>adoption forms table</title>
	<!--link below is temporary until it can be replaced -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="_bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="_bower/jquery/dist/jquery.min.js"></script>
	<script src="_bower/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="_src/style.css" rel="stylesheet" />
</head>
<body>
	
		<?php include "header.php"?>
<!--should editing be an admin level link? also need to make a view option-->
		<table class="table table-hover">
			<thead>
				<tr>
					<th>adoptionformID:</th>
					<th>date</th>
					<th>edit</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>1</th>
					<th>july 30th</th>
					<th><a href="editadoption.php">edit</a></th>
				</tr>
		</table>
		
		
</body>
</html>