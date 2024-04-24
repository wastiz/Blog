<div class="col">
    <div class="card shadow-sm">
        <img src="<?php echo $row['img-url']; ?>" class="bd-placeholder-img card-img-top" width="100%" height="225" alt="Placeholder">

        <div class="card-body">
            <h2><?php echo $row['title']; ?></h2>
            <p><?php echo $row['author']; ?></p>
            <p class="card-text"><?php echo $row['description']; ?></p>
            
            <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                    <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                </div>
                <!-- Время создания поста из базы данных -->
                <small class="text-muted"><?php echo $row['created']; ?></small>
                <small class="text-muted"><?php echo $row['time-to-read']; ?></small>
            </div>
        </div>
    </div>
</div>