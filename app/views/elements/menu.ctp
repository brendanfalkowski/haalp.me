<?php
$mycount = ($mycount) ? "($mycount)" : '';
?>
<nav>	
	<ul class="clearfix">
		<li class="home"><?php print $html->link('Home', '/') ?></li>
		<li class="allhaalps"><?php print $html->link('All Haalps', '/all') ?></li>
		<li class="myhaalps"><?php print $html->link("My Haalps $mycount", '/mine') ?></li>
	</ul>
</nav>