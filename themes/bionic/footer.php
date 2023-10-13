<?php
function widgetMenu($field)
{
  $arr = get_field($field, 'option');
  if ($arr) {
    foreach ($arr as $key => $row) {
      ?>
      <ul>
        <?php
        if ($row['title']) {
          ?>
          <li>
            <h5>
              <?= $row['title'] ?>
            </h5>
          </li>
          <?php
        }
        if ($row['link']) {
          foreach ($row['link'] as $keyI => $rowI) {
            ?>
            <li><a href="<?= $rowI['url'] ?>">
                <?= $rowI['title'] ?>
              </a></li>
            <?php
          }
        }
        ?>
      </ul>
      <?php
    }
  }
}
?>

<footer class="section-footer">
  <div class="container-main position-relative">
    <div class="footer-el"></div>
  </div>
  <div class="footer-top">
    <div class="container-footer">
      <div class="row">
        <div class="col-12 col-lg-3">
          <?php widgetMenu('menu_one'); ?>
        </div>
        <div class="col-12 col-lg-3">
          <?php widgetMenu('menu_two'); ?>
        </div>
        <div class="col-12 col-lg-3">
          <?php widgetMenu('menu_three'); ?>
        </div>
        <div class="col-12 col-lg-3">
          <?php $image = get_field('bottom_logo', 'option'); ?>
          <img class="small-logo" src="<?= $image && $image['url'] ? $image['url'] : '' ?>" alt="logo">
          <ul class="headquarters">
            <?php
            $content = bionic_acf_content('info', 'option');
            ?>
            <li class="title">
              <?= $content['title'] ?? '' ?>
            </li>
            <li class="address">
              <?= $content['address'] ?? '' ?>
            </li>
            <li class="contact">
              <?= $content['contacts'] ?? '' ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer-bottom">
    <div class="container-footer">
      <div class="row">
        <div class="col-6">
          <div class="copyright">
            <?php echo get_field('copyright', 'option') ?? '' ?>
          </div>
        </div>
        <div class="col-6">
          <div class="social">
            <?php
            $content = bionic_acf_content('social_icons', 'option');
            ?>
            <?php
            if ($content['facebook']) {
              ?>
              <a href="<?= $content['facebook'] ?>"><i class="fa fa-facebook" aria-hidden="true"></i></a>
              <?php
            }
            ?>
            <?php
            if ($content['twitter']) {
              ?>
              <a href="<?= $content['twitter'] ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
              <?php
            }
            ?>
            <?php
            if ($content['youtube']) {
              ?>
              <a href="<?= $content['youtube'] ?>"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
              <?php
            }
            ?>
            <?php
            if ($content['linkedin']) {
              ?>
              <a href="<?= $content['linkedin'] ?>"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
              <?php
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>