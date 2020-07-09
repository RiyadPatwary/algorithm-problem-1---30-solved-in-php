<html>
	<body>
		<center>
		<h3>problem-5 : find even or odd number </h3>
		<form action="problem_05.php" method="post">
			Enter any number <input type="number" name="input_1"><br><br>
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
	$_myNum = $_POST["input_1"];
	if ($_myNum%2 == 0) {
		# code...
			echo $_myNum." is an even number <br>";
		}
		else{
			echo $_myNum." is an odd number <br>";
		}
	}
?>