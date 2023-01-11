<div class="row">
    <div class="col-4 offset-4">
        <?php if ($isAuthenticated): ?>
            <h2 style="text-align: center;">New Pet</h2><br>
            <h3 style="text-align: center;">Total Users: <?= h($totalUsers) ?></h3><br>
            <?php
            echo $this->Form->create(NULL);

            echo $this->Form->control('name', ['class' => 'form-control mb-3']);
            echo $this->Form->control('image', ['type'=>'file', 'class' => 'form-control mb-3']);
            echo $this->Form->control('type', ['class' => 'form-control mb-3']);
            echo $this->Form->button(__('Save'), ['class' => 'btn btn-primary']);
            echo $this->Form->end();
            ?>
        <?php endif; ?>
                <h2 style="text-align: center;">Pets</h2><br>
        <div class="row">
            <?php foreach ($pets as $pet): ?>
                <div class="col-md-4">
                    <div class="card">
                    <img class="card-img-top" src="<?= h($pet->image) ?>" width="100" height="100">
                        <div class="card-body">
                            <h5 class="card-title"><?= h($pet->name) ?></h5>
                            <p class="card-text">Type: <?= h($pet->type) ?></p>
                            <p class="card-text">Created Time: <?= date("jS F Y H:i",strtotime($pet->createdTime)) ?></p>
                            <p class="card-text">Full Name: <?= h($pet->user->name) ?></p>
                            <a href="<?= $this->Url->build(['controller' => 'pet', 'action' => '/', $pet->name]) ?>" class="btn btn-success">Details</a> 
                            <?php if ($isAuthenticated): ?>
                            <a href="<?= $this->Url->build(['controller' => 'pet', 'action' => 'edit', $pet->name]) ?>" class="btn btn-primary">Edit</a>
                            <a href="<?= $this->Url->build(['action' => 'delete', $pet->id]) ?>" class="btn btn-danger">Delete</a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>
