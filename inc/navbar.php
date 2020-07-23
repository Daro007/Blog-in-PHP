<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <a class="navbar-brand" href="#">My Blog on PHP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="<?php echo ROOT_URL; ?>">Home <span class="sr-only"></span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo ROOT_URL; ?>addPost.php">Add Post <span class="sr-only"></span></a></li>
        </ul>
    </div>
</nav>