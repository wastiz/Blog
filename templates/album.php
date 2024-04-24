    <section class="py-5 text-center container">
      <div class="row py-lg-5">
        <div class="col-lg-6 col-md-8 mx-auto">
          <h1 class="fw-light">Posts</h1>
          <p class="lead text-muted">Enjoy reading these beautiful posts</p>
          <p>
            <a href="#" class="btn btn-primary my-2">Create own post</a>
            <a href="#" class="btn btn-secondary my-2">Secondary action</a>
          </p>
        </div>
      </div>
    </section>
  
    <div class="album py-5 bg-light">
      <div class="container">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
			<?php
			$host = 'localhost';
			$dbname = 'blog_posts';
			$username = 'root';
			$password = '';

			try {
				$pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
				$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (PDOException $e) {
				echo "failed to connect to db: " . $e->getMessage();
			}

          	$stmt = $pdo->query('SELECT * FROM posts');
			if ($stmt->rowCount() > 0) {
				while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
					include "templates/post-card.php";
				}
			} else {
				echo "No data in posts";
			}
          	?>
        </div>
      </div>
    </div>