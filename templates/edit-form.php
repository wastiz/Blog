<?php
require_once 'server/connection.php';

if (isset($_GET['id'])) {
    $postId = $_GET['id'];

    $stmt = $pdo->prepare("SELECT * FROM posts WHERE id = :id");
    $stmt->bindParam(':id', $postId);
    $stmt->execute();
    $post = $stmt->fetch(PDO::FETCH_ASSOC);
}
?>
<form action="server/update-post.php" method='post'>
    <label class="form-label" for="author">Enter your name:</label>
    <div class="input-group mb-3">
        <input value='<?php echo $post['author']; ?>' id='author' name='author' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label" for="password">Enter your pass for this post:</label>
    <div class="input-group mb-3">
        <input value='<?php echo $post['password']; ?>' id='password' name='password' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label" for="title">Post title:</label>
    <div class="input-group mb-3">
        <input value='<?php echo $post['title']; ?>' id='title' name='title' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label" for="description">Post short description</label>
    <div class="input-group mb-3">
        <input value='<?php echo $post['description']; ?>' id='description' name='description' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group">
    <span class="input-group-text">Post text</span>
    <textarea value='<?php echo $post['text']; ?>' name='text' class="form-control" aria-label="With textarea"></textarea>
    </div>

    <div class="mb-3">
    <label for="img-url" class="form-label">Your image URL</label>
    <div class="input-group">
        <input value='<?php echo $post['img_url']; ?>' type="text" class="form-control" id="img-url" name='img-url' aria-describedby="basic-addon3 basic-addon4">
    </div>
    <div class="form-text" id="basic-addon4">Please paste link form the internet</div>
    </div>

    <label class="form-label" for="time-to-read">Approximate time to read this post:</label>
    <div class="input-group mb-3">
        <input value='<?php echo $post['time_to_read']; ?>' id='time-to-read' name='time-to-read' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <input type="hidden" name="id" value="<?php echo $postId; ?>">
    <button type="submit" class="btn btn-primary">Submit</button>
</form>