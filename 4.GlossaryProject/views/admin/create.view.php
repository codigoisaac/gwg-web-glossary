<head>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Create Term</h1>
		</div>
	</div>
	<div class="row">
		<form action="" method="POST">
			<div class="form-group">
				<label for="term">Term:</label>
				<input class="form-control" type="text" name="term" id="term">
			</div>
			<div class="form-group">
				<label for="definition">Definition:</label>
				<textarea class="form-control" name="definition" id="definition">
				</textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Create this Term">
			</div>
		</form>
	</div>
</div>