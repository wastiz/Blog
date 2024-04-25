    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Posts</h1>
          <p class="lead text-muted">Enjoy reading these beautiful posts</p>
          <p>
            <a href="/Blog/create-post.php" class="btn btn-primary my-2">Create your own post</a>
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?php
			require_once 'server/connection.php';
			$stmt = $pdo->query('SELECT * FROM posts');
			if ($stmt->rowCount() > 0) {
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					include "templates/post-card.php";
					include "templates/modal.php";
				}
			}
			?>
        </div>
      </div>
    </div>
	<?php
	if ($stmt->rowCount() == 0) {
		echo "<div class='alert alert-warning' role='alert'>
				<h4 class='alert-heading'>No posts found!</h4>
				<p>Unfortunately, there are no posts available at the moment.</p>
				<hr>
				<p class='mb-0'>Please check back later for updates or consider creating new posts.</p>
			</div>";
	}
	?>