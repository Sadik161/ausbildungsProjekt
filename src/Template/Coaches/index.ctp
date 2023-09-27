<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach[]|\Cake\Collection\CollectionInterface $coaches
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('New Coach'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Html->link(__('List Teams'), ['controller' => 'teams', 'action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Html->link(__('Add Team'), ['controller' => 'teams', 'action' => 'add'], ['class' => 'btn btn-primary mt-3']) ?>
	</ul>
</nav>

<div class="coaches index large-9 medium-8 columns content">
	<h3><?= __('Coaches') ?></h3>
	<table cellpadding="0" cellspacing="0" class="table table-striped">
		<thead>
			<tr>
				<th scope="col"><?= $this->Paginator->sort('id') ?></th>
				<th scope="col"><?= $this->Paginator->sort('name') ?></th>
				<th scope="col"><?= $this->Paginator->sort('entered') ?></th>
				<th scope="col"><?= $this->Paginator->sort('team_id') ?></th>
				<th scope="col" class="actions"><?= __('Actions') ?></th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($coaches as $coach): ?>
			<tr>
				<td><?= $this->Number->format($coach->id) ?></td>
				<td><?= h($coach->name) ?></td>
				<td><?= h($coach->entered->format('d.m.Y')) ?></td>

				<td><?= $this->Number->format($coach->team_id) ?></td>
				<td class="actions">
					<?= $this->Html->link(__('View'), ['action' => 'view', $coach->id], ['class' => 'btn btn-primary btn-sm']) ?>
					<?= $this->Html->link(__('Edit'), ['action' => 'edit', $coach->id], ['class' => 'btn btn-warning btn-sm']) ?>
					<?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $coach->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->id)]) ?>
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
