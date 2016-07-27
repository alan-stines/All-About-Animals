<!DOCTYPE html>
<html>
<head>
	<title>checkinform</title>
	<!--link below is temporary until it can be replaced -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="_bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="_bower/jquery/dist/jquery.min.js"></script>
	<script src="_bower/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="_src/style.css" rel="stylesheet" />
</head>
<body>
	
		<?php include "header.php"?>
		<!--yes takes them to an adoption form and out going form while no will just pull up an outgoing form -->
		<h1>is the animal being adopted?</h1>
		<a href="AOform.php" type="button" class="btn btn-info">Yes</button>
		<a href="Oform.php" type="button" class="btn btn-info">No</button>
</body>
</html>