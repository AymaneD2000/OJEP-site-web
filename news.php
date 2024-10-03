<?php
// Include database connection
include 'db_connection.php';

// Fetch the 3 most recent news
$sql = "SELECT * FROM news ORDER BY created_at DESC LIMIT 3";
$result = $conn->query($sql);
?>

<section id="news" class="py-5 bg-light">
    <div class="container">
        <h2 class="display-4 text-center text-primary mb-4">Dernières Actualités</h2>
        <div class="row">
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <div class="col-md-4 mb-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo $row['image_url']; ?>" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row['title']; ?></h5>
                                <p class="card-text"><?php echo $row['summary']; ?></p>
                                <a href="news_detail.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Lire plus</a>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else: ?>
                <p>No news available.</p>
            <?php endif; ?>
        </div>
        <div class="text-center">
            <a href="all-news.php" class="btn btn-primary">Voir toutes les actualités</a>
        </div>
    </div>
</section>
