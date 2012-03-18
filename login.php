<?php   if( isset( $_POST['submit'] ) ) {

	if( isset( $_COOKIE['hyr'] ) ) {

		$_SESSION['hyr'] = true;
		header('Location:http://localhost/banago/admin/');
		exit;

	}

	$user = $_POST['username'];
	$pass = $_POST['password'];
	$result = mysql_query("SELECT id, user, password FROM users  WHERE user='$user' AND password='$pass'");
	
	if( !$result ) {
		die('Error: ' . mysql_error() );	
	}
	
	$login = mysql_fetch_array( $result );
	
	if( !is_array( $login ) ) {
	
		$error = 'Incorrect Username or Password';

	} else {
		$_SESSION['hyr'] = true;
		$_SESSION['user_id'] = $login['id'];
		
		if( $_POST['remember'] == 'on' ) {
			setcookie('hyr', $_POST['username'] .'|'. $_POST['password'], time() + ( 60 * 60 ) );
		}
		header('Location:http://localhost/banago/admin/');
	}
	 
} ?> 


<div id="permbajtja">

	<?php 
		if( isset( $error ) ) { 
			echo '<div class="error">' . $error .'</div>'; 
		}
		if( isset( $_SESSION['msg'] ) ) {
			echo $_SESSION['msg'];		
		}
		
	 ?>

	<pre><?php //print_r( $COOKIE ) ?></pre>

	<form id="login" method="post" action=""> 
		<label>Username</label> 
		<input name="username" type="text" value="" ><br>
		<label>Password</label> 
		<input name="password" type="password" value="" ><br><br>
		
		<label for="remember">
			<input id="remember" type="checkbox" name="remember" />
			Remember me
		</label>
		
		<input type="submit" name="submit" value="Hyr"> 
	</form> 
 
</div>

