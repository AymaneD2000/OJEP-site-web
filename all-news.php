<?php
// Include database connection
include 'db_connection.php';

// Fetch all news
$sql = "SELECT * FROM news ORDER BY created_at DESC";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All News</title>
    <link rel="stylesheet" href="path_to_your_css.css">
</head>
<body>
    <section id="all-news" class="py-5">
        <div class="container">
            <h2 class="display-4 text-center text-primary mb-4">Toutes les actualités</h2>
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
        </div>
    </section>
</body>
</html>
