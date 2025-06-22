<?php
$db = mysql_connect("localhost", "dielonbd", "123news456");
if (!$db) {die('Could not connect: ' . mysql_error());}else{mysql_select_db("usrdb_dielonbd_newsdb") or die(mysql_error());}

$sql = "SELECT DISTINCT year FROM phpnews_news ORDER BY year DESC";
$queryResult = mysql_query($sql);
$ArchiveRowArray = array();

mysql_close($db);
?>
	<ul class="nav">
		<li>
			<p>
				Zeitraum
			</p>
				</li>
					<?php 
						while($ArchiveRow = mysql_fetch_assoc($queryResult)){
							echo '<li><a href="news_archive.php?year=' . $ArchiveRow['year'] .'" title="">' . $ArchiveRow['year'] . '</a></li>';
						}
					?>
	</ul>
