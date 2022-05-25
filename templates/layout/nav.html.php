<nav class="navbar navbar-expand-lg bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <!-- <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li> -->


                <li class="nav-item">
                    <a class="nav-link" href="le" <?= shownav(['ROLE_ETUDIANT']) ?>>Lister Etudiant</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lp" <?= shownav(['ROLE_ETUDIANT']) ?>>Lister Professeurs</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="lp" <?= shownav(['ROLE_ETUDIANT']) ?>>Lister Modules</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="classes" <?= shownav(['ROLE_ETUDIANT']) ?>>Lister Classe</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="lp"> Demande</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="le">lister demande</a></li>
                        <li><a class="dropdown-item" href="#">Demande d'annulation</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Demande de suspenssion</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item">
                    <a class="nav-link disabled">Disabled</a>
                </li> -->
            </ul>

            //role AC


            <form class="d-flex" role="search">
                <input class="form-control me-2" placeholder="Deconnexion" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">
                    <a href="/logout" class="btn btn-danger btn-sm">Deconnexion</a>
                </button>
            </form>
        </div>
    </div>
</nav>