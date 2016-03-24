<?php ob_start(); ?>

<!doctype html>
<?php /*
	Output to controller
	
	Patient
		id_type = ประเภทของ username ที่ใช้เข้า : nt_id (เลขบัตรประชาชน) / hp_id (เลขยัตรโรงพยาบาล)
		username = เลขบัตรประชาชน / เลขบัตรโรงพยาบาล
		password = รหัสผ่าน
		status = patient
	
	Staff
		position = ตำแหน่งของพนักงาน : doctor / nurse / officer / pharmacy
		username = รหัสพนักงาน
		password = รหัสผ่าน
		status = staff
*/ ?>
<html>
	<head>
		<title>CH EMR :: เข้าสู่ระบบ</title>
		<?php include("configure.php"); ?>
	</head>
	<?php include("style1.php"); ?>
	<body>	
		<div class="container">
			<div class="row" style="text-align:center; margin-top:8%">
				<img src="<?php echo URL; ?>public/img/logo.png" height=20% width=20%>
			</div>
			<div class="row" style="margin-top:3%">
				<div class="col-md-3"></div>
				<div class="col-md-6">
					<div class="panel panel-success">
						<div class="panel-heading">
							<h3 class="panel-title">Result</h3>
						</div>
						<div class="panel-body">
							<div class="row" style="text-align:center;">
								ลงทะเบียนสำเร็จ
								<br><br>	
								<a href="declareRegisterSucceeds/acknowledge" class="btn btn-success">ย้อนกลับ<a>
							</div>
						</div>
					</div>
				<div class="col-md-3"></div>
			</div>
		</div>
	</body>
</html>