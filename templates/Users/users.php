<div class="row">
    <?php foreach ($users as $user): ?>
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title"><?= h($user->name) ?> <?= h($user->surname) ?></h5>
                    <p class="card-text">Email: <?= h($user->email) ?></p>
                </div>
            </div>
        </div>

    <?php endforeach; ?>
</div>
