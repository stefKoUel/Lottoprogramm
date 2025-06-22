<?php

function JP_Number($product = 'lotto',$gk = 'GKfull'){

	switch ($product) {
	
		case 'lotto' :
			$xml = simplexml_load_file('https://www.tipp24.com/webshop/infoservice/drawinfo/lotto/jackpot/');
			break;
			
		case 'em' :
			$xml = simplexml_load_file('https://www.tipp24.com/webshop/infoservice/drawinfo/eml/jackpot/');
			break;
			
		case 'ej' :
			$xml = simplexml_load_file('https://www.tipp24.com/webshop/infoservice/drawinfo/ejp/jackpot/');
			break;
	
	}
	
	
	$jackpot = $xml->$gk;
	return $jackpot;

} 

$jp_lotto = JP_number('lotto');
$jp_lottogk1 = JP_number('lotto','GK1');
$jp_lottogk2 = JP_number('lotto','GK2');
$jp_lottos77 = JP_number('lotto','S77');

?>


<div class="titleWrap h3">
    <h3>Jackpotinformation</h3>
</div>
<div class="boxContentWrap">
    
    <ul class="colum big blue">
        <li>
            <strong><?php echo $nz_lotto ?></strong>
        </li>
        
        
    </ul>
    
    <ul class="colum big blue">
        <li>
            <strong>6 aus 49</strong>
        </li>
        <li>
            <span class="kategorie">Jackpot - Summe in GK1</span>
            <span class="gewinn">ca.  <?php echo $jp_lottogk1 ?> Mio. EUR</span>
        </li>
        <li>
            <span class="kategorie">Jackpot - Summe in GK2</span>
            <span class="gewinn">ca. <?php echo $jp_lottogk2 ?> Mio. EUR</span>
        </li>
        
        
    </ul>
    <ul class="colum big blue">
        <li>
            <strong>Spiel77</strong>
        </li>
        <li>
            <span class="kategorie">Jackpot - Summe in GK1</span>
            <span class="gewinn">ca. <?php echo $jp_lottos77 ?> Mio. EUR</span>
        </li>
        
        
    </ul>
    
</div>
												