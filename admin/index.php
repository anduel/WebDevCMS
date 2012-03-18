<?php include '../header.php';  ?>

<?php 
if( isset( $_GET['dil'] ) ) {
	unset( $_SESSION['hyr'] ); // Unset fshin variablen
	setcookie('hyr', '', time() - 360 ); // Fshijme Cookie-n
	$_SESSION['msg'] = 'Ju dolet me suksese nga faqja';
	header('Location:http://localhost/banago/?page=login');
	exit;	
}

if( !is_logged_in() ) {
	header('Location: http://localhost/banago/?page=login');
	exit;
} 
?>

<div id="permbajtja">

	<?php 
	if( isset( $_GET['faqja'] ) ) {

		include $_GET['faqja'] . '.php';
		
	} else { ?>

	<div class="logout"><a href="http://localhost/banago/admin/?dil=1">Dil nga faqja</a></div>	

	<?php
	$user_id = $_SESSION['user_id']; 
	$result = mysql_query("SELECT name FROM users WHERE id=$user_id");
	$user = mysql_fetch_array( $result ); 	
	$username = $user['name']; ?>
	
	<h2>Miresevejn <?php echo $username; ?>!</h2>
	<p>Jeni logur me suksese.</p>

	<a href="http://localhost/banago/admin/?faqja=faqet">Faqet</a> |
	<a href="http://localhost/banago/admin/?faqja=news">Lajme</a> |
	<a href="http://localhost/banago/admin/?faqja=profile">Profili</a>
	
	<?php } ?>

</div><!-- #permbatja -->
<?php include '../side.php'; ?>

<?php include '../footer.php'; ?>
