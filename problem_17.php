<html>
	<body>
		<center>
		<h3>problem-17 : 1<sup>3</sup> + 2<sup>3</sup> + 3<sup>3</sup> + .......... + n<sup>3</sup></h3>
		<form action="problem_17.php" method="post">
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
	$_sum = 0;
	$_myNum = $_POST["input_1"];
	for ($i=1; $i <= $_myNum ; $i++) {
			$_sum = $_sum + pow($i,3);
		}
		echo "1<sup>3</sup> + 2<sup>3</sup> + 3<sup>3</sup> + .......... + ".$_myNum."<sup>3</sup> = ".$_sum;
	}
?>