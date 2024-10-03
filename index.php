<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Meta information for encoding and responsive design -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Link to external CSS stylesheet for custom styles -->
    <link rel="stylesheet" href="CSS/main.css">

    <!-- Link to Bootstrap CSS for responsive design and pre-built components -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <!-- Webpage title displayed on the browser tab -->
    <title>OJEP - Organization for Progress and Economic Development</title>
</head>

<body>

    <!-- Navbar section -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">
      <!-- Logo section -->
      <a class="navbar-brand" href="#">
        <img class="opej" src="assets/tk.png" alt="OPEJ Logo"> <!-- Adjust the height as needed -->
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
            <a class="nav-link" href="#">Galeries</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

    <!-- Carousel -->
    <div class="carousel w-100">
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <!-- First slide -->
            <div class="carousel-item active">
                <img src="assets/barometre.png" class="d-block w-100" alt="Modern Machinery">
                <div class="carousel-caption d-md-block align-top">
                    <h1>BAROMETRE</h1>
                    <p>Outils de Magnificence des Meilleurs travailleurs dans leur domaine au Mali et la Diaspora.</p>
                    <a href="#" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
            <!-- Second slide -->
            <div class="carousel-item">
                <img src="assets/cre-ojep.png" class="d-block w-100" alt="Second Slide">
                <div class="carousel-caption d-md-block align-top">
                    <h1>CREER MALI</h1>
                    <p>Commission de Régulation de l'Electricité et de l'Eau.</p>
                    <a href="#" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
            <!-- Third slide -->
            <div class="carousel-item">
                <img src="assets/ojep incub.png" class="d-block w-100" alt="Third Slide">
                <div class="carousel-caption d-md-block align-top">
                    <h1>OJEP INCUB</h>
                    <p>Devenir la force motrice du développement économique et social du Mali.</p>
                    <a href="#" class="btn btn-primary">Savoir plus</a>
                </div>
            </div>
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
    <!-- About Section (A propos) -->
    <section id="about" class="py-2 bg-light">
      <div class="container">
        <!-- First Row: Overview about the organization -->
        <div class="row text-center mb-3">
          <div class="col-lg-12">
            <h2 class="display-4 font-weight-bold text-primary mb-2">Qui sommes-nous?</h2>
            <p class="lead"> 
              L’OJEP Mali est une organisation faîtière de premier plan au Mali, regroupant des jeunes entrepreneurs
              de moins de 40 ans activement impliqués dans les affaires. Notre motivation est de soutenir la prochaine
              génération de chefs d’entreprise, en leur donnant les moyens de prospérer dans leurs entreprises et d’avoir un impact significatif
              sur l’économie locale.
            </p>
          </div>
        </div>

        <!-- Second Row: Mission, Vision, and Values -->
        <div class="row">
          <!-- Mission Section -->
          <div class="col-md-4 text-center devise">
            <div class="p-3 shadow-sm bg-white rounded h-30">
              <!-- Icon for Mission -->
              <!-- <div class="mb-3">
                <i class="fas fa-bullseye text-success fa-3x"></i>
              </div> -->
              <h3 class="text-success">MISSION</h3> <!-- Green for Mission -->
              <hr class="w-50 mx-auto">
              <h4 class="text-muted">Au Quotidien</h4>
              <p class="mt-3">
                Devenir la force motrice du développement économique et social du Mali à travers l’entrepreneuriat jeune et dynamique.
              </p>
            </div>
          </div>

          <!-- Vision Section -->
          <div class="col-md-4 text-center mt-4 mt-md-0 devise">
            <div class="p-3 shadow-sm bg-white rounded h-30">
              <!-- Icon for Vision -->
              <!-- <div class="mb-3">
                <i class="fas fa-eye text-warning fa-3x"></i>
              </div> -->
              <h3 class="text-warning">VISION</h3> <!-- Yellow for Vision -->
              <hr class="w-50 mx-auto">
              <h4 class="text-muted">Pour un Mali Meilleur</h4>
              <p class="mt-3">
                Promouvoir l’esprit d’entreprise et l’innovation,
                Renforcer les capacités des jeunes entrepreneurs,
                Faciliter l’accès au financement et aux marchés,
                Défendre les intérêts des jeunes entrepreneurs
              </u>
            </div>
          </div>

          <!-- Values Section -->
          <div class="col-md-4 text-center mt-4 mt-md-0 devise">
            <div class="p-3 shadow-sm bg-white rounded h-30">
              <!-- Icon for Values -->
              <!-- <div class="mb-3">
                <i class="fas fa-handshake text-danger fa-3x"></i>
              </div> -->
              <h3 class="text-danger">VALEURS</h3> <!-- Red for Values -->
              <hr class="w-50 mx-auto">
              <h4 class="text-muted">Notre Force</h4>
              <ol class="list-unstyled mt-3">
                <li><p>Engagement</p></li>
                <li><p>Dynamisme</p></li>
                <li><p>Solidarité</p></li>
                <li><p>Intégrité</p></li>
                <li><p>Excellence</p></li>
              </ol>
            </div>
          </div>
        </div>
        <br>
        <!-- Second Row: La mise en réseau, Collaboration, and Plaidoyer -->
        <div class="row">
          <!-- Mission Section -->
          <div class="col-md-4 text-center devise">
            <div class="p-3 shadow-sm bg-white rounded h-30">
              <!-- Icon for Mission -->
              <div class="mb-3">
                <i class="fas fa-bullseye text-success fa-3x"></i>
              </div>
              <h3 class="text-success">La mise en réseau</h3> <!-- Green for Mission -->
              <hr class="w-50 mx-auto">
              <!-- <h4 class="text-muted">AU QUOTIDIEN</h4> -->
              <p class="mt-3">
              Connectez-vous avec de jeunes entrepreneurs partageant les mêmes idées et développez votre réseau professionnel
              </p>
            </div>
          </div>

          <!-- Vision Section -->
          <div class="col-md-4 text-center mt-4 mt-md-0 devise">
            <div class="p-3 shadow-sm bg-white rounded h-30">
              <!-- Icon for Vision -->
              <div class="mb-3">
                <i class="fas fa-eye text-warning fa-3x"></i>
              </div>
              <h3 class="text-warning">Collaboration</h3> <!-- Yellow for Vision -->
              <hr class="w-50 mx-auto">
              <!-- <h4 class="text-muted">Pour un Mali Meilleur</h4> -->
              <p class="mt-3">
                Travailler ensemble sur des projets et des initiatives visant à favoriser la croissance et le développement des entreprises
              </p>
            </div>
          </div>

          <!-- Values Section -->
          <div class="col-md-4 text-center mt-4 mt-md-0 devise">
            <div class="p-3 shadow-sm bg-white rounded h-30">
              <!-- Icon for Values -->
              <div class="mb-3">
                <i class="fas fa-handshake text-danger fa-3x"></i>
              </div>
              <h3 class="text-danger">Plaidoyer</h3> <!-- Red for Values -->
              <hr class="w-50 mx-auto">
              <!-- <h4 class="text-muted">Notre Force</h4> -->
              <p>Influencer les politiques et les réglementations pour créer un environnement commercial favorable aux jeunes entrepreneurs</p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- About Our CEO Section -->
    <div class="ceo">
        <section id="about-ceo" class="py-5 bg-light">
            <div class="container">
                <!-- CEO Introduction -->
                <div class="row align-items-center mb-5">
                    <!-- Text Section -->
                    <div class="col-md-6">
                        <h2 class="display-5 text-blue">À propos de Cheick Oumar Soumano</h2>
                        <p class="lead">
                            Diplomate d'affaires, Président de l'OJEP et Coordonnateur du Baromètre.
                        </p>
                        <p>
                            Cheick Oumar Soumano est appelé COS par les intimes. Du haut de ses 38 ans, il est doctorant en Diplomatie et Relations internationales au Centre d’études diplomatiques et stratégiques (Ceds de Dakar) et détenteur d’un Master 2 en Droit des affaires et fiscalité. Il a commencé sa carrière à l’Apej en 2005 où il a occupé, respectivement, les postes de chef de département Financement des projets ; Entrepreneuriat jeune ; Mobilisation des ressources et audit, avant de faire un séjour au ministère des Investissements en qualité de spécialiste des Investissements.
                        </p>
                    </div>
                    <!-- Image Section -->
                    <div class="col-md-6 text-center">
                        <img src="assets/ceo.jpeg" alt="CEO" class="img-fluid rounded shadow">
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include 'news.php'; ?>
    <?php include 'activities.php'; ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>
