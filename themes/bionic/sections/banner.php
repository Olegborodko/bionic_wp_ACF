<section class="section-banner">
  <div class="container-main">
    <div class="row">
      <div class="col-12 col-lg-5">
        <h1>
          <?php
          $arrBanner = get_field('banner');

          $title = '';
          $text = '';
          $image = '';

          if ($arrBanner) {
            $title = $arrBanner['title'];
            $text = $arrBanner['text'];
            $image = $arrBanner['image']['url'];
          }

          echo $title;
          ?>
        </h1>
        <p>
          <?php echo $text; ?>
        </p>
      </div>
      <div class="col-12 col-lg-7 d-flex">
        <img class="slider-hero" src="<?= $image ?>" alt="slider hero">
      </div>
    </div>
  </div>
</section>