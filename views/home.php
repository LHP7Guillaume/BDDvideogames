<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- cdn -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.6.1/font/bootstrap-icons.css">

    <link rel="stylesheet" href="../assets/css/style.css">

    <title>BDD-Videogames</title>
</head>

<body>

    <header>
        <div class="mybanniere"></div>
    </header>

    <!-- navbarre -->

    <nav class="navbar  navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">

            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                <div class="offcanvas-header">

                    <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body row">
                    <ul class="navbar-nav pe-3">
                        <li class="nav-item col-2">
                            <a class="nav-link active fs-4" aria-current="page" href="agenda.php">1</a>
                        </li>
                        <li class="nav-item col-2">
                            <a class="nav-link active fs-4" href="#">2</a>
                        </li>
                        <li class="nav-item col-2">
                            <a class="nav-link active fs-4" href="moncompte.php">3</a>
                        </li>
                        <input class="form-control me-2" type="search" placeholder="Nom du jeux" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Rechercher</button>
                </div>
            </div>
        </div>
    </nav>

    <div class="collapse" id="navbarToggleExternalContent">
        <div class="offcanvas-body">
            <ul class="navbar-nav  pe-3">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">1</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="#">2</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="moncompte.php">3</a>
                </li>
                <li>
                    <input class=" form-control me-2" type="search" placeholder="Nom du jeux" aria-label="Search">
                </li>
                <li>
                    <button class=" btn btn-outline-success" type="submit">Rechercher</button>
                </li>
        </div>
    </div>
    <!-- fin navbar -->

    <!-- card -->
    
        <div class="row justify-content-center">
            <div class="card mt-5 mb-3 myCard ">
                <div class="row g-0">
                    <div class="col-md-4 ">
                        <img src="../assets/img/godofwar.jpeg" class=" img-fluid rounded-start mt-n1" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">titre</h5>
                            <p class="card-text">description</p>
                            <p class="card-text">platform</p>
                            <p class="card-text">publié</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>