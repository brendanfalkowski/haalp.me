<section id="ask">
	<div class="subcontainer">
		<header>
			<h1><?php print $html->link('haalp...', '/') ?></h1>
		
			<?php print $this->element('menu') ?>
		</header>
		<?php print $form->create('Question', array('action' => 'add', 'id' => 'ask-form')) ?>

			<fieldset>
				<ul>
					<li>
						<?php print $form->input('question', array('id' => 'halp', 'placeholder' => 'Let it out... you\'ll feel a lot better.', 'label' => 'Oh shit. You just did what? Get haalp.')) ?>
					</li>
					<li>
						<?php print $form->input('expiry', array('id' => 'time', 'label' => 'Time', 'class' => 'chzn-select', 'options' => $expires)) ?>
					</li>
					<li>
						<?php print $form->input('category_id', array('id' => 'tags', 'label' => 'Tag this with', 'class' => 'chzn-select', 'data-placeholder' => 'Uncategorized')) ?>
					</li>
				</ul>
			</fieldset>
			
			<fieldset class="submit"> <!-- submit button -->
				<input type="submit" name="submit" value="Haalp Me!" tabindex="4" />
			</fieldset>
			
		</form>
	</div>
</section>

<?php print $this->element('questions') ?>