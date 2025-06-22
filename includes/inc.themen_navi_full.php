<?php
	$thisServer = 'http://' . $_SERVER['SERVER_NAME'];
?>

<div class="titleWrap">
	<h2><a href="<?php echo $thisServer; ?>/themen/themen.html" title="Themen">Themen</a></h2>
</div>
<div class="boxContentWrap">
	<ul class="nav">
		<li>
			<a href="<?php echo $thisServer; ?>/themen/lottologie/tippverhalten.html">Lottologie</a>
			<?php 
				if ($currentSubNavigation == 'Lottologie'){
					include ("inc.themen_lottologie_navi.php");
				};
			?>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/themen/systemspiele/vollsysteme.html">Systemspiele</a>
			<?php 
				if ($currentSubNavigation == 'Systemspiele'){
					include ("inc.themen_systemspiele_navi.php");
				};
			?>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/themen/optimierung/halbierung.html">Gewinnchanchenoptimierung</a>
			<?php 
				if ($currentSubNavigation == 'Gewinnchanchenoptimierung'){
					include ("inc.themen_optimierung_navi.php");
				};
			?>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/themen/geschichte/deutschegeschichte.html">Geschichte des Lotto</a>
			<?php 
				if ($currentSubNavigation == 'Geschichte des Lotto'){
					include ("inc.themen_geschichte_navi.php");
				};
			?>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/themen/vonabisz/start.php" title="">von A bis Z</a>
			<?php 
				if ($currentSubNavigation == 'von A bis Z'){
					include ("inc.themen_abisz_navi.php");
				};
			?>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/themen/fakten/gewinnwahrscheinlichkeit.html" title="">Fakten und Tatsachen</a>
			<?php 
				if ($currentSubNavigation == 'Fakten und Tatsachen'){
					include ("inc.themen_fakten_navi.php");
				};
			?>
		</li>
	</ul>
</div>