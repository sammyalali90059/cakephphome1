<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
        PetLovers LTD
        </title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <?= $this->fetch('meta') ?>
        <?= $this->fetch('css') ?>
        <?= $this->fetch('script') ?>
    </head>
    <body> 
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #134563">
                <div class="container-fluid">
                    <a class="navbar-brand" href="<?= $this->Url->build('/') ?>">PetLovers LTD</a>
            
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    
                    <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
    <li class="nav-item">
        <a class="nav-link" href="<?= $this->Url->build('/') ?>">Home</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build("/users/users")?>">All Users</a>
    </li>
    <?php if (!$isAuthenticated): ?>
    <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build("/users/login")?>">Login</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build("/users/register")?>">Register</a>
    </li>
    <?php else: ?>
    <li class="nav-item">
        <a class="nav-link" href="<?=$this->Url->build("/users/logout")?>">Logout</a>
    </li>
    <?php endif; ?>
</ul>





                    </div>
                </div>
            </nav>
            <main class="main mt-3">
                <?= $this->Flash->render() ?>
                <?= $this->fetch('content') ?>
            </main>

            <footer class="text-center mt-3">
                <hr>
                Copyright &copy; <?=date("Y")?>. All Rights Reserved. [Your Name and Surname]
            </footer>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </body>
</html>
