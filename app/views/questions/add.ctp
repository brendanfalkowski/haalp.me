<?php print $this->element('menu') ?>

<?php print $form->create('Question', array('action' => 'add')) ?>
<?php print $form->input('category_id') ?>
<?php print $form->input('question', array('label' => 'What should I do, I...', 'autofocus' => 'autofocus')) ?>
<?php print $form->input('expiry', array('options' => $expires)) ?>
<?php print $form->end('HAALP') ?>

<?php print $this->element('questions') ?>