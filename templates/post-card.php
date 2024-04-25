<div class="col">
    <div class="card shadow-sm">
        <img src="<?php echo $row['img_url']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Placeholder">

        <div class="card-body">
            <h2><?php echo $row['title']; ?></h2> 
            <p><?php echo $row['author']; ?></p>
            <p class="card-text"><?php echo $row['description']; ?></p>
            
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a class="btn btn-outline-primary" href="post.php?id=<?php echo urlencode($row['id']); ?>">View</a>
                    <a class="btn btn-warning" href="/Blog/edit-post.php?id=<?php echo $row['id']; ?>">Edit</a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-post-id='<?php echo $row['id']; ?>' data-bs-target="#deletePostModal_<?php echo $row['id']; ?>">
                        Delete
                    </button>
                </div>
                <div class='flex-row'>
                    <div class="flex-col">
                        <small class="text-muted">Created:</small>
                        <small class="text-muted"><?php echo $row['created']; ?></small>
                    </div>
                    <div class="flex-col">
                        <small class="text-muted">Time to read:</small>
                        <small class="text-muted"><?php echo $row['time_to_read']; ?> min</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

