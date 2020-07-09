<html>
	<body>
		<center>
		<h3>problem-10 : add unlimited odd number</h3>
		<form action="problem_10.php" method="post">
			Enter last number <input type="number" name="input_1"><br><br>
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
	$_sum = 0;
	$_myNum = $_POST["input_1"];
	for ($i=1; $i <= $_myNum ; $i++) {
		if ($i%2 == 1) {
			$_sum = $_sum + $i;
			}
		}
		echo "sum of odd numbers from 0 to ".$_myNum." is ".$_sum;
	}
?>