<html>
	<body>
		<center>
		<h3>problem-28 : fibonacci series </h3>
		<form action="problem_28.php" method="post">
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
	$_var_a = 0;
	$_var_b = 1;
	$_sum = 0;
	for ($i=1; $i <= $_myNum_1 ; $i++) { 
		# code...
		$_sum = $_var_a + $_var_b;
		$_var_a = $_var_b;
		$_var_b = $_sum;

		echo $_sum."<br>";
	}

}

?>