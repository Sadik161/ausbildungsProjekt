<?php
/**
 * @var \App\View\AppView $this
 */
?>
<div class="users form">
<?= $this->Flash->render('auth') ?>
    <?= $this->Form->create() ?>
    <fieldset>
		<legend><?= __('Please enter your username and password') ?></legend>
		<table class="table">
			<tr>
				<td> <?= $this->Form->control(('username'), ['class' => 'input-group mb-2']) ?></td>
			</tr>
			<tr>
				<td> <?= $this->Form->control(('password'), ['class' => 'input-group mb-2'] )?></td>
			</tr>
		</table>
	</fieldset>
    <?= $this->Form->submit(__('Login'), ['class' => 'btn btn-primary btn-sm']); ?>
    <?= $this->Form->end() ?>
</div>
