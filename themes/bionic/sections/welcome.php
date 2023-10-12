<section class="section-welcome">
  <div class="top">
    <h4>
      <?php
      $arr = get_field('welcome');

      $title = '';
      $text = '';
      $btnText = '';
      $btnUrl = '';
      $video = '';

      if ($arr) {
        $title = $arr['title'];
        $text = $arr['text'];
        $btnText = $arr['btn_text'];
        $btnUrl = $arr['btn_url'];
        $video = $arr['video']['url'];
      }
      ?>

      <?= $title ?>
    </h4>
    <p>
      <?= $text ?>
    </p>
    <a href="<?= $btnUrl ?>" class="btn btn-primary">
      <?= $btnText ?>
    </a>
  </div>
  <video controls>
    <source src="<?= $video ?>" type="video/mp4">
    Your browser does not support the video tag.
  </video>
</section>