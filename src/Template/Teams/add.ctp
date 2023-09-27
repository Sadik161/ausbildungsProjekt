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
			<legend class="card-header"><?= __('Add Team') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('youth'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('coach_id', ['class' => 'form-select',  'empty' => true]); ?></ul>
				<ul> <?php echo $this->Form->control(('total_players'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>		
				<ul> <?php echo $this->Form->control(('time'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>		
				<ul> <?php echo $this->Form->control(('field'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>		
				<ul class="mb-2"> <?php  echo $this->Form->control('club_id', ['class' => 'form-select',  'empty' => true]); ?></ul>
			</ul>
		</div>
	</fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
