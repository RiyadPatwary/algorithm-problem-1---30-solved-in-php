<html>
	<body>
		<center>
		<h3>problem-26 : find prime number</h3>
		<form action="problem_26.php" method="post">
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
	$_counter = 0;

	for ($i=2; $i < $_myNum_1 ; $i++) { 
		# code...
		if ($_myNum_1 % $i == 0) {
			# code...
			$_counter++;
			break;
		}
	}

		if ($_counter == 0) {
			# code...
			echo $_myNum_1." is a prime number";
		}
		else {
			echo $_myNum_1." is NOT a prime number";
		}
	}
?>