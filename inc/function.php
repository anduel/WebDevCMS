<?php 

include  '/config2.php';


/** 
* Listo Faqet
*
* Ky funksion liston faqet pasi i proceson nga array $faqet.
*/
function listo_faqet( $echo = true ) {
	
	//Global ben te aksesuseshme array-n $faqet brenda funksionit 
	global $faqet;

	$linket = '';	
	
	foreach ($faqet as $link=>$faqe){

		$linket .= '<li><a href="?page='.$link.'">'.$faqe.'</a></li>';
		
		}
	if( $echo == true ) {
		echo $linket;
	} else {
		return $linket;			
	}
}

/**
 * Vendndodhja
 *
 * Ky funksion tregon vendndodhjen në faqe
 */

function vendndodhja( $nd = '/' ) {

	global $faqet;
	$ndarje = ' '. $nd .' ';

	$faqja = $_GET['faqja'];

	switch( $faqja ) {

		case 'hyrje':
			$vendi = 'Hyrje';
		break;
		
		case 'rrethnesh':
			$vendi = 'Rreth Nesh';
		break;
		
		case 'produkte':
			$vendi = 'Produkte';
		break;
		
		case 'sherbime':
			$vendi = 'Sherbime';
		break;
	
		case 'kontakte':
			$vendi = 'Kontakte';
		break;
		
		case 'admin':
			$vendi = 'Paneli Administrimit';
		break;
		
		case 'login':
			$vendi = 'Hyr në Panel';
		break;
		
		default:
			$vendi = 'Nuk Gjendet';
		break;
		
	}	

	if( $faqja == 'hyrje' ) {
		echo 'Hyrje';
	} else {
		echo '<a href="http://localhost/banago/?faqja=hyrje">Hyrje</a>' . $ndarje . $vendi;
	}

}












