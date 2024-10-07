<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta information for encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external CSS stylesheet for custom styles -->
    <link rel="stylesheet" href="CSS/main.css" type="text/css">
    <link rel="stylesheet" href="CSS/about.css" type="text/css">
    <link rel="stylesheet" href="CSS/ceo.css" type="text/css">
    <link rel="stylesheet" href="CSS/partemaire.css" type="text/css">
    <link rel="stylesheet" href="CSS/teams.css" type="text/css">
    <link rel="stylesheet" href="CSS/news.css" type="text/css">
    <link rel="stylesheet" href="CSS/forms.css" type="text/css">
    <link rel="stylesheet" href="CSS/activities.css" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <!-- Link to Bootstrap CSS for responsive design and pre-built components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Webpage title displayed on the browser tab -->
    <title>OJEP - Organization for Progress and Economic Development</title>
</head>

<body>
    <?php 
        include 'db_connection.php';
        // echo "$news";
        // echo "$pubs";
    ?>
<!-- Navbar section -->
<nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
  <div class="container-fluid">
    <!-- Logo section -->
    <a class="navbar-brand" href="#index.php">
      <img class="opej" src="assets/tk.png" alt="OPEJ Logo" style="height: 40px;"> <!-- Adjust the height if necessary -->
    </a>
    <!-- Toggler button for mobile view -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu links -->
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#about">À propos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#news">Actualités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#activities">Activités</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#partenaire">Partenaires</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#contact">Contact</a>
        </li>
      </ul>
    </div>
  </div>
</nav>



  <div class="carousel w-100">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php foreach ($pubs as $index => $pub): ?>
                    <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                        <img src="data:image/jpeg;base64,<?= base64_encode($pub['logo']) ?>" class="d-block w-100" alt="<?= $pub['name'] ?>">
                        <div class="carousel-caption d-md-block align-top">
                            <h1><?= $pub['name'] ?></h1>
                            <p><?= $pub['presentation'] ?></p>
                            <a href="#" class="btn btn-primary">Savoir plus</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <!-- Carousel controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>

    <?php include 'about.php'; ?>
    <?php include 'ceo.php';?>
    <?php include 'news.php'; ?>
    <?php include 'activities.php'; ?>
    <?php include 'partenaires.php'; ?>
    <?php include 'teams.php'; ?>
    <?php include 'forms.php'; ?>
<!-- 
    News Section
<section id="news" class="py-5 bg-light">
    <div class="container">
        <h2 class="display-4 text-center text-primary mb-4">Dernières Actualités</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="assets/self_driving_car.jpg" class="card-img-top" alt="News Image 1">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'actualité 1</h5>
                        <p class="card-text">Résumé de l'actualité 1. Ce texte donne un aperçu de l'article ou de l'événement.</p>
                        <a href="#" class="btn btn-primary">Lire plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="assets/barometre.png" class="card-img-top" alt="News Image 2">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'actualité 2</h5>
                        <p class="card-text">Résumé de l'actualité 2. Ce texte donne un aperçu de l'article ou de l'événement.</p>
                        <a href="#" class="btn btn-primary">Lire plus</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm">
                    <img src="assets/tourdafrique.jpg" class="card-img-top" alt="News Image 3">
                    <div class="card-body">
                        <h5 class="card-title">Titre de l'actualité 3</h5>
                        <p class="card-text">Résumé de l'actualité 3. Ce texte donne un aperçu de l'article ou de l'événement.</p>
                        <a href="#" class="btn btn-primary">Lire plus</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="all-news.html" class="btn btn-outline-primary">Voir toutes les actualités</a>
        </div>
    </div>
</section> -->
    <!-- Bootstrap JS for interactive elements like the navbar and carousel -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="JS/partenaire.js"></script>
    <script src="JS/main.js"></script>
</body>

</html>
