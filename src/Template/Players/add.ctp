<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<div class="players form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
		<div class="card">
		<legend class="card-header"><?= __('Add Player') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('team_id', ['class' => 'form-select',  'empty' => true]); ?></ul>
				<ul> <?php echo $this->Form->control('joined', ['class' => 'form-select',  'empty' => true]);?></ul>
				<ul class="mb-3"> <?php  echo $this->Form->control(('position'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
			</ul>
		</div>
	</fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
