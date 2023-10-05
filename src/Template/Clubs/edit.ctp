<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club $club
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('List Clubs'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Form->postLink(
				__('Delete'),
				['action' => 'delete', $club->id],
				['class' => 'btn btn-danger mt-3'],
				['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]
			)
		?>
	</ul>
</nav>
</nav>
<div class="clubs form large-9 medium-8 columns content">
	<?= $this->Form->create($club) ?>
	<fieldset>
		<div class="card">
			<legend class="card-header"><?= __('Verein bearbeiten') ?></legend>
			<ul class="list-group list-group-flush card-body" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control(('adress'), ['class' => 'form-control', 'label' => ['text' => 'Adresse', 'class' => 'form-label']]); ?></ul>
				<ul> <?php  echo $this->Form->control('coach_id', ['options' => $coaches, 'empty' => true, 'class' => 'form-control', 'label' => ['text' => 'Trainer', 'class' => 'form-label']]);?></ul>
				<ul class="mb-3"> <?php  echo $this->Form->control('teams_id', ['options' => $teams, 'empty' => true, 'class' => 'form-control', 'label' => ['text' => 'Mannschaft', 'class' => 'form-label']]);?></ul>
			</ul>
		</div>
	</fieldset>
	<?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
	<?= $this->Form->end() ?>
</div>
