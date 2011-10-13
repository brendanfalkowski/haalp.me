<?php print $this->element('menu') ?>

<?php if ($hash): ?>

<h2>You got haalp.</h2>

<p>Holy shit, you do need haalp! It's on the way. Below is your private URL you can use to share. The private URL is just for you to use to check back in on your haalp request.</p>
<br />

<div>
Public URL: 
<?php print $html->link('http://haalp.me/' . $question['Question']['id'], '/questions/view/' . $question['Question']['id']) ?>
</div><br />

<div>
Private URL:
<?php print $html->link('http://haalp.me/' . $question['Question']['id'] .'/' . $question['Question']['hash'], '/questions/view/' . $question['Question']['id'] . '/' . $question['Question']['hash']) ?>
</div><br />

<?php endif ?>

<h2>My Haalp: <?php print $question['Question']['question'] ?></h2>

<h2>Add Comment</h2>

<?php print $form->create('Comment', array('action' => 'add')) ?>
<?php print $form->hidden('author', array('value' => $author)) ?>
<?php print $form->hidden('question_id', array('value' => $question['Question']['id'])) ?>
<?php print $form->input('username', array('autofocus' => 'autofocus')) ?>
<?php print $form->input('comment') ?>
<?php print $form->end('Comment') ?>

<?php if ($question['Comment']): ?>

<h2>Comments</h2>

<?php foreach ($question['Comment'] as $c): ?>
	<div style="border: 1px solid black">
		<?php if ($c['username']): ?>
			<b>Username:</b><?php print $c['username']?><br />
		<?php endif ?>
		<b>Comment:</b>
		<?php print $c['comment']?>
		<b>Votes</b><?php print $c['votes']?>

		<?php print $html->link('Vote Up', "/comments/vote/{$c['id']}/up") ?>
		<?php print $html->link('Vote Down', "/comments/vote/{$c['id']}/down") ?>
	</div>
<?php endforeach?>

<?php endif ?>

<hr />

<?php if ($questions): ?>

<h2>Other Haalps</h2>

<?php print $this->element('questions') ?>

<?php endif ?>