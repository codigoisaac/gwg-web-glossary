<head>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<div class="container">

	<div class="row">
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Delete <?= $model->term ?></h1>
		</div>
	</div>

	<div class="row">
		Are you sure you wnat to delete <?= $model->term ?>?
	</div>

	<div class="row">
		<form action="" method="POST">
			<input type="hidden" name="term" value="<?= $model->id ?>">
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Delete this Term">
			</div>
		</form>
	</div>

</div>