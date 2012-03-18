<?php 
include 'config2.php';

/**
 * site_title => funksion per prodhim dinamik te titullit te faqes 
 */
function site_title( $nd = ' - ' ) {

	global $db;	
	
	if( isset( $_GET['page'] ) ) {
		$link = $_GET['page'];
	} else {
		$link = 'home-page';	
	}	

	$result = mysql_query("SELECT title FROM pages WHERE link='$link'");
	if( !$result ) {
		$title = 'Not Found';
	} else {
		$page = mysql_fetch_array( $result );
		$title = $page['title'];	
	}

	echo SITENAME . $nd . $title;	
	
}


/** 
* Listo Faqet
*
*Ky funksion liston faqet pasi i proceson nga array $faqet.
*/
function listo_faqet( $echo = true ) {
	
	//Global ben te aksesuseshme array-n $faqet brenda funksionit 
	global $db;

	$result = mysql_query("SELECT title, link, menu_order FROM pages WHERE type='page' ORDER BY menu_order ASC");
	if( !$result ) {
		die( mysql_error() );
	}
	$linket = '';
	while( $links = mysql_fetch_array( $result ) ) {
		
		$linket .= '<li><a href="'. BASEURL .'/?page='.$links['link'].'">'.$links['title'].'</a></li>';
	
	}	
	if( $echo == true ){
		echo $linket;
	 } else {
	 	return $linket;
	 }		
}

/**
 *Vendodhja
 *
 *Ky funksion tregon vendndodhjen ne faqe
 */
 
 function vendndodhja( $nd = ' / ' ){
 	
 	global $faqet;
 	
 	$ndarje = ' ' .$nd .' ';
 	
 	$page =  isset( $_GET['faqja'] ) ? $_GET['faqja'] : 'home';
 	
 	switch($page) {
 		
 		case 'home' :
 			$vendi = 'Home';
 		break;
 		
 		case 'contact' :
 			$vendi = 'Contact';
 		break;
 		
 		case 'about':
 			$vendi = 'About';
 		break;
 
 		case 'service':
 			$vendi = 'Service';
 		break;
 		
 		case 'product':
 			$vendi = 'Product';
 		break;
 		
 		case 'login':	
			$vendi = 'Hyr ne Panel';
		break;
 		
 		case 'admin': 	
 			$vendi = 'Paneli i Administrimit';
 		break;
 		
 		default:
 			$vendi = 'Nuk Gjendet';
 		break;
 		
 		}
 		
 		if( $page == 'home' ){
 			
 			echo 'Home';
 			
 		} else {
 		
 			echo '<a href= "http://localhost/banago/">Home</a>' . $ndarje . $vendi ;
		} 
 	}

/**
 * is_logged_in => Kontrollon nese perdoruesi eshte i loguar
 */
function is_logged_in() {
	global $db;	

	if( isset( $_SESSION['hyr'] ) ) {
		return true;
	}
	elseif( isset( $_COOKIE['hyr'] ) ) {

		list($username, $password) = explode('|', $_COOKIE['hyr'] );
		
		$result = mysql_query("SELECT id, user, password FROM users WHERE user='$username' AND password='$password'");
		if( $result ) {
			$error = 'Error: ' . mysql_error();
			$_SESSION['test'] = $error;
		}
		
		$row = mysql_num_rows( $result );
		
		if( $row != 0 ) {

			$login = mysql_fetch_array( $result );
			
			$_SESSION['hyr'] = true;
			$_SESSION['user_id'] = $login['id'];			
						
			return true;

		} else {

			return false;
		}
	}
}






