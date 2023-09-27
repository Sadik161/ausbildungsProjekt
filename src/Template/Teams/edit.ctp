<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Team $team
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
	<ul class="side-nav">
            <?= $this->Html->link(__('List Teams'), ['action' => 'index'], ['class' => 'btn btn-primary mt-3']) ?>
            <?= $this->Form->postLink(
                    __('Delete'),
                    ['action' => 'delete', $team->id], 
					['class' => 'btn btn-danger mt-3'],
                    ['confirm' => __('Are you sure you want to delete # {0}?', $team->id)]
                )
            ?>
	</ul>
</nav>
<div class="teams form large-9 medium-8 columns content">
    <?= $this->Form->create($team) ?>
    <fieldset>
		<legend><?= __('Edit Team') ?></legend>
		<table class="table">
			<tr>
				<td> <?php echo $this->Form->control('youth'); ?></td>
			</tr>
			<tr>
				<td> <?php  echo $this->Form->control('coach_id');?></td>
			</tr>
			<tr>
				<td> <?php echo $this->Form->control('total_players');?></td>
			</tr>
            <tr>
				<td> <?php echo $this->Form->control('time'); ?></td>
			</tr>
            <tr>
				<td> <?php echo $this->Form->control('field'); ?></td>
			</tr>
		</table>
	</fieldset>
    <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success']) ?>
    <?= $this->Form->end() ?>
</div>
