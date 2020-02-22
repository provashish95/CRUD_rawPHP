<!DOCTYPE html>
<!DOCTYPE html>

<html>
<head>
	<title>php cookie</title>
	<style>
		.phpcoding{width: 900px; margin: 0 auto; background:#ddd;}
		.headeroption, .footeroption{background: #444;color: #fff;text-align: center; padding: 20px;}
		.maincontent{min-height: 400px; padding: 20px;}
		.headeroption h2, .footeroption{margin: 0;}
		p{margin:0}
		input[type = "text"]{width: 200px;}
		.tblone{
			width: 100%;
			color: red;	
			border:1px solid red;
			margin: 20px 0;	
		}
	</style>
</head>
<body>
	<div class="phpcoding">


		<section class="headeroption">
		<h2><?php echo"PHP PRACTISE";?></h2>
		</section>
		
		
		<hr/>
		     PHP CODING
		
		<span style="float:right">
			<?php
				date_default_timezone_set('Asia/Dhaka');
				echo "Present Time is : ". date("h:i:sa");
			?>
			
		</span>
