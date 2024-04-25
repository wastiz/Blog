<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['delete_post'])) {
    $postId = $_POST['id'];

    try {
        $stmt = $pdo->prepare("DELETE FROM posts WHERE id = :id");
        $stmt->bindParam(':id', $postId);
        $stmt->execute();
        echo "Post deleted";
        header("Location: ../posts.php");
    } catch (PDOException $e) {
        echo "Error deleting post: " . $e->getMessage();
    }
}
?>
