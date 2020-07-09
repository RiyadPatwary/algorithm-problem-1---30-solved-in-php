<html>
	<body>
		<center>
		<h3>problem-30 : print unlimited perfect number </h3>
		<form action="problem_30.php" method="post">
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
	$_lastNum = $_POST["input_1"]; 
	$_rem = 0;	//1+2+3

	for ($i=1; $i <= $_lastNum; $i++) {//6
		# code...
		for ($j=1; $j < $i ; $j++) {//1,2,3,4,5
			# code...
			if ($i%$j == 0) {
				# code...
				$_rem = $_rem + $j;
			}
		}

		//output
		if ($i == $_rem) {
			# code...
			echo $i."<br>";
		}
		$_rem = 0;
	}

}

?> 