<?php
	session_start(); 
?>
<html> 
	<body> 
		<?php 
			$_SESSION["name"] = "Milan"; 
			$_SESSION["College"] = "Nagarjuna College of Information Technology"; 
			echo "Session variables are set.";
			echo "<br>Name is ".$_SESSION["name"];
			echo "<br>College is ".$_SESSION["College"];
		?>
	</body> 
</html>
