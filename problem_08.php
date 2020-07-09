<html>
	<body>
		<center>
		<h3>problem-8 : multiply unlimited even number</h3>
		<form action="problem_08.php" method="post">
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
	$_mulp = 1;
	$_myNum = $_POST["input_1"];
	for ($i=1; $i <= $_myNum ; $i++) {
		if ($i%2 == 0) {
			$_mulp = $_mulp * $i;
			}
		}
		echo "product of even numbers from 0 to ".$_myNum." is ".$_mulp;
	}
?>