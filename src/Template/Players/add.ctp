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
		<legend class="card-header"><?= __('Neuen Spieler hinzufügen') ?></legend>
			<ul class="list-group list-group-flush" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php echo $this->Form->control('team_id', ['class' => 'form-select',  'empty' => true, 'label' => ['text' => 'Jugend', 'class' => 'form-label']]); ?></ul>
				<ul>
					<div class="form-group">
						<label for="joined" class="form-label">Beigetreten</label>
						<input type="date" id="joined" name="joined" class="form-control">
					</div>
				</ul>
				<ul class="mb-3"> <?php  echo $this->Form->control(('position'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
			</ul>
		</div>
	</fieldset>
    <?= $this->Form->button(__('Spieler hinzufügen'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
