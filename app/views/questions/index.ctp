<?php print $this->element('menu') ?>

<h2>All Haalps</h2>

<?php print $form->create('Search', array('url' => '/all')) ?>
<fieldset>
	<legend>Filters</legend>
	<?php print $form->input('text', array('autofocus' => 'autofocus')) ?>
	<?php print $form->input('category_id', array('label' => 'Category', 'empty' => true)) ?>
</fieldset>
<?php print $form->end('Filter') ?>

<?php print $this->element('questions') ?>