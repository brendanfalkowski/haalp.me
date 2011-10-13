<?php
$mycount = ($mycount) ? "($mycount)" : '';
?>
<ul>
<li><?php print $html->link('Home', '/') ?></li>
<li><?php print $html->link("My Haalps $mycount", '/mine') ?></li>
<li><?php print $html->link('All Haalps', '/all') ?></li>
<li><?php print $html->link('Login', '/login') ?></li>
</ul>