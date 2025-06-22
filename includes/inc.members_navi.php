    <!-- Kopfbereich und Navigationen -->
    <div id="header-logo">
        <div id="lottokugeln">
        
        </div>
       
  
  		<?php
			//dateiname.php
			$thisServer = 'http://' . $_SERVER['SERVER_NAME'];
			$fileName = strrchr($_SERVER['SCRIPT_NAME'], '/');
			$getcwd = getcwd();
		?>

        <a id="logo" href="<?php echo $thisServer; ?>" title="dielottozahlende.net">					
        </a>
  

      	
      
        <div id="service-navi">
            <ul class="nav">
				<li <?php if ($fileName == "/lotto_app.php") echo ' class="aktiv"' ?>>
                    <a href="<?php echo $thisServer; ?>/app/lotto_app.php" title="Link zur Lotto App">Lotto-App</a>
                </li>
                <li  <?php if (strpos($getcwd, "statistiken") or $fileName == "/statistiken.html" ) echo ' class="aktiv"' ?>>
                    <a href="<?php echo $thisServer; ?>/lotto/6aus49/statistiken.html" title="Link zu Lotto Statistiken">Statistiken</a>
                </li>
                <li  <?php if (strpos($getcwd, "/online")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/lotto/online/lotto6aus49.php" title="Link zum Online Lotto spielen">Lotto Spielen</a>
                </li>
                <li  <?php if (strpos($getcwd, "/news")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/news/news.php" title="Link zu den neuesten Lottonachrichten">Nachrichten</a>
                </li>
                <li  <?php if (strpos($getcwd, "/service")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/service/service.html" title="Link zur Service Seite für Lotto Tippscheinauswertung">Service</a>
                </li>
                <li  <?php if (strpos($getcwd, "/themen")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/themen/themen.html" title="Link zur Service Seite für Lotto Themen">Themen</a>
                </li>
                <li  <?php if (strpos($getcwd, "/members")) echo ' class="aktiv"' ?>>
					<?php if (!isset($_SESSION['email'])) { ?>
                    <a href="<?php echo $thisServer; ?>/members/login.php" title="Link zum Login für Lotto Benutzer">Login</a>
					<?php } else { ?>
					<a href="<?php echo $thisServer; ?>/members/login.php" title="Link zur Verwaltung des Mitgliederbereichs">myLZDE</a>
					<?php } ?>
                </li>

                
            </ul>	
        </div>
    </div>
