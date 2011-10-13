<?php foreach ($questions as $q): ?>
<div style="border: 1px solid black">
<div><?php print $q['Question']['question']?></div>
<div><?php print $q['Category']['name'] ?></div>
<?php print $html->link('View', '/questions/view/' . $q['Question']['id']) ?>
</div>
<?php endforeach?>