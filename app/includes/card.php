
  <div class="wrapper">
  <?php foreach ($posts as $post): ?>
    <div class="card">
      <div class="card-banner">
        <img class="banner-img" src='<?php echo BASE_URL . '/assets/images/' . $post['image']; ?>' alt=''>
      </div>
      <div class="card-body">
        <h2 class="blog-title"><a href="single.php?id=<?php echo $post['id']; ?>"><?php echo $post['title']; ?></a>
        <div class="card-profile">
          <div class="card-profile-info">
            <i class="far fa-calendar"> <?php echo date('F j, Y', strtotime($post['created_at'])); ?></i>
          </div>
        </div>
      </div>
    </div>
    <?php endforeach; ?>

  </div>
