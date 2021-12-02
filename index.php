<?php 
include_once 'core/init.php';
include_once 'includes/overall/header.php'; 
?>
<h1>Home</h1>
<p>Just a template.</p>

<?php
global $session_user_id;
if (has_access($session_user_id, 1) === true){
	echo 'Admin~!';
} else if (has_access($session_user_id, 2) === true){
	echo 'Moderator~!';
}
?>

<?php include_once 'includes/overall/footer.php'; ?>