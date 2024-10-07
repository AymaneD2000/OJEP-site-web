<section id="news" class="py-5 bg-light">
    <div class="container-fluid">
        <h2 class="display-4 text-center text-primary mb-4">Dernières Actualités</h2>
        <div class="row">
            <?php if ($news > 0): ?>
                <?php foreach ($news as $index => $new): ?>
                    <div class="col-md-3 mb-4 d-flex">
                        <div class="card shadow-sm h-100 w-100 d-flex flex-column">
                            <div class="img-container">
                                <img src="data:image/jpeg;base64,<?= base64_encode($new['image']) ?>" class="card-img-top" alt="News Image">
                            </div>
                            <div class="card-body d-flex flex-column justify-content-between">
                                <h5 class="card-title">
                                    <?php echo strlen($new['title']) > 40 ? substr($new['title'], 0, 40) . '...' : $new['title']; ?>
                                </h5>
                                <p class="card-text">
                                    <?php echo strlen($new['summary']) > 80 ? substr($new['summary'], 0, 80) . '...' : $new['summary']; ?>
                                </p>
                                <a href="news-detail.php?id=<?php echo $new['id']; ?>" class="btn btn-primary mt-auto">Lire plus</a>
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
