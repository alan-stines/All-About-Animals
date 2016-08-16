<?php 
	$title = "The BarnYard - Inventory System for Animals";
	include "_src/header.php"
?>


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
		
<?php	include './_src/footer.php'; ?>