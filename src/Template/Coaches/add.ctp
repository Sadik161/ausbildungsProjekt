<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<div class="coaches form large-9 medium-8 columns content">
	<?= $this->Form->create($coach) ?>
	<fieldset>
		<div class="card">
			<legend class="card-header"><?= __('Add Coach') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('entered', ['empty' => true]);?></ul>
				<ul class="mb-3"> <?php echo $this->Form->control('team_id', ['class' => 'form-control', 'label' => ['class' => 'form-label']], ['empty' => true]); ?></ul>
			</ul>
		</div>
	</fieldset>
	<?= $this->Form->button(__('Submit')) ?>
	<?= $this->Form->end() ?>
</div>
