<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="refresh" content="1">
	<title>Automated Plant Watering System</title>
	<link rel="stylesheet" href="estyle.css">
</head>
<body>
	<?php
		$light = file_get_contents("lightData.txt");
		$soil = file_get_contents("soilData.txt");
		$temp = file_get_contents("tempData.txt");
		$humid = file_get_contents("humidData.txt");
		$sonic = file_get_contents("sonicData.txt");
	?>
	<div class="main">
		<div class="header">
			<div class="icon">
				<h2 class="title">Automated Plant Watering System Dashboard</h2>
			</div>
		</div>

		<div class="container_one">
			<div class="box1">
				<div class="data">
					<p><img class="aycon" src="idea.png">LIGHT INTENSITY</p>
					<div class="number">	
						<p><?php echo $light ?></p>
					</div>
					<p>Percent</p>
				</div>
			</div>

			<div class="box2">
				<div class="data">
					<p><img class="aycon" src="soil-analysis.png">SOIL MOISTURE</p>
					<div class="number">	
						<p><?php echo $soil ?></p>
					</div>
					<p>Percent</p>
				</div>
			</div>

			<div class="box3">
				<div class="data">
					<p><img class="aycon" src="thermometer.png">AIR TEMPERATURE</p>
					<div class="number">	
						<p><?php echo $temp ?></p>
					</div>
					<p>Degree Celsius</p>
				</div>
			</div>

			<div class="box4">
				<div class="data">
					<p><img class="aycon" src="humidity.png">AIR HUMIDITY</p>
					<div class="number">	
						<p><?php echo $humid ?></p>
					</div>
					<p>Percent</p>
				</div>
			</div>
		</div>

		<div class="container_two">
			<div class="box5">
				<div class="data">
					<p>CURRENT TIME & DATE</p>
					<div class="info">	
						<p><?php echo date("h:i a") ?> | <?php echo date("m-d-Y") ?></p>
					</div>
				</div>
			</div>

			<div class="box7">
				<div class="data">
					<p>WATER TANK STATUS</p>
					<div class="info">	
						<p><?php 
							if($sonic < 10){
								echo "FULL";
								}
							elseif($sonic > 9 and $sonic < 15){
								echo "LOW";
								}
							elseif($sonic > 14){
								echo "EMPTY";
								}
							?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>
