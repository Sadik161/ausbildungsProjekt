<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
            <?= $this->Html->link(__('Liste der Spieler'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
			<?= $this->Html->link(__('Spieler bearbeiten'), ['action' => 'edit', $player->id], ['class' => 'btn btn-warning mt-3']) ?>
            <?= $this->Form->postLink(__('Spieler löschen'), ['action' => 'delete', $player->id], ['class' => 'btn btn-danger mt-3'],  ['confirm' => __('Are you sure you want to delete # {0}?', $player->id)]) ?>
	</ul>
</nav>
<div class="players view large-9 medium-8 columns content">
    <h3><?= h($player->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($player->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Team') ?></th>
            <td><?= $player->has('team') ? $this->Html->link($player->team->id, ['controller' => 'Teams', 'action' => 'view', $player->team->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Position') ?></th>
            <td><?= h($player->position) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($player->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Beigetreten') ?></th>
            <td><?= h($player->joined) ?></td>
        </tr>
    </table>
</div>
