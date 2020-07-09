<html>
	<body>
		<center>
		<h3>problem-24 : Check palindrome number</h3>
		<form action="problem_24.php" method="post">
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
	$_sum = 0;

	for ($i=$_tempVar; $_tempVar > 1 ; $i--) {
			$_rem = $_tempVar % 10; 
			$_sum = $_sum *10 + $_rem;
			$_tempVar = $_tempVar/10; 
			//echo $_sum."<br>";	
		}
		
		//echo $_sum;  //sum total check

		if ($_myNum_1 == $_sum) {
			# code...
			echo $_myNum_1." is a palindrome number";
		}
		else {
			echo $_myNum_1." is NOT a palindrome number";
		}
	}
?>