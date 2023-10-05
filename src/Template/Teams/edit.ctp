<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
            <?= $this->Html->link(__('List Teams'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
            <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $team->id], 
					['class' => 'btn btn-danger mt-3'],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]
                )
            ?>
	</ul>
</nav>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
		<div class="card">
			<legend class="card-header"><?= __('Edit Team') ?></legend>
			<ul class="list-group list-group-flush card-body" style="box-sizing: border-box; width: 95%">
				<ul> <?php  echo $this->Form->control('team_id', [
					'options' => $teams,
					'class' => 'form-control',
					'label' => ['text' => 'Mannschaft', 'class' => 'form-label']
				]);?></ul>
				<ul> <?php  echo $this->Form->control('coach_id', ['options' => $coaches,  'class' => 'form-control', 'label' => ['text' => 'Trainer', 'class' => 'form-label']]);?></ul>
				<ul> <?php echo $this->Form->control(('total_players'), ['class' => 'form-control', 'label' => ['text' => 'Anzahl der Spieler', 'class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control(('time'), ['class' => 'form-control', 'label' => ['text' => 'Uhrzeit', 'class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control(('field'), ['class' => 'form-control', 'label' => ['text' => 'Feld', 'class' => 'form-label']]); ?></ul>
			</ul>
		</div>
	</fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
