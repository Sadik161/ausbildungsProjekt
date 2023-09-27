<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Player $player
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
		<?= $this->Html->link(__('List Players'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
		<?= $this->Form->postLink(
				__('Delete'),
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
		<legend><?= __('Edit Player') ?></legend>
		<table class="table">
			<tr>
				<td> <?php echo $this->Form->control('name'); ?></td>
			</tr>
			<tr>
				<td> <?php  echo $this->Form->control('team_id', ['options' => $teams, 'empty' => true]);?></td>
			</tr>
			<tr>
				<td> <?php echo $this->Form->control('joined', ['empty' => true]); ?></td>
			</tr>
            <tr>
				<td> <?php echo $this->Form->control('position'); ?></td>
			</tr>
		</table>
	</fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
