	<?php include "header.php"?>
	
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
				</tbody>
				 <a href="#" class="btn btn-info" role="button">Save</a>
				 </body>
				 </html>