<section class="section-faq">
  <div class="container-main">
    <div class="row">
      <h2>
        <?php
        $content = bionic_acf_content('faq');
        echo $content['title'] ?? '';
        ?>
      </h2>
    </div>
    <div class="row">
      <div class="col-12 col-lg-5">
        <img class="bionik-pc" src="<?= $content['image'] ?? '' ?>" alt="bionik pc">
      </div>
      <div class="col-12 col-lg-7">
        <div id="accordion">
          <?php
          $rows = get_field('faq');
          if ($rows && $rows['questions']) {
            foreach ($rows['questions'] as $key => $row) {
              $collapsed = 'false';
              $collapsedValue = 'collapsed';
              $show = '';
              if ($key == '0') {
                $collapsed = 'true';
                $collapsedValue = '';
                $show = 'show';
              }
              ?>
              <div class="accordion">
                <div class="accordion-item" id="heading-<?= $key ?>">
                  <button class="btn accordion-title <?= $collapsedValue ?>" data-bs-toggle="collapse"
                    data-bs-target="#collapse-<?= $key ?>" aria-expanded="<?= $collapsed ?>"
                    aria-controls="collapse-<?= $key ?>">
                    <span class="minus"></span>
                    <span class="plus"></span>
                    <?= $row['title'] ?? '' ?>
                  </button>
                </div>
                <div id="collapse-<?= $key ?>" class="collapse <?= $show ?>" aria-labelledby="heading-<?= $key ?>">
                  <div class="accordion-body">
                    <?= $row['text'] ?? '' ?>
                  </div>
                </div>
              </div>
              <?php
            }
          }
          ?>
        </div>
        <a href="<?= $content['btnUrl'] ?? '' ?>" class="btn btn-primary">
          <?= $content['btnText'] ?? '' ?>
        </a>
      </div>
    </div>
  </div>
</section>