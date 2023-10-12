<section class="section-future">
  <div class="container-main">
    <div class="row">
      <div class="col-12">
        <p>
          <?php
          $content = bionic_acf_content('future');
          echo $content['text'] ?? '';
          ?>
        </p>
      </div>
    </div>
  </div>
</section>