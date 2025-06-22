 
<ul class="nav">
    	<li <?php if ($fileName == "/zahlen.html"  or strpos($fileName, "keno")) echo ' class="aktiv"' ?>>
        	<a href="<?php echo $thisServer; ?>/lotto/keno/zahlen.html" title="Zahlen Keno">Zahlen</a>
        </li>
       	<li <?php if ($fileName == "quoten") echo ' class="aktiv"' ?>>
			<a href="<?php echo $thisServer; ?>/lotto/keno/quoten.html" title="Quoten Keno">Quoten</a>
		</li>
		<!--<li <?php if ($fileName == "jackpot") echo ' class="aktiv"' ?>>
			<a href="http://www.dielottozahlende.net/lotto/spiel77/jackpot.html" title="Jackpot Spiel77">Jackpot</a>
		</li>
		-->       	
		<li <?php if ($fileName == "statistiken") echo ' class="aktiv"' ?>>
       		<a href="<?php echo $thisServer; ?>/lotto/keno/statistiken.html" title="Keno Statistiken">Statistiken</a>
       	</li>
       	<li <?php if ($fileName == "voraussagen") echo ' class="aktiv"' ?>>
       		<a href="<?php echo $thisServer; ?>/lotto/keno/voraussagen.html" title="Keno Voraussagen">Voraussagen</a>
       	</li>
       	<li <?php if ($fileName == "regeln") echo ' class="aktiv"' ?>>
       		<a href="<?php echo $thisServer; ?>/lotto/keno/regeln.html" title="Regeln Keno">Regeln</a>
       	</li>
   

</ul>



 
	