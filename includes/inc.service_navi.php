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
                <li  <?php if (strpos($getcwd, "/lotto")) echo ' class="aktiv"' ?>>
                    <a href="<?php echo $thisServer; ?>/lotto/lotto.html" title="Link zum Lotto">Lotto</a>
                </li>
                <li  <?php if (strpos($getcwd, "/online")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/lotto/online/lotto6aus49.php" title="Link zum Online Lotto spielen">Lotto Spielen</a>
                </li>
                <li  <?php if (strpos($getcwd, "/news")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/news/news.php" title="Link zu den neuesten Lottonachrichten">Nachrichten</a>
                </li>
                <li  <?php if (strpos($getcwd, "/service")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/service/service.html" title="Link zur Service Seite f�r Lotto Tippscheinauswertung">Service</a>
                </li>
                <li  <?php if (strpos($getcwd, "/themen")) echo ' class="aktiv"' ?>>
                     <a href="<?php echo $thisServer; ?>/themen/themen.html" title="Link zur Service Seite f�r Lotto Themen">Themen</a>
                </li>
                
                <li  <?php if (strpos($getcwd, "/members")) echo ' class="aktiv"' ?>>
					<?php if (!isset($_SESSION['email'])) { ?>
                    <a href="<?php echo $thisServer; ?>/members/login.php" title="Link zum Login für Lotto Benutzer">Login</a>
					<?php } else { ?>
					<a href="<?php echo $thisServer; ?>/members/login.php" title="Link zur Verwaltung des Mitgliederbereichs">myLZDE</a>
					<?php } ?>
                </li>


            </ul>
            
            <!--<a id="partner-tipp24" href="http://tipp24.go2cloud.org/aff_c?offer_id=28&aff_id=1006&url_id=100&aff_sub=DLZDHPPARTNER" target="_blank" ></a>
	-->
        </div>
    </div>
