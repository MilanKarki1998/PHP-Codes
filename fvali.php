<?php
   $name=$roll=$salary='';
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$name=$_POST['name'];
		$roll=$_POST['roll'];
		$salary=$_POST['salary'];
			if(empty($name))
			{
				echo "Name cannot be empty<br>";
			}elseif(!preg_match("/^[A-Za-z ]*$/",$name)){
				echo "Only whitespace and character allowed<br>";
			}
			if(empty($roll))
			{
				echo "Roll cannot be empty<br>";
			}
			elseif(!preg_match("/^[0-9]*$/",$roll)){ 		//filter_input(INPUT_POST,'roll',FILTER_VALIDATE_INT)
				echo "Only number allowed<br>";
			}
			if(empty($salary))
			{
				echo "Salary cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'salary',FILTER_VALIDATE_FLOAT)){
				echo "Only decimal allowed<br>";
			}
	}
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<?php echo $name; ?><br>
			<label>Name:</label><input type="text" name="name"> <br>
			<?php echo $roll; ?><br>
			<label>Roll:</label><input type="text" name="roll"> <br>
			<?php echo $salary; ?><br>
			<label>Salary:</label><input type="text" name="salary"> <br>
			<input type="submit" value="OK">
		</form>
	</body>
</html>