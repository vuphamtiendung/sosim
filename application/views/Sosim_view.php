<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Số sim</title>
	<!--kết nối bootstrap 4-->
	<script type="text/javascript" src="<?php echo base_url(); ?> vendor/bootstrap.js"></script>
 	<script type="text/javascript" src="<?php echo base_url(); ?>1.js"></script>
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url(); ?>vendor/font-awesome.css">
</head>
<body>
	<?php require('header_sim.php') ?>
	<h3 class="text-xs-center">Thêm mới số điện thoại</h3>
	<hr>
	<div class="container">
		<div class="row">
			<div class="col-sm-6 push-sm-3">
				<!-- action là phương thức insert trong controller -->
				<form action="Sosim_controller/insertData" method="post" enctype=multidata/form-data>
					<div class="card">
						<div class="card-block">
							<fieldset class="form-group">
								<label for="formGroupExampleInput">Số sim:</label>
								<input name="sosim" type="text" class="form-control" id="formGroupExampleInput" placeholder="vd: 098919192">
							</fieldset>
							<fieldset class="">
								<label for="formGroupExampleInput">Giá tiền:</label>
								<input name="giatien" type="text" class="form-control" id="formGroupExampleInput2" placeholder="vd: 300000">
							</fieldset>
							<hr>
							<input type="submit" class="btn btn-success btn-block" value="lưu vào MySQL">
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>