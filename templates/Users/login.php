<h1>Login</h1>
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <?= $this->Form->control('email', ['required' => true, 'label' => 'Email']) ?>
    <?= $this->Form->control('password', ['required' => true, 'type' => 'password', 'label' => 'Password']) ?>
    <?= $this->Form->button(__('Login')) ?>
<?= $this->Form->end() ?>
