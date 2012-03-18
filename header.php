<?php require 'inc/functions.php'; ?>

<!doctype html>
<html>
<head>

	<meta charset="utf-8"/>
	<meta content="tekst" name="description" />
	<meta content="fjale kyce" name="keywords" />
	
	<title><?php site_title(' &rarr; '); ?></title>
	
	<link type="text/css" href="<?php echo BASEURL; ?>/style.css" rel="stylesheet" media="screen" />

</head>
<body>

<div id="trupi" class="eperbashket">

<div id="logo">
	<img src="<?php echo BASEURL; ?>/img/logo.png"  alt="Webdevcourse" title="Webdevcourse">
	<p> Kursi i pare i ndertimit te faqeve te internetit </p>
	
	
	
	</div>	<!-- divi qe hapet i fundit mbyllet i pari-->
	<form id="leviz">
	<input id="fusha" name="kerkim" type="text"> <!--kerkon brenda ne faqe (search) -->
	<input id="button" type="submit" value="kerko" >	
	</form>
	
<!-- alt, sherben per te nxjere nqs mungon figura, title sherben per te nxjere shkrimin kur con mousin siper image -->


<ul id="menu"> 
	<?php listo_faqet(); ?>
</ul>

<div class="vendi">
	<?php vendndodhja('&rarr;'); ?>
</div>

