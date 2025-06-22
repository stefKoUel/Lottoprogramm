		<?php
			
			//dateiname.php
			$thisServer = 'http://' . $_SERVER['SERVER_NAME'];
			$fileName = strrchr($_SERVER['SCRIPT_NAME'], '/');
			$getcwd = getcwd();
		?>


    <ul class="nav">
    	
        <li  <?php if ($fileName == "/6aus49.html"  or strpos($filenname, "lottozahlen")) echo ' class="aktiv"' ?>>
        	<a href="<?php echo $thisServer; ?>/lotto/6aus49/6aus49.html" title="Lottozahlen 6aus49">Zahlen</a>
        </li>
        
         <li  <?php if (strpos($filenname, "lottoquoten")) echo ' class="aktiv"' ?>>
        	<a href="<?php echo $thisServer; ?>/lotto/6aus49/lottoquoten.php" title="Lottoquoten 6aus49">Quoten</a>
        </li>
        
         <li  <?php if (strpos($filenname, "jackpot")) echo ' class="aktiv"' ?>>
        	<a href="<?php echo $thisServer; ?>/lotto/6aus49/jackpot.php" title="Jackpot 6aus49">Jackpot</a>
        </li>
        <li  <?php if (strpos($getcwd, "statistiken") or $fileName == "/statistiken.html" ) echo ' class="aktiv"' ?>>
         	<a href="<?php echo $thisServer; ?>/lotto/6aus49/statistiken.html" title="Statistiken 6aus49">Statistiken</a>
        </li>
        <li  <?php if (strpos($filenname, "voraussagen")) echo ' class="aktiv"' ?>>
        	<a href="<?php echo $thisServer; ?>/lotto/6aus49/stat_voraussagen.html" title="Voraussagen 6aus49">Voraussagen</a>
        </li>
        <li  <?php if (strpos($filenname, "regeln")) echo ' class="aktiv"' ?>>
        	<a href="<?php echo $thisServer; ?>/lotto/6aus49/regeln.html" title="Regeln 6aus49">Regeln</a>
        </li>
        
   </ul>
