<aside>
	<?php 
	if (logged_in() === true){
		include_once 'includes/widgets/loggedin.php';
	} else{
		include_once 'includes/widgets/login.php'; 
	}
	include_once 'includes/widgets/user_count.php';
	?>
</aside>