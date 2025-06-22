<?php
	$thisServer = 'http://' . $_SERVER['SERVER_NAME'];
?>
<div class="titleWrap">
	<h2><a href="<?php echo $thisServer; ?>/service/service.html" title="Service">Service</a></h2>
</div>
<div class="boxContentWrap">
	<ul class="nav">
		<li>
			<a href="<?php echo $thisServer; ?>/service/tools/tools.html">Tools</a>
			<?php 
			// Hallo, das hier gehtz nicht, weiss nicht warum
						
				if ($currentSubNavigation == 'Tools'){
					echo '<ul>';
					echo '<li><a href="'.$thisServer.'/service/tools/auswertprogramm.html">Auswertprogramm</a></li>';
					echo '<li><a href="'.$thisServer.'/service/tools/eigenezahlen.html">Eigene Zahlen</a></li>';
					echo '</ul>';
				};
			?>
			<!--hier der HTML Ersatz-->
			<ul>
				<li>
					<a href="<?php echo $thisServer; ?>/service/tools/auswertprogramm.html">Auswertprogramm</a>
				</li>
				<li>
					<a href="<?php echo $thisServer; ?>/service/tools/eigenezahlen.html">Eigene Zahlen</a>
				</li>
			</ul>
			

			
		</li>

		<li>
			<ul>
				<li>
					<a href="<?php echo $thisServer; ?>/service/gewinnabfrage.php">Gewinnabfrage</a>
				</li>
			
				<?php
					if ($currentSubNavigation == 'Tippscheinkontrolle'){
						echo '<ul>';
						echo '<li><a href="'.$thisServer.'/service/gewinnabfrage.php">Einzelauswertung</a></li>';
						echo '<li><a href="'.$thisServer.'/service/tippschein-gewinnabfrage.php">Tippscheinauswertung</a></li>';
						echo '<li><a href="'.$thisServer.'/service/tippscheinfuellen.php">Spielschein verwalten</a></li>';
						echo '</ul>';
					};
				?>
			</ul>
		
		</li>
		
		
		
		<li>
			<!--<a href="<?php echo $thisServer; ?>/service/email.php">E-Mail Service</a>-->
			
			<!--hier der HTML Ersatz für die Funktion einblenden ausblenden der Untermenüs-->
			<ul>
				<li>
					<a href="<?php echo $thisServer; ?>/members/zahlenabo.php">ZahlenAbo</a>
				</li>
				<li>
					<a href="<?php echo $thisServer; ?>/service/gewinninfo.php">Gewinninformation</a>
				</li>
				
				<li>
					<a href="<?php echo $thisServer; ?>/members/jackpotalarm.php">Jackpot Alarm</a>
				</li>
				<li>
					<a href="<?php echo $thisServer; ?>/service/quotenkontrolle.php">Quotenkontrolle</a>
				</li>
				
				
				

			</ul>
		</li>

		
	</ul>
</div>