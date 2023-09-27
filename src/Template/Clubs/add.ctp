<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club $club
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('List Clubs'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
	</ul>
</nav>
<div class="clubs form large-9 medium-8 columns content">
	<?= $this->Form->create($club) ?>
	<fieldset>
		<div class="card">
			<legend class="card-header"><?= __('Add Club') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control(('adress'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('coach_id', ['class' => 'form-select',  'empty' => true]); ?></ul>
				<ul class="mb-2"> <?php echo $this->Form->control('youth', ['class' => 'form-select',  'empty' => true]); ?></ul>
			</ul>
		</div>
	</fieldset>
	<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
	<?= $this->Form->end() ?>
</div>
