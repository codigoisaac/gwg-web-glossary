<?php require('../assets/include-css-admin.html'); ?>

<div class="container">

	<div class="row">
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Edit Term</h1>
		</div>
	</div>

	<div class="row">
		<form action="" method="POST">
			<input type="hidden" name="original-term" value="<?= $model->id ?>">
			<div class="form-group">
				<label for="term">Term:</label>
				<input class="form-control" type="text" name="term" id="term" value="<?= $model->term ?>">
			</div>
			<div class="form-group">
				<label for="definition">Definition:</label>
				<textarea class="form-control" name="definition" id="definition"><?= $model->definition ?></textarea>
			</div>
			<div class="form-group">
				<input class="btn btn-primary" type="submit" value="Update this Term">
			</div>
		</form>
	</div>

</div>