<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>

  <meta charset="<?php bloginfo('charset'); ?>">
  <title><?php wp_title(''); ?><?php if (wp_title('', false)) {
                                  echo ' :';
                                } ?> <?php bloginfo('name'); ?></title>

  <link href="//www.google-analytics.com" rel="dns-prefetch">
  <link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">



  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />


  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

  <link href="<?php echo get_template_directory_uri(); ?>/css/lightgallery.css" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous">

  <script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>
  <?php wp_head() ?>


</head>


<body id="page-top" <?php body_class(); ?>>


  <div class="page-wrap">
    <?php if (have_rows('info', 'options')): ?>
      <?php while (have_rows('info', 'options')): the_row();

      ?>
        <div class="side_wrap_contact wow fadeInRight" data-wow-delay="0.8s" data-wow-duration="0.8s">
          <div class="phone ">

            <?php
            $link = get_sub_field('telefon');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>



              <a href="<?php echo esc_url($link_url); ?>" class="phone">
                <i class="fas fa-phone"></i> </a>
            <?php endif; ?>
          </div>

          <div class="email">

            <?php
            $link = get_sub_field('email');
            if ($link):
              $link_url = $link['url'];
              $link_title = $link['title'];
              $link_target = $link['target'] ? $link['target'] : '_self';
            ?>
              <a href="<?php echo esc_url($link_url); ?>" class="email"><i class="fas fa-envelope"></i></a>
            <?php endif; ?>
          </div>
        </div>
      <?php endwhile; ?>
    <?php endif; ?>

    <nav class="navbar navbar-expand-lg navbar-default fixed-top " id="mainNav">
      <div class="container">

        <div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>
        <div class="logo animsition-link wow fadeInLeft" data-wow-delay="0.5s" data-wow-duration="0.8s"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/jl2.png" alt="Name"></a></div>

        <div class="collapse navbar-collapse " id="navbarResponsive">
          <?php
          wp_nav_menu(array(
            'theme_location'  => 'primary',
            'depth'           => 2,
            'container'       => 'div',
            'container_class' => 'collapse navbar-collapse',
            'container_id'    => 'bs-example-navbar-collapse-1',
            'menu_class'      => 'navbar-nav ml-auto animsition-link',
            'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
            'walker'          => new WP_Bootstrap_Navwalker(),
          ));
          ?>


        </div>



      </div>
    </nav>