<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Club[]|\Cake\Collection\CollectionInterface $clubs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
        <?= $this->Html->link(__('Add Clubs'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3']) ?>
	</ul>
</nav>
<div class="clubs index large-9 medium-8 columns content">
    <h3><?= __('Clubs') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('adress') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($clubs as $club): ?>
            <tr>
                <td><?= $this->Number->format($club->id) ?></td>
                <td><?= $this->Html->link($club->name, ['action' => 'view', $club->id]) ?></td>
                <td><?= h($club->adress) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $club->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $club->id], ['class' => 'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $club->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $club->id)]) ?>
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
