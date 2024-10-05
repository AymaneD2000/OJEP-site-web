<?php
// Include database connection
include 'db_connection.php';

// Get the news id from the URL
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $news_id = $_GET['id'];

    // Fetch the news article
    $sql = "SELECT * FROM news WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $news_id);
    $stmt->execute();
    $result = $stmt->get_result();
    
    if ($result->num_rows > 0) {
        $news_detail = $result->fetch_assoc();
    } else {
        header("Location: 404.php");
        exit();
    }

    // Fetch comments related to the news article
    $sql_comments = "SELECT * FROM comments WHERE news_id = ? ORDER BY date DESC";
    $stmt_comments = $conn->prepare($sql_comments);
    $stmt_comments->bind_param("i", $news_id);
    $stmt_comments->execute();
    $comments_result = $stmt_comments->get_result();
    $comments = $comments_result->fetch_all(MYSQLI_ASSOC);
} else {
    header("Location: 404.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($news_detail['title']); ?> - OPEJ</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
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
                        <a class="nav-link" href="#news">Actualités</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#news">OJEP</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Main content -->
    <div class="container mt-5 pt-5">
        <div class="row">
            <h1 class="article-title"><?php echo htmlspecialchars($news_detail['title']); ?></h1>
            <p class="article-author">Par <strong><?php echo htmlspecialchars($news_detail['author']); ?></strong> / <?php echo date('d M Y', strtotime($news_detail['date'])); ?></p>
            <img src="<?php echo htmlspecialchars($news_detail['image_url']); ?>" alt="News Image" class="img-fluid article-image">
            <div class="col-lg-8 offset-lg-2">
            <p class="article-body mt-4">
                <?php echo nl2br(htmlspecialchars($news_detail['content'])); ?>
            </p>
        </div>
    </div>

            <!-- Display Comments -->
            <div class="mt-5">
            <h5 class="text-primary mb-4">Commentaires</h5>
            <?php if (count($comments) > 0): ?>
                <div class="comment-list">
                    <?php foreach ($comments as $comment): ?>
                        <div class="media mb-4 bg-white p-3 shadow-sm rounded">
                            <div class="media-body">
                                <h6 class="mt-0 font-weight-bold text-primary">
                                    <?php echo htmlspecialchars($comment['author']); ?>
                                    <small class="text-muted">(<?php echo htmlspecialchars($comment['email']); ?>)</small>
                                </h6>
                                <p class="mb-1"><?php echo nl2br(htmlspecialchars($comment['content'])); ?></p>
                                <small class="text-muted">Posté le <?php echo date('d M Y H:i', strtotime($comment['date'])); ?></small>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php else: ?>
                <p class="text-muted">Aucun commentaire pour le moment. Soyez le premier à commenter !</p>
            <?php endif; ?>
        </div>
    </div>
</div>

    <!-- Comment Section -->
<div class="row mt-5">
    <div class="col-lg-8 offset-lg-2">
        <h4 class="mb-4 text-primary">Laisser un commentaire</h4>
        <!-- Comment Form -->
        <form action="post_comment.php" method="POST" class="bg-white p-4 shadow-sm rounded">
            <input type="hidden" name="news_id" value="<?php echo $news_id; ?>">
            <div class="form-group">
                <label for="author" class="font-weight-bold">Nom <span class="text-danger">*</span>:</label>
                <input type="text" class="form-control" id="author" name="author" placeholder="Votre nom" required>
            </div>
            <div class="form-group">
                <label for="email" class="font-weight-bold">Email <span class="text-danger">*</span>:</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Votre email" required>
            </div>
            <div class="form-group">
                <label for="content" class="font-weight-bold">Commentaire <span class="text-danger">*</span>:</label>
                <textarea class="form-control" id="content" name="content" rows="4" placeholder="Votre commentaire" required></textarea>
            </div>
            <div class="text-right">
                <button type="submit" class="btn btn-primary">Poster le commentaire</button>
            </div>
        </form>




<!-- Footer -->
<footer class="mt-5 bg-light text-center py-3">
    <p>&copy; 2024 OPEJ. Tous droits réservés.</p>
</footer>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
