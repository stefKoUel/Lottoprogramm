     
	<?php
		//dateiname.php
		$fileName = strrchr($_SERVER['SCRIPT_NAME'], '/');
		$getcwd = getcwd();
	?>


     
     <ul class="nav">
        <li <?php if ($fileName == "/lotto6aus49.php") echo ' class="aktiv"' ?> >
            <a href="lotto6aus49.php" title="Online Lotto Spielen">Lotto</a>
        </li>
        <li <?php if ($fileName == "/eurojackpot-spielen.php") echo ' class="aktiv"' ?>  >
            <a href="eurojackpot-spielen.php" title="Online Eurojackpot Spielen">Eurojackpot</a>
        </li>
        <li  <?php if ($fileName == "/euromillions.php") echo ' class="aktiv"' ?> >
            <a href="euromillions.php" title="Online Eurommilions Spielen">Euromillions</a>
        </li>
        <li  <?php if ($fileName == "/onlinelotto.php") echo ' class="aktiv"' ?> >
            <a href="onlinelotto.php" title="Wisseneswertes über Online Lotto">Wissenswertes</a>
        </li>
      	<li  <?php if (strpos($fileName, "erfahrungen")) echo ' class="aktiv"' ?>>
      		<a href="erfahrungen.php" title="Erfahrungsberichte über Online Lotto">Erfahrungen</a>
        </li>

		
    </ul>
