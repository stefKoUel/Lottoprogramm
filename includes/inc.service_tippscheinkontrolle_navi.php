<?php
	$thisServer = 'http://' . $_SERVER['SERVER_NAME'];
?>
<div class="titleWrap">
	<h2><a href="<?php echo $thisServer; ?>/service/tippscheinkontrolle.php" title="Tippscheinkontrolle">Tippscheinkontrolle</a></h2>
</div>
<div class="boxContentWrap">
	<ul class="nav">
		<li><a href="<?php echo $thisServer; ?>/service/tippscheinkontrolle.php">Einzelauswertung</a></li>
		<li><a href="<?php echo $thisServer; ?>/service/tippscheinauswertung.php">Tippscheinauswertung</a></li>
		<li><a href="<?php echo $thisServer; ?>/service/tippscheinfuellen.php">Spielschein verwalten</a></li>
	</ul>
</div>