<head>
	<link href="../../assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="../../assets/css/php-fundamentals.css" rel="stylesheet" />
</head>

<div class="container">
	<div class="row">
		<div class="col-lg-12 text-center">
			<h1 class="mt-5">Glossary</h1>
		</div>
	</div>
	<div class="row">
		<a href="create.php">Create New Term</a>
	</div>
	<div class="row">
		<table class="table table-striped">
			<?php foreach ($model as $item) : ?>
				<tr>
					<td><a href="detail.php?term=<?= $item->term ?>">
							<?= $item->term ?></a></td>
					<td><?= $item->definition ?></td>
					<td><a href="edit.php?key=<?= $item->term ?>">Edit</a></td>
				</tr>
			<?php endforeach; ?>
		</table>
	</div>
</div>