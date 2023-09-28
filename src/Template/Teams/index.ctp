<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team[]|\Cake\Collection\CollectionInterface $teams
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
        <?= $this->Html->link(__('Neue Mannschaft hinzufügen'), ['action' => 'add'], ['class' => 'btn btn-primary mt-3']) ?>
        <?= $this->Html->link(__('Liste der Trainer'), ['controller' => 'coaches', 'action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
	</ul>
</nav>
<style>
    #bild {
        width: 170px;
        height: auto;
    }
</style>
<div class="teams index large-9 medium-8 columns content">
    <h3><?= __('Teams') ?></h3>
    <table cellpadding="0" cellspacing="0" class="table table-striped">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('youth') ?></th>
                <th scope="col"><?= $this->Paginator->sort('coach_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_players') ?></th>
                <th scope="col"><?= $this->Paginator->sort('time') ?></th>
                <th scope="col"><?= $this->Paginator->sort('field') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($teams as $team): ?>
            <tr>
                <td><?= h($team->youth) ?></td>
                <td><?= $this->Number->format($team->coach_id) ?></td>
                <td><?= $this->Number->format($team->total_players) ?></td>
                <td><?= h($team->time) ?></td>
                <td><?= $this->Number->format($team->field) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ansehen'), ['action' => 'view', $team->id], ['class' => 'btn btn-primary btn-sm']) ?>
                    <?= $this->Html->link(__('Bearbeiten'), ['action' => 'edit', $team->id], ['class' => 'btn btn-warning btn-sm']) ?>
                    <?= $this->Form->postLink(__('Löschen'), ['action' => 'delete', $team->id], ['class' => 'btn btn-danger btn-sm'], ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]) ?>
                </td>
                <td>
                    <a href="<?php echo $team['team_link']; ?>" target="_blank">
                        <img id="bild" src="/img/fussball.jpeg" alt="link">
                    </a>
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


<!-- View/Teams/index.ctp -->
<?php foreach ($teams as $team): ?>
    <a href="<?php echo $team['Team']['team_link']; ?>">
        <img src="<?php echo $team['Team']['team_link']; ?>" alt="<?php echo $team['Team']['team_name']; ?>">
    </a>
<?php endforeach; ?>
