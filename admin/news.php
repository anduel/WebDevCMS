
<div id="permbajtja">

<?php if( !isset( $_GET['action'] ) ) { ?>
	
<a href="http://localhost/banago/admin/?faqja=news&action=add&type=news">Shto Lajm</a>

<h2>Faqet ne Databaze</h2>

<?php 
	$result = mysql_query("SELECT ID, title, link FROM pages WHERE type='news'");

	if( !$result ) {
   	 die('Invalid query: ' . mysql_error());
	}
	
	while( $page = mysql_fetch_array( $result ) ) : ?>

		<div class="db-page">
			<?php echo $page['title'] ?>
			<span>
				<a href="http://localhost/banago/?news=<?php echo $page['link']; ?>">Shiko</a>	|
				<a href="http://localhost/banago/admin/?faqja=news&action=update&page=<?php echo $page['link']; ?>&type=news">Edito</a> |
				<a href="http://localhost/banago/admin/?faqja=news&action=delete&page=<?php echo $page['link']; ?>">Fshi</a>
			</span>				
		</div>

	<?php endwhile;
	
	} elseif( $_GET['action'] == 'add' || $_GET['action'] == 'update' ) {
		
		include 'inc/form-page.php';

	} elseif( $_GET['action'] == 'delete' ) {

		$link = $_GET['page'];
		$result = mysql_query("DELETE FROM pages WHERE link='$link'");
		if( !$result ) {
			echo mysql_error();
		}
		header('Location: http://localhost/banago/admin/?faqja=news');
	} 
	 ?>

</div>