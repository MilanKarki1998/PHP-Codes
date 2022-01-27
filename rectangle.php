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
		$L=$_POST['L'];
		$B=$_POST['B'];
		$H=$_POST['H'];
		$Error=array();
			if(empty($L))
			{
				$Error[]="Length cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'L',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Length Format<br>";
			}
			if(empty($B))
			{
				$Error[]="Breadth cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'B',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Breadth Format<br>";
			}
			if(empty($H))
			{
				$Error[]="Width cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'H',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Width Format<br>";
			}
			return $Error;
	}
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo $Error_new."<br>";
	}
	function process_form(){
		$V=$_POST['L']*$_POST['B']*$_POST['H'];
		echo  "Volume of rectangle prism is $V";
	}
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<label>Length:</label><input type="text" name="L"> <br>
			<label>Breadth:</label><input type="text" name="B"> <br>
			<label>Height:</label><input type="text" name="H"><br>
			<input type="submit" value="OK">
		</form>
	</body>
</html>