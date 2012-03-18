<?php include'header.php';  ?>

<div id="permbajtja">

<?php 
	if( isset( $_GET['page'] ) && $_GET['page'] == 'login' ) {
		include 'login.php';
	} else {
		
		//Call page for DB.
		if( isset( $_GET['news'] ) ) {
			$link = $_GET['news'];
		} elseif( isset( $_GET['page'] ) ) {
			$link = $_GET['page'];
		} else {
			 $link = 'home-page';
		}
		
		$result = mysql_query("SELECT title, content FROM pages WHERE link='$link'");
		$page = mysql_fetch_array( $result );
		
		if( $page ) { ?>
		
			<h1><?php echo $page['title']; ?></h1>
			<p><?php echo nl2br( $page['content'] ); ?></p>

<?php } else {
			
			echo '<h1>Faqja nuk gjendet</h1>';
			
		}	

} ?>

</div>
<?php include 'side.php';?>
<?php include 'footer.php'; ?>


