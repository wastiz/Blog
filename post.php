<?php
require_once 'server/connection.php';

$postId = $_GET['id'];

$stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->bindParam(':id', $postId);
$stmt->execute();
$post = $stmt->fetch(PDO::FETCH_ASSOC);

if ($post) {
    $title = $post['title'];
    $description = $post['description'];
    $text = $post['text'];
    $author = $post['author'];
    $password = $post['password'];
    $created = $post['created'];
    $time_to_read = $post['time_to_read'];
    $img_url = $post['img_url'];
?>

<?php
$content = "templates/post-template.php";
include "templates/template.php";

?>
<?php
} else {
    echo "Post not found";
}
?>
