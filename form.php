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
			if(isset($_POST['Hobbiess'])){
			
			}else{
				$Error[]="Choose one of the hobbies<br>";
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
		echo "Hobbiess: ";
		foreach($_POST['Hobbiess'] as $selected){
			echo $selected." ";
		}
		if (isset($gender) && $gender=="Female"){
			echo "<br>Gender: Female";
		}else{
			echo "<br>Gender: Male";
		}
	}
?>
<html>
<body>
<form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
Name:<input type="text" name="name"><br>
Hobbiess:<input type="checkbox" name="Hobbiess[]" value="Reading">Reading&nbsp <input type="checkbox" name="Hobbiess[]" value="Writing">Writing&nbsp <input type="checkbox" name="Hobbiess[]" value="Swimming">Swimming&nbsp <input type="checkbox" name="Hobbiess[]" value="Programming">Programming&nbsp <input type="checkbox" value="Playing" name="Hobbiess[]">Playing<br>
Gender:<input type="radio" name="Gender">Male&nbsp <input type="radio" name="Gender">Female</br>
<input type="submit" value="ok">
</form>
</body>
</html>
			