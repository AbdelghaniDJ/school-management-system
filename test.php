<?php
//$characts = 'abcdefghijklmnopqrstuvwxyz';
 $characts = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ'; $characts .= '1234567890'; $code_aleatoire = ''; for($i=0;$i < 10;$i++) //10 est le nombre de caractères 
	{ $code_aleatoire .= substr($characts,rand()%(strlen($characts)),1); }
    echo $code_aleatoire ;
?>    