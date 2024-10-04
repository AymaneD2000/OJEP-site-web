<?php
// Include database connection
include 'db_connection.php';
?>

<section id="news" class="py-5 bg-light">
    <div class="container-fluid">
        <h2 class="display-4 text-center text-primary mb-4">Dernières Actualités</h2>
        <div class="row">
            <?php if ($news > 0): ?>
                <?php foreach ($news as $index => $new): ?>
                    <div class="col-md-3 mb-4">
                        <div class="card shadow-sm">
                            <img src="<?php echo $new['image_url']; ?>" class="card-img-top" alt="News Image">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $new['title']; ?></h5>
                                <p class="card-text"><?php echo $new['summary']; ?></p>
                                <a href="news_detail.php?id=<?php echo $new['id']; ?>" class="btn btn-primary">Lire plus</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <p>No news available.</p>
            <?php endif; ?>
        </div>
        <div class="text-center">
            <a href="all-news.php" class="btn btn-primary">Voir toutes les actualités</a>
        </div>
    </div>
</section>
