<?php
   $Error='';
	if($_SERVER['REQUEST_METHOD']=="POST")
	{
		$Error=validate();
		if($Error){
			show_form($Error);
		}else{
			process_form();
		}
	}
	function  validate(){
		$H=$_POST['H'];
		$P=$_POST['P'];
		$B=$_POST['B'];
		$Error=array();
			if(empty($H))
			{
				$Error[]="Hypotenuse cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'H',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Hypotenuse Format<br>";
			}
			if(empty($P))
			{
				$Error[]="Perpendicular cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'P',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Perpendicular Format<br>";
			}
			if(empty($B))
			{
				$Error[]="Base cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'B',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Base Format<br>";
			}
			return $Error;
	}
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo $Error_new."<br>";
	}
	function process_form(){
		$H=($_POST['H']*$_POST['H']);
		$P=($_POST['P']*$_POST['P']+$_POST['B']*$_POST['B']);
		if($H==$P){
			echo 'Right angled triangle';
		}
		else{
			echo 'Not Right angled triangle';
		}
	}
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<label>Hypotenuse:</label><input type="text" name="H"> <br>
			<label>Perpendicular:</label><input type="text" name="P"> <br>
			<label>Base:</label><input type="text" name="B"><br>
			<input type="submit" value="OK">
		</form>
	</body>
</html>