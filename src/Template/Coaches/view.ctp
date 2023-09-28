<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Coach $coach
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
        <?= $this->Html->link(__('Liste der Trainer'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
        <?= $this->Html->link(__('Trainer Bearbeiten'), ['action' => 'edit', $coach->id], ['class' => 'btn btn-warning mt-3']) ?>
        <?= $this->Form->postLink(__('Diesen Trainer löschen'), ['action' => 'delete', $coach->id], ['class' => 'btn btn-danger mt-3'], ['confirm' => __('Are you sure you want to delete # {0}?', $coach->id)]) ?>
	</ul>
</nav>
<div class="coaches view large-9 medium-8 columns content">
    <h3><?= h($coach->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($coach->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($coach->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team Id') ?></th>
            <td><?= $this->Number->format($coach->team_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Entered') ?></th>
            <td><?= h($coach->entered) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Teams') ?></h4>
        <?php if (!empty($coach->teams)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Youth') ?></th>
                <th scope="col"><?= __('Total Players') ?></th>
                <th scope="col"><?= __('Time') ?></th>
                <th scope="col"><?= __('Field') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($coach->teams as $teams): ?>
            <tr>
                <td><?= h($teams->id) ?></td>
                <td><?= h($teams->youth) ?></td>
                <td><?= h($teams->total_players) ?></td>
                <td><?= h($teams->time) ?></td>
                <td><?= h($teams->field) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ansehen'), ['controller' => 'Teams', 'action' => 'view', $teams->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Bearbeiten'), ['controller' => 'Teams', 'action' => 'edit', $teams->id], ['class' => 'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['controller' => 'Teams', 'action' => 'delete', $teams->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $teams->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
