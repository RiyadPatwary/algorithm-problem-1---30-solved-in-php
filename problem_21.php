<html>
	<body>
		<center>
		<h3>problem-21 : divide two number by substruction...</h3>
		<form action="problem_21.php" method="post">
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
	$_myNum_1 = $_POST["input_1"]; //8
	$_myNum_2 = $_POST["input_2"]; //2
	$_largeNum;
	$_smallNum;
	$_counter = 0;//8
	$_quotient = 0;

	if ($_myNum_1 >= $_myNum_2) {
		$_largeNum = $_myNum_1;
		$_smallNum = $_myNum_2;
	}

	elseif ($_myNum_1 < $_myNum_2) {
		$_largeNum = $_myNum_2;
		$_smallNum = $_myNum_1;
	}

//	elseif ($_myNum_1 == $_myNum_2) {
//		# code...
//		$_largeNum = $_myNum_1;
//		$_smallNum = $_myNum_2;
//	}

	for ($i=$_largeNum; $_counter+$_smallNum <= $_largeNum ; $i--) {//0
		$_counter = $_counter + $_smallNum;
		$_quotient++;
	}
	echo "Quotient of ".$_largeNum." divided by ".$_smallNum." is ".$_quotient;
		
}
?>