<html>
	<body>
		<center>
		<h3>problem-3 : sum of numbers from 1 to n.... </h3>
		<form action="problem_03.php" method="post">
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
	$_myNum = $_POST["input_1"];
	$_sum = 0;
	for ($i=1; $i <=$_myNum ; $i++) { 
		$_sum = $_sum+$i;
		}
		echo "sum is ".$_sum."<br>";
}
?>