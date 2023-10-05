<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('Liste der Spieler'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Form->postLink(
				__('Löschen'),
				['action' => 'delete', $player->id],
				['class' => 'btn btn-danger mt-3'],
				['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]
			)
		?>
	</ul>
</nav>
<div class="players form large-9 medium-8 columns content">
    <?= $this->Form->create($player) ?>
    <fieldset>
		<div class="card">
		<legend class="card-header"><?= __('Spieler bearbeiten') ?></legend>
			<ul class="list-group list-group-flush card-body" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul> <?php  echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true, 'class' => 'form-control', 'label' => ['text' => 'Mannschaft', 'class' => 'form-label']]);?></ul>
				<ul>
					<div class="form-group">
						<label for="joined" class="form-label">Beigetreten</label>
						<input type="date" id="joined" name="joined" class="form-control" placeholder="hallo" value="<?= $player->joined->format('Y-m-d') ?>">
					</div>
				</ul>
				<ul class="mb-3"> <?php echo $this->Form->control(('position'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
			</ul>
		</div>
	</fieldset>
    <?= $this->Form->button(__('Speichern'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
