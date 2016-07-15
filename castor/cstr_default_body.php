<body>

<div class="navbar navbar-fixed-top" role="navigation">
	<div class="container navbar-inverse ">
		<div class="collapse navbar-collapse">
			<div class="btn-group btn-group-sm navbar-left" role="group" aria-label="...">
				<button type="button" class="btn btn-primary">Admin</button>
				<button type="button" class="btn btn-primary">Verif</button>
				<button type="button" class="btn btn-primary">Att</button>
			</div>
			<div class="btn-group btn-group-sm navbar-right" role="group" aria-label="...">
				<button id="btnGroupVerticalDrop1" type="button" class="btn btn-primary dropdown-toggle"
						data-toggle="dropdown">
					<span class="label">Bienvenue XXX</span>
					<span class="glyphicon glyphicon-user"></span>
					<span class="caret"></span>
				</button>
				<ul class="dropdown-menu" role="menu" aria-labelledby="btnGroupVerticalDrop1">
					<li><a href="#">Profil</a></li>
					<li><a href="#">Logout</a></li>
				</ul>
			</div>
		</div><!--/.nav-collapse -->
	</div>
	<div class="container navbar-default">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Project name</a>
		</div>
		<div class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active"><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span><span class="badge">0</span><br>Panier</a></li>
				<li><a href="#about">About</a></li>
				<li><a href="#contact">Contact</a></li>
			</ul>
			<div class="btn-group navbar-right" role="group" aria-label="...">
				<form class="navbar-form">
					<input class="form-control input-sm" type="text" style="width: 200px;">
					<button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
				</form>
			</div>
		</div><!--/.nav-collapse -->
	</div>
</div>
<div class="container">

	<div class="starter-template">
		<h1>Bootstrap starter template</h1>
		<p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
			mostly barebones HTML document.</p>
	</div>

</div><!-- /.container -->
<div class="container">
	<div class="table-responsive">
		<table class="table table-hover">
			<thead>
			<tr>
				<th>Col1</th>
				<th>Col2</th>
				<th>Col3</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td>Ligne1</td>
				<td>Ligne1</td>
				<td>Ligne1</td>
			</tr>
			<tr>
				<td>Ligne2</td>
				<td>Ligne2</td>
				<td>Ligne2</td>
			</tr>
			</tbody>
		</table>
	</div>
</div><!-- /.container -->
<div class="container" align="center">
	<div style="width: 300px;">
		<form class="form-signin">
			<h2 class="form-signin-heading">Please sign in</h2>
			<label for="inputEmail" class="sr-only">Email address</label>
			<input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
			<label for="inputPassword" class="sr-only">Password</label>
			<input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
			<div class="checkbox">
				<label>
					<input type="checkbox" value="remember-me"> Remember me
				</label>
			</div>
			<button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
		</form>
	</div>
	<div>
		<?php
		$cstr_dbconn = cstr_dbconnect();

		$query = "select * from users";

		foreach($cstr_dbconn->query($query) as $row) {
			var_dump($row);
			echo "<br>";
		}
		?>
	</div>
</div> <!-- /container -->
<nav class="navbar navbar-default navbar-fixed-bottom" role="navigation">
	<a class="navbar-brand" href="#">Title</a>
	<ul class="nav navbar-nav">
		<li class="active">
			<a href="#">Home</a>
		</li>
		<li>
			<a href="#">Link</a>
		</li>
	</ul>
</nav>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<?php
lc_showerror();
?>
</body>

