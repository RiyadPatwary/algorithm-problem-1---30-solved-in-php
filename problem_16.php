<html>
	<body>
		<center>
		<h3>problem-16 : 1<sup>1</sup> + 2<sup>2</sup> + 3<sup>3</sup> + .......... + n<sup>n</sup></h3>
		<form action="problem_16.php" method="post">
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
			$_sum = $_sum + pow($i,$i);
		}
		echo "1<sup>1</sup> + 2<sup>2</sup> + 3<sup>3</sup> + .......... + ".$_myNum."<sup>".$_myNum."</sup> = ".$_sum;
	}
?>