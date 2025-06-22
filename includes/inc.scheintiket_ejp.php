<?php
	$xml = simplexml_load_file('https://www.tipp24.com/webshop/infoservice/drawinfo/ejp/jackpot/');
	$jackpot = $xml->GKfull;

	if($jackpot > 0){
		echo '<a href="http://tipp24.go2cloud.org/aff_c?offer_id=28&aff_id=1006&url_id=114" rel="nofollow"  target="_blank">
	<img alt="Jackpot für Online Lotto spielen" src="http://www.dielottozahlende.net/img/banner/teaser_em/schein'.$jackpot.'.jpg" width="626" height="135"></a>';
	}
?>


