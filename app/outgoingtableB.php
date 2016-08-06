<?php include "header.php"?>

<h2>Outgoing Record</h2>
<form role="form">
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

<button>submit</button>

</div>
</form>
</body>
</html>