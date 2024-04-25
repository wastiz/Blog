<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $author = $_POST['author'];
    $password = $_POST['password'];
    $title = $_POST['title'];
    $description = $_POST['description'];
    $text = $_POST['text'];
    $imgUrl = $_POST['img-url'];
    $timeToRead = $_POST['time-to-read'];
    $postId = $_POST['id'];

    try {
        $stmt = $pdo->prepare("UPDATE posts SET author = :author, password = :password, title = :title, description = :description, text = :text, img_url = :img_url, time_to_read = :time_to_read WHERE id = :id");
        $stmt->bindParam(':id', $postId);
        $stmt->bindParam(':author', $author);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':description', $description);
        $stmt->bindParam(':text', $text);
        $stmt->bindParam(':img_url', $imgUrl);
        $stmt->bindParam(':time_to_read', $timeToRead);
        $stmt->execute();

        echo "Post updated successfully";
        header("Location: ../posts.php");
    } catch (PDOException $e) {
        echo "Error updating post: " . $e->getMessage();
    }
}
?>
