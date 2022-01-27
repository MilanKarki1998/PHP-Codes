<?php 
	$cookie_name="user";
	$cookie_value="Milan Karki";
	setcookie($cookie_name,$cookie_value, time() + 3600, '/'); 
?> 
<html>
	<body> 
		<?php 
			if(count($_COOKIE) > 0) { 
				echo "Cookies are enabled."; 
			} else { 
			echo "Cookies are disabled."; 
			} 
		?> 
	</body> 
</html>
