<!-- MySQL DB config & connect-->
<?php
include('db.php');
include('mysql_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>DAIICT Git with PHP &amp; MySQL Demo</title>

	<!-- bootstrap -->
	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

<style type="text/css">
body {
    padding-top: 50px;
}
.margin-top-50 {
	margin-top: 50px;
}
</style>
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">DAIICT Azure Session Demo</a>
		</div>
		<div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="https://www.facebook.com/mangukiya.tarun" target="_blank">Facebook</a></li>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<table class="table table-bordered margin-top-50">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Comment</th>
				</thead>
				<tbody>
					<?php 
					$query = "SELECT * from data";
					$result=mysql_query($query);
					$num=mysql_numrows($result);

					$i=0;
					while ($i < $num) {
						echo "<tr>".
							"<td>".
							mysql_result($result,$i,"id").
							"</td>".
							"<td>".
							mysql_result($result,$i,"name").
							"</td>".
							"<td>".
							mysql_result($result,$i,"comment").
							"</td>".
							"</tr>";

							$i++;
					}

					?>
				</tbody>
			</table>
		</div>

		<div class="col-md-12">
			<h2 class="text-center">Leave your review!</h2>

			<form action="save.php" method="POST">
				<div class="form-group">
					<label>Name</label>
					<input type="text" class="form-control" name="name">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input type="email" class="form-control" name="email">
				</div>

				<div class="form-group">
					<label>Comment</label>
					<textarea class="form-control" name="comment"></textarea>
				</div>
				<button type="submit" class="btn btn-primary">Share</button>
			</form>
		</div>
	</div>
</div>
</body>
</html>
<!-- Close MySQL Connection -->
<?php
include('mysql_close.php');
?>