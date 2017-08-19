<!DOCTYPE html>
<html>
	<head>
		<title>Compute Prime</title>
		<link rel="stylesheet" type="text/css" href="css/prime.css">
	</head>
	<body>
		<div class="bigWrapper">
			<header>
				<h1>INTEGER SOLUTIONS</h1>
			</header>
			<h4 id="cal">Prime Number Calculator</h4>
				<div class="wrapper">
					<form action="" method="POST" id="myForm">
					<?php
//include_once ('primefunc.php');
if(isset($_POST['mySub'])){
	$n = $_POST['myInput'];
	$count = 0;
	if(!empty($n)){
		for($i = 1; $i <= $n; $i++){
		if($n % $i == 0){
			$count++;
			}
		}
		if($count == 2){
			echo "<h3 id ='pr'>".$n." is a prime number <br>"."</h3>";
		}else{
			echo "<h3 id= 'pr'>".$n." is not a prime number <br>"."</h3>";
		}
	}else{
		echo "<h3 id='pr'>"."The box must not be blank <br>"."<h3>";
	}
		
}
?>

						<input type="text" name="myInput" id="myVar" placeholder="Enter the number to check for" /><br><br>
						<input type="submit" name="mySub" value="Check Answer" class="btn" />
					</form>
				</div>
				<hr>
				<center><p>&copy Prime Numbers Calculator created - Emmanuel </p></center>
		</div>
	</body>
</html>