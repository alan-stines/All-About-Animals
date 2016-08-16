<?php 
	$title = "The BarnYard - Inventory System for Animals";
	include './_src/header.php'; 
?>
<h2>Adoption Information</h2>
<form role="form">
<div class="form-group">
<label for="PetName">Petname:</label>
<input type="text" class="form-control" id="PetName">
</div>
<div class="form-group">
<label for="pettype">Pettype:</label>
<select id="pettype">
<option value="pettype">Pettype</option>
<option value="breed1">Dog</option>
<option value="breed2">Cat</option>

</select>
</div>
<div class="form-group">
<label for="LastN">Adopter Last Name:</label>
<input type="text" class="form-control" id="LastN">
</div>
<div class="form-group">
<label for="FirstN">Adopter First Name:</label>
<input type="text" class="form-control" id="FirstN">
</div>
<!-- think they want proper age here -->
<div class="form-group">
<label for="Age">Age:</label>
<input type="text" class="form-control" id="Age">
</div>

<div class="form-group">
<label for="Birthdate">Birthdate</label>
<input type="date" class="form-control" id="Birthdate">
</div>

<div class="form-group">
<label for="Phoneh">Phone(H):</label>
<input type="text" class="form-control" id="Phoneh">
</div>

<div class="form-group">
<label for="phonew">Phone(W):</label>
<input type="text" class="form-control" id="phonew">
</div>


<div class="form-group">
<label for="phonec">phone(C):</label>
<input type="text" class="form-control" id="phonec">
</div>

<div class="form-group">
<label for="City">City</label>
<input type="text" class="form-control" id="City">
</div>

<div class="form-group">
<label for="State">State:</label>
<input type="text" class="form-control" id="state">
</div>

<div class="form-group">
<label for="Zip">Zip:</label>
<input type="text" class="form-control" id="Zip:">
</div>

<div class="form-group">
<label for="Email">Email</label>
<input type="text" class="form-control" id="Email">
</div>

<div class="form-group">
<label for="Contactyou">Best way of contact</label>
<input type="text" class="form-control" id="Contactyou">
<!--ajaxs the secondary contact-->
<button>Secondary Contact</button>
</div>
<div class="form-group">
<label for="Agreement">All agreements met</label>
<input type="checkbox" class="form-control" id="Agreement">
</div>

<h2> Staff Section</h2>
<div class="form-group">
<label for="Approved">Approved</label>
<input type="checkbox" class="form-control" id="Approved">
</div>
<div class="form-group">
<label for="Denied">Denied</label>
<input type="checkbox" class="form-control" id="Denied">
</div>
<div class="form-group">
<label for="comments">approved/Denial,comments</label>
<input type="text" class="form-control" id="comments">
</div>

<div class="form-group">
<label for="Interview Date">Interview Date:</label>
<input type="date" class="form-control" id="Interview Date">
</div>

<div class="form-group">
<label for="Interviewer">Interviewer Name</label>
<input type="text" class="form-control" id="Interviewer">
</div>
<h2>Outgoing Record</h2>

<div class="form-group">
<label for="outdate">Date</label>
<input type="date" class="form-control" id="outdate">
</div>
<div class="form-group">
<label for="Establishment">Establishment or Person Name:</label>
<input type="text" class="form-control" id="Establishment">
</div>
<div class="form-group">
<label for="Phone">Phone:</label>
<input type="phone" class="form-control" id="Phone">
</div>
<div class="form-group">
<label for="GDA">GDA License Number</label>
<input type="text" class="form-control" id="GDA">
</div>
<div class="form-group">
<label for="Address">Physical Address:</label>
<input type="text" class="form-control" id="Address">
</div>
<div class="form-group">
<label for="City">City:</label>
<input type="text" class="form-control" id="City">
</div>
<div class="form-group">
<label for="State">State:</label>
<input type="text" class="form-control" id="State">
</div>
<div class="form-group">
<label for="Zip">Zip:</label>
<input type="text" class="form-control" id="Zip">
</div>
<div class="form-group">
<label for="out">Mark one out going reason</label>
<select id="out">
<option value="option1">NA</option>
<option value="option2">Rescue Group Release of ownership</option>
<option value="option3">Adoption</option>
<option value="option4">Owner reclaim</option>
<option value="option5">Deceased</option>
<option value="option6">Euthanized</option>
<option value="option7">Escaped</option>
<option value="option8">Stolen</option>
<option value="option9">Custodial care</option>
</select>
</div>
<div class="form-group">
<label for="Comment">Comments:</label>
<textarea  rows="5" class="form-control" id="Comment">
</textarea>
<!--ajax?-->

<button>submit</button>
<a href="medicalform.php" type="button" class="btn btn-info">Medical Information</a>
</div>
</form>

<?php	include './_src/footer.php'; ?>