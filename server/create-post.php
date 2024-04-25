<?php
require_once 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = uniqid();
    $title = $_POST['title'];
    $description = $_POST['description'];
    $text = $_POST['text'];
    $author = $_POST['author'];
    $password = $_POST['password'];
    $created = date('Y-m-d H:i:s');
    $time_to_read = $_POST['time-to-read'];
    $img_url = $_POST['img-url'];

    $stmt = $pdo->prepare("INSERT INTO posts (id, title, description, text, author, password, created, time_to_read, img_url) VALUES (:id, :title, :description, :text, :author, :password, :created, :time_to_read, :img_url)");

    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':description', $description);
    $stmt->bindParam(':text', $text);
    $stmt->bindParam(':author', $author);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':created', $created);
    $stmt->bindParam(':time_to_read', $time_to_read);
    $stmt->bindParam(':img_url', $img_url);

    try {
        $stmt->execute();
        echo "Post added";
        header("Location: ../posts.php");
    } catch (PDOException $e) {
        echo "Error posting data: " . $e->getMessage();
    }
}
?>