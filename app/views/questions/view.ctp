<style>
a { color: blue; }
</style>
<section id="question-top">
	
	<div class="subcontainer">
		
		<header>
			<h1><?php print $html->link('haalp...', '/') ?></h1>
			<?php print $this->element('menu') ?>
		</header>

		<?php if ($hash): ?>

		<h2>You got haalp.</h2>

		<p class="holyshit">Holy shit, you do need haalp! It's on the way. Below is your private URL you can use to share. The private URL is just for you to use to check back in on your haalp request.</p>
		<br />

		<div>
		Public URL: 
		<?php print $html->link('http://haalp.me/' . $question['Question']['id'], '/questions/view/' . $question['Question']['id']) ?>
		</div>

		<div>
		Private URL:
		<?php print $html->link('http://haalp.me/' . $question['Question']['id'] .'/' . $question['Question']['hash'], '/questions/view/' . $question['Question']['id'] . '/' . $question['Question']['hash']) ?>
		</div>

		<?php endif ?>
		
		<h2>I need haalp.</h2>

		<p><?php print $question['Question']['question'] ?></p>

	</div>
	
</section>

<section id="comments">
	
	<div class="subcontainer">
		
		<?php if (strtotime($question['Question']['expiry']) > time()): ?>
		
		<h2>Leave a comment</h2>

		<?php print $form->create('Comment', array('action' => 'add')) ?>
		<?php print $form->hidden('author', array('value' => $author)) ?>
		<?php print $form->hidden('question_id', array('value' => $question['Question']['id'])) ?>
		<?php //print $form->input('username', array('autofocus' => 'autofocus')) ?>
		<?php print $form->input('comment', array('label' => false)) ?>
		<?php print $form->end('Post Comment') ?>
		
		<?php endif ?>

		<?php if ($question['Comment']): ?>

		<?php foreach ($question['Comment'] as $c): ?>
		<?php $class = ($c['author'] == $author) ? 'isauthor' : '' ?>
			<article class="<?php print $class ?>">
				<?php if ($c['username']): ?>
					<b>Username:</b><?php print $c['username']?><br />
				<?php endif ?>
				
				<p class="date"><?php print date('F d, Y H:i', strtotime($c['created'])) ?></p>
				
				<p><?php print $c['comment']?></p>
				
				<p class="votes"><span><?php print $c['votes']?> Votes</span> Is this Haalpfull? <?php print $html->link('YES', "/comments/vote/{$c['id']}/up") ?> or <?php print $html->link('NO', "/comments/vote/{$c['id']}/down") ?></p>
			</article>
		<?php endforeach?>

		<?php endif ?>
	
	</div>

</section> <!-- End #comments -->

<?php //if ($questions): ?>

<?php // print $this->element('questions') ?>

<?php //endif ?>