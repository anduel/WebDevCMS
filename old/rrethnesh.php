

<div id="permbajtja">

<?php 
$result = mysql_query("SELECT title, content FROM pages WHERE id=1");
$page = mysql_fetch_array( $result );
?>

	<h1><?php echo $page['title']; ?></h1>
	<p><?php echo $page['content'] ?></p>

 
</div>
