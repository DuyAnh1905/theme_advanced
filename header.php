<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Fictional University</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="site-header">
      <div class="container">
      <h1 class="school-logo-text float-left">
                <?php
                $sitename = get_bloginfo('title');
                ?>
                <a href="<?php echo get_bloginfo('home'); ?>"><?php echo  $sitename; ?></a>
            </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
          <nav class="main-navigation">
            <ul>
            <?php
                wp_nav_menu(array(

                    'theme_location' => 'primary_menu',
                    'container'            => 'nav',
                    'container_class'      => 'main-navigation',
                ));
                ?>
          </nav>
          <div class="site-header__util">
            <?php 
              if(is_user_logged_in()) {
                ?>
                <a href="<?php echo site_url("/my-notes"); ?>" class="btn btn--small btn--orange float-left push-right">My notes</a>
                <a href="<?php echo wp_logout_url(); ?>" class="btn btn--small btn--dark-orange float-left btn--with-photo">
                  <span class="site-header__avatar"><?php echo get_avatar(get_current_user_id(), 60 ); ?></span>
                  <span class="btn__text">Logout</span>
                </a>
                <?php
              } else {
                ?>
                  <a href="<?php echo wp_login_url(); ?>" class="btn btn--small btn--orange float-left push-right">Login</a>
                  <a href="<?php echo wp_registration_url(); ?>" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
                <?php
              }
            ?>
            <!-- <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a> -->
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>