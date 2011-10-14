<section id="my-haalps-top">
	<div class="subcontainer">
		<header>
			<h1><?php print $html->link('haalp...', '/') ?></h1>
			<?php print $this->element('menu') ?>
		</header>
		
		<h2>My Haalps!</h2>
		<p>All your haalps collected in one place.</p>
	</div>
</section>

<?php print $this->element('questions') ?>