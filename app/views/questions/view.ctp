<section id="question-top">
	
	<div class="subcontainer">
		
		<header>

			<h1><a href="">haalp...</a></h1>

		</header>
		
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
			<article>
				<?php if ($c['username']): ?>
					<b>Username:</b><?php print $c['username']?><br />
				<?php endif ?>
				
				<p><?php print $c['comment']?></p>
				
				<p class="date"><?php print date('F d, Y H:i', strtotime($c['created'])) ?></p>
				
				<b>Votes</b><?php print $c['votes']?>

				<?php print $html->link('Vote Up', "/comments/vote/{$c['id']}/up") ?>
				<?php print $html->link('Vote Down', "/comments/vote/{$c['id']}/down") ?>
			</article>
		<?php endforeach?>

		<?php endif ?>
	
	</div>

</section> <!-- End #comments -->

<?php //if ($questions): ?>

<?php // print $this->element('questions') ?>

<?php //endif ?>