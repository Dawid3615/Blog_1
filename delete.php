<?php 
include_once 'core/init.php';
protect_page();
include_once 'includes/overall/header.php'; 

if (empty($_POST) === false){
	$required_fields = array('username', 'password');
	foreach($_POST as $key=>$value){
		if (empty($value) && in_array($key, $required_fields) === true){
			$errors[] = 'Fields marked with an asterisk are required';
			break 1;
			}
		}
		
	if(empty($errors) === true){
		if (empty($username) === true || empty($password) === true){
		$errors[] = 'You need to enter a username and password';
		}
		if(user_exists($_POST['username']) === true){
			$errors[] = 'Sorry, the username \'' . $_POST['username'] . '\' is incorrect';
		}
		if (user_exists($_POST['password']) === true){
			$errors[] = 'Your password is incorrect';
		}
		
	}
}


?>

<h1>Users delete</h1>
<form action="" method="post">
	<ul>
		<li>
			Username*: <br>
			<input type="text" name="username">
		</li>
		<li>
			Password*: <br>
			<input type="password" name="password">
		</li>
		<li>
			<input type="submit" value="Delete">
		</li>
	</ul>		
</form>		

<?php 
include_once 'includes/overall/footer.php'; 
?>