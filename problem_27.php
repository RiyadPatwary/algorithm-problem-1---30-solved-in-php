<html>
	<body>
		<center>
		<h3>problem-27 : output unlimited prime number</h3>
		<form action="problem_27.php" method="post">
			Enter last number <input type="number" name="input_1"><br>
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

	echo "prime number from 1 to ".$_myNum_1." <br>";

	for ($i=2; $i <= $_myNum_1 ; $i++) { 
		# code...
		for ($j=2; $j < $i ; $j++) { 
			# code...
			if ($i % $j == 0) {
				# code...
				$_counter++;
				break;
			}
		}
		if ($_counter == 0) {
			# code...
			echo $j."<br>";
		}
		$_counter=0;
	}

}

?>