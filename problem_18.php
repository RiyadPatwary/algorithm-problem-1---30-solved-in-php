<html>
	<body>
		<center>
		<h3>problem-18 : Multiply two number by adding...</h3>
		<form action="problem_18.php" method="post">
			Enter a number <input type="number" name="input_1"><br>
			Enter another number <input type="number" name="input_2"><br>
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
	$_myNum_2 = $_POST["input_2"]; 
	$_result = 0;
	for ($i=1; $i <= $_myNum_2 ; $i++) {
			$_result = $_result + $_myNum_1;
		}
		echo "product of ".$_myNum_1." and ".$_myNum_2." is ".$_result;
	}
?>