<html>
	<body>
		<center>
		<h3>problem-23 : Reversing digits of a number</h3>
		<form action="problem_23.php" method="post">
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
	$_rem;
	echo "Reversed digit of ".$_myNum_1." is ";
	for ($i=$_tempVar; $_tempVar > 1 ; $i--) {
			$_rem = $_tempVar % 10; 
			$_tempVar = $_tempVar/10; 
			echo $_rem;
		}
	}
?>