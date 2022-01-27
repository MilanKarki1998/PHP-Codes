<?php  
	$cookie_name="user";
	$cookie_value="Milan Karki";
	setcookie($cookie_name, ‘ ‘); 
?> 
<html> 
	<body>
		<?php
				echo "Cookie named '".$cookie_name."'is deleted!";
		?>
	</body>
</html>
