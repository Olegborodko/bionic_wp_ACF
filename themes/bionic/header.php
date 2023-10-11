<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package bionic
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="profile" href="https://gmpg.org/xfn/11">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div id="page" class="site">
    <a class="skip-link screen-reader-text" href="#primary">
      <?php esc_html_e('Skip to content', 'bionic'); ?>
    </a>

    <header class="container-main">
      <div class="row">
        <nav class="navbar navbar-expand-xl navbar-light">
          <div class="section-top-menu">
            <a class="navbar-brand" href="#">
              <img class="logo" src="img/logo.svg" alt="logo" />
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#bionic-navbar-top"
              aria-controls="bionic-navbar-top" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="bionic-navbar-top">

              <?php
              $menu_items = wp_get_nav_menu_items('primary-menu');

              if ($menu_items) {
                echo '<ul class="navbar-nav ms-auto mb-2 mb-lg-0">';
                foreach ($menu_items as $menu_item) {
                  echo '<li class="nav-item">
                  <a class="nav-link" aria-current="page" href="' . $menu_item->url . '">' . $menu_item->title . '</a></li>';
                }
                echo '</ul>';
              }
              ?>
            </div>
          </div>
        </nav>
      </div>
    </header>