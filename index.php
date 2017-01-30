			<?php 
				date_default_timezone_set("Europe/Amsterdam");
				$t = date("H:i");


				if ($t < "06:00") {
					$msg = "Good Night";
					$wall = "img/face.jpg";

				}elseif ($t > "06:00" && $t <= "12:00") {
					$msg = "Good Morning";
					$wall = "img/morning.png";

				}elseif ($t > "12:00" && $t <= "18:00") {
					$msg = "Good Afternoon";
					$wall = "img/afternoon.png";

				}elseif ($t > "18:00") {
					$msg = "Good Evening";
					$wall = "img/evening.png";
				

				}
				
			
			?>
<html>
<head>
	<meta charset="UTF-8">
	<title>good morning PHP</title>
	<link rel="stylesheet" type="text/css" href="goodmorning.css">
</head>
<body id="base" style="background: url('<?php echo $wall ?>')">
	<main>
		<section id="time">
			<p><?php echo $msg; ?></p>
			 <p> <?php echo $t; ?> </p>

		</section>
	</main>
</body>
</html>