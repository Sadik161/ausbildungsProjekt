<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('Liste der Trainer'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Form->postLink(
			__('Löschen'),
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
			<legend class="card-header"><?= __('Trainer bearbeiten') ?></legend>
			<ul class="list-group list-group-flush card-body" style="box-sizing: border-box; width: 95%">
				<ul> <?php echo $this->Form->control(('name'), ['class' => 'form-control', 'label' => ['class' => 'form-label']]); ?></ul>
				<ul>
					<div class="form-group">
						<label for="joined" class="form-label">Beigetreten</label>
						<input type="date" id="joined" name="joined" class="form-control" placeholder="hallo" value="<?= $coach->entered->format('Y-m-d') ?>">
					</div>
				</ul>
				<ul> <?php  echo $this->Form->control('team_id', ['options' => $teams, 'class' => 'form-control', 'label' => ['text' => 'Jugend', 'class' => 'form-label']]);?></ul>
			</ul>
		</div>
	</fieldset>
	<?= $this->Form->button(__('Bestätigen'), ['class' => 'btn btn-success']) ?>
	<?= $this->Form->end() ?>
</div>
