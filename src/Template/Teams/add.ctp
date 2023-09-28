<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?> 
    <fieldset>
		<div class="card">
			<legend class="card-header"><?= __('Neue Mannschaft hinzufügen') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('youth'), ['class' => 'form-control', 'label' => ['text' => __('Jugend'), 'class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('coach_id', ['class' => 'form-select',  'empty' => true, 'label' => ['text' => __('Trainer'), 'class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control(('total_players'), ['class' => 'form-control', 'label' => ['text' => __('Anzahl Spieler'), 'class' => 'form-label']]); ?></ul>		
				<ul> <?php echo $this->Form->control(('time'), ['class' => 'form-control', 'label' => ['text' => __('Zeit'), 'class' => 'form-label']]); ?></ul>		
				<ul> <?php echo $this->Form->control(('field'), ['class' => 'form-control', 'label' => ['text' => __('Feld'), 'class' => 'form-label']]); ?></ul>		
				<ul class="mb-2"> <?php  echo $this->Form->control('club_id', ['class' => 'form-select',  'empty' => true, 'label' => ['text' => __('Verein'), 'class' => 'form-label']]); ?></ul>
			</ul>
		</div>
	</fieldset>
    <?= $this->Form->button(__('Mannschaft hinzufügen'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
