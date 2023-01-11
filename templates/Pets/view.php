<div class="row">
    <div class="col-12">
        <h2 class="text-center">Pet Information</h2><br>
    </div>
</div>
<div class="row">
    <div class="col-4 offset-4">
        <div class="card">
            <img class="card-img-top" src="<?= h($pet->image) ?>" width="100" height="100">
            <div class="card-body">
                <h5 class="card-title"><?= h($pet->name) ?></h5>
                <p class="card-text">Type: <?= h($pet->type) ?></p>
                <p class="card-text">Created Time: <?= date("jS F Y H:i",strtotime($pet->createdTime)) ?></p>
            </div>
        </div>
    </div>
</div>
