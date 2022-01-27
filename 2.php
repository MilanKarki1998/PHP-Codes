<?php
   $Error='';
	if($_SERVER['REQUEST_METHOD']=="POST"){
		$Error=validate();
		if($Error){
			show_form($Error);
		}else{
			process_form();
		}
	}
	function validate(){
		$Error=array();
			if(empty($_POST['name'])){
				$Error[]="Name cannot be empty<br>";
			}elseif(!preg_match("/^[A-Za-z ]*$/",$_POST['name'])){
				$Error[]="Only whitespace and character allowed<br>";
			}
			if(empty($_POST['email'])){
				$Error[]="Email cannot be empty<br>";
			}elseif(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
				$Error[]="Invalid email format<br>";
			}
			if(empty($_POST['Gender'])){
				$Error[]="Please select gender<br>";
			}
			return $Error;
	}
	function show_form($Error=NULL){
		$Error_new=implode($Error);
		echo $Error_new."<br>";
	}
	function process_form(){
		echo "Name: ".$_POST['name'].'<br>';
		echo "Email: ".$_POST['email'].'<br>';
		if (isset($gender) && $gender=="Female"){
			echo "Gender: Female";
		}else{
			echo "Gender: Male";
		}
	}
?>
<html>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
User-Name:<input type="text" name="name"><br>
Email:<input type="text" name="email"><br>
Gender:<input type="radio" name="Gender">Male&nbsp <input type="radio" name="Gender">Female</br>
<input type="submit" value="ok">
</form>
</body>
</html>
			