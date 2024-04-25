document.addEventListener("DOMContentLoaded", function() {
    var deleteButtons = document.querySelectorAll('.delete-post-btn');
  
    deleteButtons.forEach(function(button) {
      button.addEventListener('click', function() {
        var postId = button.getAttribute('data-post-id');
  
        var modal = document.getElementById('deletePostModal_' + postId);

        if (modal) {
          var bootstrapModal = new bootstrap.Modal(modal);
          bootstrapModal.show();
        }
      });
    });

  });
  