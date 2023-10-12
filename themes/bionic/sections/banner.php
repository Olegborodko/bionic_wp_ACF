<section class="section-banner">
  <div class="container-main">
    <div class="row">
      <div class="col-12 col-lg-5">
        <h1>
          <?php
          $content = bionic_acf_content('banner');

          echo $content['title'] ?? '';
          ?>
        </h1>
        <p>
          <?php echo $content['text'] ?? '' ?>
        </p>
      </div>
      <div class="col-12 col-lg-7 d-flex">
        <img class="slider-hero" src="<?= $content['image'] ?? '' ?>" alt="slider hero">
      </div>
    </div>
  </div>
</section>