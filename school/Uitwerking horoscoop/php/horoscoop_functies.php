<?php


/**
 * Bepaald je horoscoop
 *
 * @param  integer  $dag  De dag van de maand
 * @param  integer  $maand  De maand als cijger
 * @return Horoscoop
 */ 
function watIsMijnSterrenBeeld ($dag, $maand){

	switch ($maand) {
		case 1:
			// lange notatie
			if ($dag <= 20) { $sterrenbeeld = "Steenbok"; } else { $sterrenbeeld = "Waterman"; } 
			break;
		case 2:
			// korte notatie
			$sterrenbeeld = ($dag <= 2)? "Waterman" : "Vissen";
			break;
		case 3:
			$sterrenbeeld = ($dag <= 20)? "Vissen" : "Ram";
			break;
		case 4:
			$sterrenbeeld = ($dag <= 20)? "Ram" : "Stier";
			break;
		case 5:
			$sterrenbeeld = ($dag <= 20)? "Stier" : "Tweeling";
			break;
		case 6:
			$sterrenbeeld = ($dag <= 21)? "Tweeling" : "Kreeft"; 
			break;
		case 7:
			$sterrenbeeld = ($dag <= 23)? "Kreeft" : "Leeuw"; 
			break;
		case 8:
			$sterrenbeeld = ($dag <= 23)? "Leeuw" : "Maagd"; 
			break;
		case 9:
			$sterrenbeeld = ($dag <= 23)? "Maagd" : "Weegschaal"; 
			break;
		case 10:
			$sterrenbeeld = ($dag <= 23)? "Weegschaal" : "Schorpioen";  
			break;
		case 11:
			$sterrenbeeld = ($dag <= 21)? "Schorpioen" : "Boogschutter";  
			break;
		case 12:
			$sterrenbeeld = ($dag <= 21)? "Boogschutter" : "Steenbok";  
			break;
		}
		// geef antwoord terug
		return $sterrenbeeld;
	}

?>