<section class="section-slider">
  <div class="container-main">
    <div class="row">
      <div class="col-12">
        <div class="swiper bionicSwiper">
          <div class="swiper-wrapper">
            <?php
            $rows = get_field('slider');
            if ($rows) {
              foreach ($rows as $key => $row) {
                ?>
                <div class="swiper-slide">
                  <h4>
                    <?= $row['title'] ?? '' ?>
                  </h4>
                  <p>
                    <?= $row['text'] ?? '' ?>
                  </p>
                  <?php
                  if ($row['btn_text'] && $row['btn_url']) {
                    ?>
                    <a href="<?= $row['btn_url'] ?>" class="btn btn-light">
                      <?= $row['btn_text'] ?>
                    </a>
                    <?php
                  }
                  ?>
                </div>
                <?php
              }
            }
            ?>
          </div>
          <div class="swiper-button-next"></div>
          <div class="swiper-button-prev"></div>
        </div>
      </div>
    </div>
  </div>
</section>