<html>
	<body>
		<center>
		<h3>problem-22 : SUM of digits of a number</h3>
		<form action="problem_22.php" method="post">
			Enter a number <input type="number" name="input_1"><br>
			<input type="submit" name="submit" value="submit">
		</form>
		</center>
		<big><b>Output:</b></big><br>
		<hr>
	</body>
</html>


<?php
if (isset($_POST["submit"])) {
	# code...
	$_myNum_1 = $_POST["input_1"];
	$_tempVar = $_myNum_1; 
	$_sum = 0; 
	$_rem;
	for ($i=$_tempVar; $_tempVar > 1 ; $i--) {
			$_rem = $_tempVar % 10; 
			$_sum = $_sum + $_rem;
			$_tempVar = $_tempVar/10; 
		}
		echo "SUM of digits is ".$_sum;
	}
?>