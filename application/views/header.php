<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Inventory</title>
    <!--  Adding bootstrap -->
    <link rel="stylesheet" href="/stock/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="/stock/js/jquery-3.2.1.min.js"></script>
    <script src="/stock/js/bootstrap.min.js"></script>
  </head>
  <body>
    <nav class="navbar navbar-inverse">
  		<div class="container">
  			<div class="navbar-header">
  				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
  					<span class="sr-only">Toggle navigation</span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  					<span class="icon-bar"></span>
  				</button>
  				<a class="navbar-brand" href="<?php echo base_url();?>dashboard">Inventory System</a>
  			</div>

  			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  				<ul class="nav navbar-nav">
  					<?php if ($this->session->logged == true ): ?>
  						<li><a href="<?php echo base_url();?>dashboard/register">Item Register</a></li>
  					<?php endif ?>
  				</ul>
  				<ul class="nav navbar-nav navbar-right">
  					<?php if ($this->session->logged == true ): ?>
  						<li><a href="<?php echo base_url();?>Auth/logout">Logout</a></li>
  					<?php endif ?>
  				</ul>
  			</div>
  		</div>
  	</nav>
  </body>
</html>
