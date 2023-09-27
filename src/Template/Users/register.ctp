<?= $this->Form->create($user) ?>
<fieldset>
    <legend><?= __('Register') ?></legend>
    <?= $this->Form->control('username') ?>
    <?= $this->Form->control('password') ?>
    <?= $this->Form->control('email') ?>
</fieldset>
<?= $this->Form->button(__('Register')); ?>
<?= $this->Form->end() ?>
