<!DOCTYPE html>
<html>
<head>
	<title><?php echo $title; ?></title>
	<link href="_src/_bower/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
	<script src="_src/_bower/jquery/dist/jquery.min.js"></script>
	<script src="_src/_bower/bootstrap/dist/js/bootstrap.min.js"></script>
	<link href="_src/style.css" rel="stylesheet" />
</head>
<body>
<div class="container">
<header>
	<div class="container">
		<div style='float:right; width:20%;'>Macon, GA</div>
		<h2>The BarnYard</h2>
		<h6>Inventory System for All About Animals Rescue Group</h6>
	</div>
	<nav class="navbar navbar-default">
      <div class="container-fluid">
         <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">Barnyard</a>
         </div>
         <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
					<li><a href="petsearch.php">PetSearch</a></li>
					<li><a href="incomingform.php">PetCheckin</a></li>
					<li><a href="checkoutform.php">PetCheckout</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Manage Users</a></li>
							<li><a href="#">Run A Report</a></li>
							<li><a href="#">Backup Data</a></li>
							<!--<li role="separator" class="divider"></li>
							<li class="dropdown-header">Nav header</li>
							<li><a href="#">Separated link</a></li>
							<li><a href="#">One more separated link</a></li>-->
						</ul>
					</li>
				</ul>
			</div><!--/.nav-collapse -->
      </div><!--/.container-fluid -->
   </nav>

</header>



