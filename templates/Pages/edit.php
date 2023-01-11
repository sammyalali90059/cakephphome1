<div class="row">
    <div class="col-4 offset-4">
        <h2 style="text-align: center;">Edit Pet</h2><br>
        <?= $this->Form->create() ?>
        <?= $this->Form->select("users_id", $users, ['class' => 'form-select mb-3', 'label' => false,'empty' => true, 'value' => 'id', 'text' => 'name']) ?>
        <?= $this->Form->control('name') ?>
        <?= $this->Form->control('image', ['type' => 'file']) ?>
        <?= $this->Form->control('type') ?>
        <?= $this->Form->button(__('Save')) ?>
        <?= $this->Form->end() ?>
    </div>
</div>
