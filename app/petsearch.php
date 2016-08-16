<?php 
	$title = "The BarnYard - Inventory System for Animals";
	include './_src/header.php'; 
?>
<h1>Pet Search</h1>
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
<?php	include './_src/footer.php'; ?>