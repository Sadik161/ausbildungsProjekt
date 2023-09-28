<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('List Coaches'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Form->postLink(
			__('Delete'),
			['action' => 'delete', $coach->id],
			['class' => 'btn btn-danger mt-3'],
			['confirm' => __('Are you sure you want to delete # {0}?', $coach->id)]
			)
			?>
	</ul>
</nav>
<div class="coaches form large-9 medium-8 columns content">
	<?= $this->Form->create($coach) ?>
	<fieldset>
		<div class="card">
			<legend class="card-header"><?= __('Edit Coach') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('entered', ['empty' => true]);?></ul>
				<ul> <?php  echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true, 'class' => 'form-control', 'label' => ['text' => 'Mannschaft', 'class' => 'form-label']]);?></ul>
			</ul>
		</div>
	</fieldset>
	<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
	<?= $this->Form->end() ?>
</div>
