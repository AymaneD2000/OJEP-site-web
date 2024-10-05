<?php
// Include database connection
include 'db_connection.php';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $news_id = $_POST['news_id'];
    $author = $_POST['author'];
    $email = $_POST['email'];
    $content = $_POST['content'];

    // Prepare and execute the insert statement
    $sql = "INSERT INTO comments (news_id, author, email, content) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("isss", $news_id, $author, $email, $content);
    
    if ($stmt->execute()) {
        // Redirect back to the news detail page
        header("Location: news-detail.php?id=" . $news_id);
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
} else {
    header("Location: 404.php");
    exit();
}
