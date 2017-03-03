<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Home</title>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?php echo base_url(); ?>Assets/css/bootstrap.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.min.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="<?php echo base_url(); ?>Assets/js/bootstrap.min.js"></script>
		<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<nav class="navbar navbar-default navbar-static-top" role="navigation">
	<div class="container">
		<a class="navbar-brand" href="#" >Bismillah</a>
		<ul class="nav nav-pills">
				<li role="presentation"><a href="<?php echo site_url('')?>/home">Home</a></li>
  				<li role="presentation"><a href="<?php echo site_url('')?>/about">About</a></li>
  				<li role="presentation"><a href="<?php echo site_url('')?>/contact">Contact</a></li>
		</ul>
	</div>
</nav>
		<form action="" method="POST" role="form">
 				<center><legend>Contact Me</legend></center>
 		
 			<div class="form-group">
 				<label for="">Name</label>
 				<input type="text" class="form-control" id="" placeholder="Name" >
 			</div>
 				<div class="form-group">
 				<label for="">Email</label>
 				<input type="text" class="form-control" id="" placeholder="Email" >
 			</div>
 				<div class="form-group">
 				<label for="">Massage</label>
 				<textarea placeholder="Massage" class="form-control"></textarea>
 			</div>
 			<center><button type="submit" class="btn btn-primary nyoba">Submit</button></center>
 		</form>
 			</body>
</html>