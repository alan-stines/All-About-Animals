<?php 
	$title = "The BarnYard - Inventory System for Animals";
	include './_src/header.php'; 
?>
<h1>Incoming Form</h1>
<form role="form">
<!--pet medical-->
<div class="form-group">
<label for="petname">PetName</label>
<input type="text" class="form-control" id="petname">
</div>
<div class="form-group">
<label for="age">Age</label>
<select id="age">
<option value="age">Age</option>
<option value="infant">infant</option>
<option value="young">young</option>
<option value="old">old</option>
</select>
</div>


<br>
<h4>Sex</h4>
<div class="form-group">
<div class="col-xs-6">
<p>Male
<input type="checkbox" class="form-control" id="M">
</p>
</div>
<div class="col-xs-6">
<p>Female
<input type="checkbox" class="form-control" id="F">
</p>
</div>
</div>
<div class="form-group">
<label for="pettype">Pettype:</label>
<select id="pettype">
<option value="pettype">Pettype</option>
<option value="breed1">Dog</option>
<option value="breed2">Cat</option>
<option value="breed3">Horse</option>
</select>
</div>

<table class="table table-hover">
			<thead>
				<tr>
					<th>Medical type</th>
					<th> medical location/vaccination type</th>
					<th>done on</th>
					<th>pos/neg</th>
					<th>Next due on</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
				<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
				<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
				<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
				<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
				<tr>
					<th>
	<select id="medtype">
<option value="Med1">medical type</option>
<option value="Med2">Heartworm Test</option>
<option value="Med3">FeLV/FIV Test</option>
<option value="Med4">Rabies</option>
<option value="Med5">Deworming</option>
<option value="Med6">Vaccination</option>
</select>
</th>
					
					<th><input type="text" class="form-control" id="destination/type"></th>
					<th>
						<input type="date" class="form-control" id="datedone">
					</th>
					<th><select id="pos/neg">
							<option value="na">NA</option>
							<option value="med1">Postive</option>
							<option value="med2">Negative</option>
						</select>
					
					</th>
					<th>
					<input type="date" class="form-control" id="duedate">
					
					</th>
				</tr>
		</table>
		



<div class="form-group">
<label for="description">Pet Description</label>
<textarea  rows="5" class="form-control" id="description"></textarea>
</div>
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
</div>

</form>
<?php	include './_src/footer.php'; ?>