<?php $thisServer = 'http://' . $_SERVER['SERVER_NAME'] ?>
<div class="titleWrap">
	<h2>
		<?php if (isset($_SESSION['email'])) { ?>
		Angemeldet
		<?php } else { ?>
		<a href="<?php echo $thisServer; ?>/members/login.php" title="Service">Anmelden / Registrieren</a>
		<?php } ?>
	</h2>
</div>
<div class="boxContentWrap">
	<ul class="nav">
		<li>
			<a href="<?php echo $thisServer; ?>/members/angaben.php">Meine Angaben</a>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/members/login.php">Meine Spielscheine</a>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/members/login.php">Meine Punkte</a>
		</li>
		<li>
			<a href="<?php echo $thisServer; ?>/members/email.php">E-Mail Service</a>
			<ul>
				<li> 
					<a class="abstand" href="<?php echo $thisServer; ?>/members/zahlenabo.php">ZahlenAbo</a>
				</li>
				<!-- <li>
					<a href="<?php echo $thisServer; ?>/members/gewinninfo.php">GewinnInformation</a>
				</li> -->
				<li>
					<a href="<?php echo $thisServer; ?>/members/jackpotalarm.php">JackpotAlarm</a>
				</li>
				<li>
					<a href="<?php echo $thisServer; ?>/members/quoteninfo.php">QuotenInfo</a>
				</li>
			</ul>
		</li>
		<?php if (isset($_SESSION['email'])) { ?>
		<li style="background:#fff">&nbsp;</li>
		<li>
			<form id="abmelden" name="abmelden" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
				<input type="hidden" name="logout" value="1" />
				<input type="submit" name="submit" value="Abmelden" />
			</form>
		</li>
		<?php } ?>
	</ul>
</div>