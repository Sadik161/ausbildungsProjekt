<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player[]|\Cake\Collection\CollectionInterface $players
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('New Player'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Html->link(__('List Teams'), ['controller' => 'Teams', 'action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Html->link(__('Add Team'), ['controller' => 'Teams', 'action' => 'add'], ['class' => 'btn btn-primary mt-3']) ?>
	</ul>
</nav>
<div class="players index large-9 medium-8 columns content">
	<h3><?= __('Players') ?></h3>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
				<th scope="col"><?= $this->Paginator->sort('id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('name') ?></th>
				<th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('joined') ?></th>
				<th scope="col"><?= $this->Paginator->sort('position') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($players as $player): ?>
			<tr>
				<td><?= $this->Number->format($player->id) ?></td>
				<td><?= h($player->name) ?></td>
				<td><?= $player->has('team') ? $this->Html->link($player->team->youth, ['controller' => 'Teams', 'action' => 'view', $player->team->id], ['style' => 'text-decoration: none;']) : '' ?></td>
				<?php if (!empty($player->joined)): ?>
				<td><?= $player->joined->format('d.m.Y') ?></td>
					<?php else: ?>
						<td></td>
					<?php endif; ?>
				<td><?= h($player->position) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('View'), ['action' => 'view', $player->id], ['class' => 'btn btn-primary btn-sm']) ?>
					<?= $this->Html->link(__('Edit'), ['action' => 'edit', $player->id], ['class' => 'btn btn-warning btn-sm']) ?>
					<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $player->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
				</td>
			</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
	<div class="paginator">
		<ul class="pagination">
			<?= $this->Paginator->first('<< ' . __('first')) ?>
			<?= $this->Paginator->prev('< ' . __('previous')) ?>
			<?= $this->Paginator->numbers() ?>
			<?= $this->Paginator->next(__('next') . ' >') ?>
			<?= $this->Paginator->last(__('last') . ' >>') ?>
		</ul>
		<p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
	</div>
</div>
