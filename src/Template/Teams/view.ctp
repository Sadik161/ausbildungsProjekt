<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('List Teams'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Html->link(__('Edit Team'), ['action' => 'edit', $team->id], ['class' => 'btn btn-warning mt-3']) ?>
		<?= $this->Form->postLink(__('Delete Team'), ['action' => 'delete', $team->id], ['class' => 'btn btn-danger mt-3'], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
	</ul>
</nav>
<div class="teams view large-9 medium-8 columns content">
	<h3><?= h($team->id) ?></h3>
	<table class="vertical-table">
		<tr>
			<th scope="row"><?= __('Youth') ?></th>
			<td><?= h($team->youth) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Time') ?></th>
			<td><?= h($team->time) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Id') ?></th>
			<td><?= $this->Number->format($team->id) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Coach Id') ?></th>
			<td><?= $this->Number->format($team->coach_id) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Total Players') ?></th>
			<td><?= $this->Number->format($team->total_players) ?></td>
		</tr>
		<tr>
			<th scope="row"><?= __('Field') ?></th>
			<td><?= $this->Number->format($team->field) ?></td>
		</tr>
	</table>
	<div class="related">
		<h4><?= __('Related Coaches') ?></h4>
		<?php if (!empty($team->coaches)): ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<tr>
				<th scope="col"><?= __('Id') ?></th>
				<th scope="col"><?= __('Name') ?></th>
				<th scope="col"><?= __('Entered') ?></th>
				<th scope="col"><?= __('Team Id') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
			<?php foreach ($team->coaches as $coaches): ?>
			<tr>
				<td><?= h($coaches->id) ?></td>
				<td><?= h($coaches->name) ?></td>
				<td><?= h($coaches->entered) ?></td>
				<td><?= h($coaches->team_id) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('View'), ['controller' => 'Coaches', 'action' => 'view', $coaches->id], ['class' => 'btn btn-primary btn-sm']) ?>
					<?= $this->Html->link(__('Edit'), ['controller' => 'Coaches', 'action' => 'edit', $coaches->id], ['class' => 'btn btn-warning btn-sm']) ?>
					<?= $this->Form->postLink(__('Delete'), ['controller' => 'Coaches', 'action' => 'delete', $coaches->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $coaches->id)]) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div>
	<div class="related">
		<h4><?= __('Related Players') ?></h4>
		<?php if (!empty($team->players)): ?>
		<table cellpadding="0" cellspacing="0" class="table table-striped">
			<tr>
				<th scope="col"><?= __('Id') ?></th>
				<th scope="col"><?= __('Name') ?></th>
				<th scope="col"><?= __('Team Id') ?></th>
				<th scope="col"><?= __('Joined') ?></th>
				<th scope="col"><?= __('Position') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
			<?php foreach ($team->players as $players): ?>
			<tr>
				<td><?= h($players->id) ?></td>
				<td><?= h($players->name) ?></td>
				<td><?= h($players->team_id) ?></td>
				<td><?= h($players->joined) ?></td>
				<td><?= h($players->position) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('View'), ['controller' => 'Players', 'action' => 'view', $players->id], ['class' => 'btn btn-primary btn-sm']) ?>
					<?= $this->Html->link(__('Edit'), ['controller' => 'Players', 'action' => 'edit', $players->id], ['class' => 'btn btn-warning btn-sm']) ?>
					<?= $this->Form->postLink(__('Delete'), ['controller' => 'Players', 'action' => 'delete', $players->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $players->id)]) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</table>
		<?php endif; ?>
	</div>
</div>
