<div class="container mt-5">
    <div class="card">
        <div class="card-body">
            <h5 class="card-title"><?php echo $title; ?></h5>
            <p class="card-text"><?php echo $text; ?></p>
            <img src="<?php echo $img_url; ?>" class="card-img-top" alt="post image">
            <p class="card-text"><small class="text-muted">Author: <?php echo $author; ?></small></p>
            <p class="card-text"><small class="text-muted">Created: <?php echo $created; ?></small></p>
            <p class="card-text"><small class="text-muted">Time to read: <?php echo $time_to_read; ?> min</small></p>
        </div>
    </div>
</div>