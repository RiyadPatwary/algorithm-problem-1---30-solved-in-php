<html>
	<body>
		<center>
		<h3>problem-29 : check perfect number </h3>
		<form action="problem_29.php" method="post">
			Enter any number <input type="number" name="input_1"><br>
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
	$_myNum_1 = $_POST["input_1"]; //6
	$_rem = 0;	//1+2+3
	for ($i=1; $i < $_myNum_1 ; $i++) {//1,2,3,4,5
		# code...
		if ($_myNum_1%$i == 0) {
			# code...
			$_rem = $_rem + $i;
		}
	}

	//output
	if ($_myNum_1 == $_rem) {
		# code...
		echo $_myNum_1." is a Perfect Number";
	} else {
		echo $_myNum_1." is NOT a Perfect Number";
	}

}

?> 