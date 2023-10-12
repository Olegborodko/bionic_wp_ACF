<section class="section-welcome">
  <div class="top">
    <h4>
      <?php
      $content = bionic_acf_content('welcome');
      echo $content['title'] ?? '';
      ?>
    </h4>
    <p>
      <?= $content['text'] ?? ''; ?>
    </p>
    <a href="<?= $content['btnUrl'] ?? ''; ?>" class="btn btn-primary">
      <?= $content['btnText'] ?? ''; ?>
    </a>
  </div>
  <video controls>
    <source src="<?= $content['video'] ?? ''; ?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>