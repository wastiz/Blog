<div class="modal fade" id="deletePostModal_<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="server/delete_post.php" method="post">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Confirm Deletion</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>Please enter the password to confirm deletion.</p>
          <input type="hidden" name="post_id" value="<?php echo $row['id']; ?>">
          <div class="mb-3">
            <label for="deletePassword" class="form-label">Password:</label>
            <input type="password" class="form-control" id="deletePassword_<?php echo $row['id']; ?>" name="delete_password">
            <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-danger" name="delete_post">Delete Post</button>
        </div>
      </form>
    </div>
  </div>
</div>
