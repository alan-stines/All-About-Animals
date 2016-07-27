<!DOCTYPE html>
<html>
<head>
	<title>incoming forms table</title>
	<!--link below is temporary until it can be replaced -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	<link href="_bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="_bower/jquery/dist/jquery.min.js"></script>
	<script src="_bower/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="_src/style.css" rel="stylesheet" />
</head>
<body>
	
		<?php include "header.php"?>
			
<form role="form">
		<div class="form-group">
<label for="static">static pet ID</label>
<input type="text" class="form-control" id="static">
</div>
<div class="form-group">
<label for="date">Incoming Date:</label>
<input type="date" class="form-control" id="date">
</div>
<div class="form-group">
<label for="i.d.">Pet I.D. Number:</label>
<input type="text" class="form-control" id="i.d.">
</div>
<div class="form-group">
<label for="pettype">Pettype:</label>
<select id="date">
<option value="pettype">Pettype</option>
<option value="breed1">Dog</option>
<option value="breed2">Cat</option>
<option value="breed3">Horse</option>
</select>
</div>

<div class="form-group">
<label for="Establishment">Name of Establishment or Person:</label>
<input type="text" class="form-control" id="Establishment">
</div>

<div class="form-group">
<label for="phone">phone#</label>
<input type="tel" class="form-control" id="phone">
</div>

<div class="form-group">
<label for="gda">GDA License Number:</label>
<input type="text" class="form-control" id="gda">
</div>

<div class="form-group">
<label for="Address">Physical Address:</label>
<input type="text" class="form-control" id="address">
</div>

<div class="form-group">
<label for="City">City:</label>
<input type="text" class="form-control" id="City">
</div>
 
<div class="form-group">
<label for="state">State:</label>
<input type="text" class="form-control" id="State">
</div>

<div class="form-group">
<label for="zip">Zip:</label>
<input type="text" class="form-control" id="zip">
</div>
<!--change to checkboxes-->
<div class="form-group">
<label for="acquired"> how were they Acquired?</label>
<select id="acquired">
<option value="option1">NA</option>
<option value="option2">impunding or harboring seized,stray,homeless,abandoned, or unwanted dogs,cats or other.</option>
<option value="option3">Release of ownership to Rescue Group</option>
<option value="option4">adoption</option>
<option value="option5">Live Birth</option>
<option value="option6">Custodial Care:</option>
<option value="option7">Impounding or harboring seized, stray, homeless, abandoned, or unwanted dogs, cats, and other animals requires a contract with a "Political Subdivision of the State. Ga. Animal Protection act 4-11-2(2)</option>
</select>
		
</form>
</body>