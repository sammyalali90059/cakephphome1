<?= $this->Form->create() ?>
    <?= $this->Form->control('name') ?>
    <?= $this->Form->control('surname') ?>
    <?= $this->Form->control('email', ['type' => 'email']) ?>
    <?= $this->Form->control('password', ['type' => 'password']) ?>
    <?= $this->Form->button(__('Submit')) ?>
<?= $this->Form->end() ?>
