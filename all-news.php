<?php
// Include database connection
include 'db_connection.php';

// Fetch all news
$sql = "SELECT * FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toutes les Actualités - OPEJ</title>
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/news.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <style>
        /* Styling for the h2 title */
        h2.display-4 {
            font-family: 'Arial', sans-serif;
            font-weight: 700;
            font-size: 3rem;
            letter-spacing: 1px;
            color: #007bff; /* Bright blue for professional touch */
            text-align: center;
            position: relative;
        }

        /* Adding an underline effect below the h2 */
        h2.display-4::after {
            content: '';
            display: block;
            margin: 10px auto;
            width: 100px;
            height: 3px;
            background-color: #007bff;
        }

        /* Aligning the copyright text to the bottom-right */
        footer {
            position: fixed;
            bottom: 0;
            right: 0;
            padding: 10px;
            background-color: #f8f9fa;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img class="opej" src="assets/tk.png" alt="OPEJ Logo" style="height: 40px;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#news">OJEP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- All News Section -->
    <section id="all-news" class="py-5 bg-light mt-5">
        <div class="container-fluid">
            <h2 class="display-4 text-primary mb-4">Toutes les actualités</h2>
            <div class="row">
                <?php if ($result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <div class="col-md-3 mb-4">
                            <div class="card shadow-sm">
                                <img src="data:image/jpeg;base64,<?= base64_encode($row['image']) ?>" class="card-img-top" alt="News Image">
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                    <p class="card-text"><?php echo $row['summary']; ?></p>
                                    <a href="news-detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Lire plus</a>
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                <?php else: ?>
                    <p class="text-center">Aucune actualité disponible.</p>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <!-- Footer with fixed position and right alignment -->
    <footer>
        <p>© 2024 OPEJ. Tous droits réservés.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
