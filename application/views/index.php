<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="<?=base_url()?>assets/bootstrap/css/bootstrap.css" media ="screen">
	<script src="<?=base_url()?>assets/bootstrap/js/jquery-2.1.4.min.js"></script>
	<script src="<?=base_url()?>assets/bootstrap/js/bootstrap.js"></script>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-default" role="navigation">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="#"><img src="<?=base_url()?>assets/gambar/logo.png" width="auto" height="30" alt=""></a>
				</div>
		
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-ex1-collapse">
					<ul class="nav navbar-nav navbar-left">
						<li class="active"><a href="#">Angkot</a></li>
						<li><a href="#">Terminal</a></li>
						<li><a href="#">Kritik & Saran</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><b class="caret"></b></a>
							<ul class="dropdown-menu">
								<li><a href="#">Log Out</a></li>
							</ul>
						</li>
					</ul>
				</div><!-- /.navbar-collapse -->
			</div>
		</nav>
	</div>
</body>
</html>