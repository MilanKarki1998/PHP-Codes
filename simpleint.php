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
		$P=$_POST['P'];
		$T=$_POST['T'];
		$R=$_POST['R'];
		$Error=array();
			if(empty($P))
			{
				$Error[]="Principal cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'P',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Principal Format<br>";
			}
			if(empty($T))
			{
				$Error[]="Time cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'T',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Time Format<br>";
			}
			if(empty($R))
			{
				$Error[]="Rate cannot be empty<br>";
			}
			elseif(!filter_input(INPUT_POST,'R',FILTER_VALIDATE_FLOAT)){
				$Error[]="Invalid Rate Format<br>";
			}
			return $Error;
	}
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo $Error_new."<br>";
	}
	function process_form(){
		$SI=($_POST['P']*$_POST['T']*$_POST['R'])/100;
		echo 'The simple interst interest is '.$SI;
	}
?>
<html>
	<head>
		<title>Form</title>
	</head>
	<body>
		<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
			<label>Principal:</label><input type="text" name="P"> <br>
			<label>Time:</label><input type="text" name="T"> <br>
			<label>Rate:</label><input type="text" name="R"><br>
			<input type="submit" value="OK">
		</form>
	</body>
</html>