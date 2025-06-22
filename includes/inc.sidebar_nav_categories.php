<?php
$db = mysql_connect("localhost", "dielonbd", "123news456");
if (!$db) {die('Could not connect: ' . mysql_error());}else{mysql_select_db("usrdb_dielonbd_newsdb") or die(mysql_error());}

$catIds ="SELECT * FROM phpnews_categories ORDER BY catname";
$resultsCatIds = mysql_query($catIds);
$categoryArray = array();
?>
<ul class="nav">
	<li>
		<p>
        	Kategorien
        </p>
	</li>
	<?php
			while($catIdsRow = mysql_fetch_assoc($resultsCatIds)){
				echo '<li><a href="news_categories.php?cat='. $catIdsRow['id'] . '" title="">' . $catIdsRow['catname'] . '<span class="navInfo"></span></a></li>';
			}											
	?>
</ul>
<?php mysql_close($db); ?>