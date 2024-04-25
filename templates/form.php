<form action="server/create-post.php" method='post'>
    <label class="form-label" for="author">Enter your name:</label>
    <div class="input-group mb-3">
        <input id='author' name='author' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label" for="password">Enter your pass for this post:</label>
    <div class="input-group mb-3">
        <input id='password' name='password' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label" for="title">Post title:</label>
    <div class="input-group mb-3">
        <input id='title' name='title' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <label class="form-label" for="description">Post short description</label>
    <div class="input-group mb-3">
        <input id='description' name='description' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group">
    <span class="input-group-text">Post text</span>
    <textarea name='text' class="form-control" aria-label="With textarea"></textarea>
    </div>

    <div class="mb-3">
    <label for="img-url" class="form-label">Your image URL</label>
    <div class="input-group">
        <input type="text" class="form-control" id="img-url" name='img-url' aria-describedby="basic-addon3 basic-addon4">
    </div>
    <div class="form-text" id="basic-addon4">Please paste link form the internet</div>
    </div>

    <label class="form-label" for="time-to-read">Approximate time to read this post:</label>
    <div class="input-group mb-3">
        <input id='time-to-read' name='time-to-read' type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
