<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<!--kết nối bootstrap 4-->
	<script type="text/javascript" src="<?php echo base_url(); ?> vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<?php require('header_sim.php') ?>
	<div class="container">
		<h3 class="text-sm-center">Sim Và Giá Hiện Có</h3>
		<hr>
		<div class="row">
			<?php foreach ($dulieutucontroller as $key => $value): ?>
				<div class="col-sm-4">
				<div class="card card-block">
					<h3 class="card-title">
						Số sim: <?= $value['sosim'] ?>
					</h3>
					<p class="card-text">
						Giá tiền: <?= $value['giatien'] ?>
					</p>
					<p class="card-text">
						Id: <?= $value['id'] ?>
					</p>
					
					<a href="deleteData/<?= $value['id'] ?>" class="btn btn-danger xoa"> <i class="fa fa-times"></i></a>
					
					<a href="editSimByID/<?= $value['id'] ?>" class="btn btn-warning sua"> <i class="fa fa-pencil"></i></a>
				</div>
			</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>