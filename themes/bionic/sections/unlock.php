<section class="section-unlock">
  <div class="container-main">
    <div class="row">
      <div class="col-12 col-lg-5">
        <?php
        $content = bionic_acf_content('unlock');
        ?>
        <img class="in-motion" src="<?= $content['image'] ?? '' ?>" alt="motion ARM TLC 2">
      </div>
      <div class="col-12 col-lg-7">
        <div class="text">
          <h2>
            <?= $content['title'] ?? '' ?>
          </h2>
          <p>
            <?= $content['text'] ?? '' ?>
          </p>
        </div>
      </div>
    </div>
  </div>
</section>