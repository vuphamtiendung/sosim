<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<script type="text/javascript" src="<?php echo base_url(); ?> vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
 	<link rel="stylesheet" href="<?php echo base_url(); ?>1.css">
</head>
<body>
	<?php require('header_sim.php') ?>
	<div class="container">
		<h3 class="text-sm-center">SỬA SỐ VÀ GIÁ TIỀN</h3>
		<hr>
		<div class="row">
			<?php foreach ($mangketqua as $key => $value): ?>
				<div class="row">
					<div class="col-7 push-sm-3">
						<!-- action là phương thức insert trong controller -->
						<form action="../updateData" method="post" enctype=multidata/form-data>
							<div class="card">
								<div class="card-block">
									<fieldset class="form-group">
										<label for="formGroupExampleInput">ID:</label>
										<input name="id" type="hidden" class="form-control" id="formGroupExampleInput" placeholder="vd: 098919192" value="<?= $value['id'] ?>">
									</fieldset>
									<fieldset class="form-group">
										<label for="formGroupExampleInput">Số sim:</label>
										<input name="sosim" type="text" class="form-control" id="formGroupExampleInput" placeholder="vd: 098919192" value="<?= $value['sosim'] ?>">
									</fieldset>
									<fieldset class="">
										<label for="formGroupExampleInput">Giá tiền:</label>
										<input name="giatien" type="text" class="form-control" id="formGroupExampleInput2" placeholder="vd: 300000" value="<?= $value['giatien'] ?>">
									</fieldset>
									<hr>
									<input type="submit" class="btn btn-success btn-block" value="lưu vào MySQL">
								</div>
								
							</div>
						</form>
					</div>
				</div>
			<?php endforeach ?>
		</div>
	</div>
</body>
</html>