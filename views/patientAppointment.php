<?php ob_start(); ?>

<!doctype html>
<html>
	<head>
		<title>CH EMR :: หน้าหลัก</title>
		<?php include("configure.php"); ?>
	</head>
	<?php include("style2.php"); ?>
	<body>	
		<div class="container" style="background-color: white; border-left: 3px solid #5d5d5d; border-right: 3px solid #5d5d5d; height: 100%">
			<div class="row">
				<?php include("header.php"); ?>
			</div>
			<div class="row">
				<div class="col-md-3" style="text-align:center; margin-top:4%">
					<?php include("sidebar.php"); ?>
				</div>
				<div class="col-md-9" style="text-align:right; margin-top:4%">
					<div class="panel panel-success">
						<div class="panel-heading" style="text-align:center">
							<h3 class="panel-title">รายการนัดพบแพทย์</h3>
						</div>
						<div class="panel-body" style="text-align:left">
							<div class="table-responsive">
								<table class="table table-hover table-bordered"> <!-- Change class here -->
									<thead>
										<tr class="warning">
											<th style="text-align:center">วันที่</th>
											<th style="text-align:center">เวลา</th>
											<th style="text-align:center">แพทย์</th>
											<th style="text-align:center">แผนก</th>
											<th style="text-align:center">ยกเลิก</th>
										</tr>
									</thead>
									<tbody>
										<?php
											$i = 0;
											if(empty($_SESSION["appointmentArr"]))
												$c = 0;
											else
												$c = count($_SESSION["appointmentArr"]);
											
											while($i < $c) { 
										?>
										<tr style="text-align:center">
											<form method="post" action="specialDeleteAppointment">
												<td><?php echo $_SESSION["appointmentArr"][$i]['appoint_date']; ?></td>
												<td><?php if($_SESSION["appointmentArr"][$i]['appoint_time'] == 0) echo "9.30 น."; else echo "13.00 น."; ?></td>
												<td><?php echo $_SESSION["appointmentArr"][$i]['staff_name']; ?> <?php echo $_SESSION["appointmentArr"][$i]['staff_surname']; ?></td>
												<td><?php echo $_SESSION["appointmentArr"][$i]['appoint_department']; ?></td>
												<input type="hidden" name="appointmentToBeCancelled" value="<?php echo $_SESSION["appointmentArr"][$i++]['appoint_id']; ?>">
												<td><input type="submit" value="ยกเลิก" class="glyphicon glyphicon-remove"></td>
											</form>
										</tr>
										<?php 

										}?>	
									</tbody>
								</table>
								<br>
								<center><a href="userCreateAppointment" class="btn btn-default"> จองเวลาพบแพทย์ </a></center>
								<br><br>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>