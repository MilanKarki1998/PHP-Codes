<?php
//WAP to read the string form from and display the first and last character of the string
   $Error='';
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$String=$_POST['string'];
		if(empty($String)){
			echo "String cannot be empty<br>";
		}elseif(!preg_match("/^[A-Za-z ]*$/",$String)){
			echo "Only whitespace and character allowed<br>";
		}
		else{
			echo "The first character in String is $String[0] and last character in Sting is ".$String[strlen($String)-1];
		}
	}	
?>
<html>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
String:<input type="text" name="string"><br>
<input type="submit" value="ok">
</form>
</body>
</html>
			