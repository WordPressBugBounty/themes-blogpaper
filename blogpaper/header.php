<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @package Blogpaper
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="https://gmpg.org/xfn/11">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
<?php wp_body_open(); ?>
<div id="page" class="site">
<a class="skip-link screen-reader-text" href="#content">
<?php _e( 'Skip to content', 'blogpaper' ); ?></a>
    <div class="wrapper" id="custom-background-css">
       <!--header-->
<header class="bs-headtwo">
      <!--top-bar-->
    <div class="bs-head-detail d-none d-lg-block">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <?php $header_data_enable = get_theme_mod('header_data_enable',true);
            if($header_data_enable == true)
            {
            ?>
            <div class="d-flex flex-wrap align-items-center justify-content-md-start justify-content-center mb-2 mb-md-0">
        <div class="top-date">
          <span class="day">
            <?php
              echo date_i18n('D. M jS, Y ', strtotime(current_time("Y-m-d")));  ?>
          </span>
          <span  id="time" class="time"></span> 
        </div>
            </div>
          <?php } ?>
          </div>
          <!--/col-md-6-->
          <div class="col-lg-6">
            <?php do_action('blogus_action_header_social_section'); ?>
          </div>
          <!--/col-md-6-->
        </div>
      </div>
    </div>
      <!--/top-bar-->
      <div class="clearfix"></div>
      <!-- Main Menu Area-->
      <div class="bs-menu-full">
        <nav class="navbar navbar-expand-lg navbar-wp">
          <div class="container">
            <!-- Mobile Header -->
            <div class="m-header align-items-center">
              <!-- navbar-toggle -->
              <button class="navbar-toggler x collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbar-wp" aria-controls="navbar-wp" aria-expanded="false"
                aria-label="Toggle navigation"> 
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <div class="navbar-header">
                <div class="site-logo">
                  <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
                </div>
                <div class="site-branding-text <?php echo esc_attr( display_header_text() ? ' ' : 'd-none'); ?>">
                  <div class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></div>
                  <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
                </div>
              </div>
              <div class="right-nav"> 
                <?php $blogus_menu_search  = get_theme_mod('blogus_menu_search','true'); 
                  if($blogus_menu_search == true) { ?>
                    <a class="msearch ml-auto" href=".bs_model" data-bs-toggle="modal"> <i class="fa fa-search"></i> </a>
                <?php } ?>
              </div>
            </div>
            <!-- /Mobile Header -->
            <!-- Right nav -->
            <div class="navbar-header d-none d-lg-block">
              <div class="site-logo">
                <?php if(get_theme_mod('custom_logo') !== ""){ the_custom_logo(); } ?>
              </div>
              <div class="site-branding-text <?php echo esc_attr( display_header_text() ? ' ' : 'd-none'); ?>">
                <?php if (is_front_page() || is_home()) { ?>
                  <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></h1>
                <?php } else { ?>
                  <p class="site-title"> <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php echo esc_html(get_bloginfo( 'name' )); ?></a></p>
                <?php } ?>
                  <p class="site-description"><?php echo esc_html(get_bloginfo( 'description' )); ?></p>
              </div>
          </div> 
            <!-- Navigation -->
            <div class="collapse navbar-collapse" id="navbar-wp">
            <?php wp_nav_menu( array(
                    'theme_location' => 'primary',
                      'container'  => 'nav-collapse collapse '.(is_rtl() ? 'navbar-inverse-collapse': ''),
                      'menu_class' => 'nav navbar-nav mx-auto '.(is_rtl() ? 'sm-rtl': ''),
                      'fallback_cb' => 'blogus_fallback_page_menu',
                      'walker' => new blogus_nav_walker()
                  ) );
              ?>
            </div>
            <!-- Right nav -->
            <div class="desk-header right-nav position-relative align-items-center">
              <?php blogus_menu_btns(); ?>
            </div>
          </div>
        </nav>
      </div>
      <!--/main Menu Area-->
</header> 

<!--mainfeatured start-->
<div class="mainfeatured mb-4">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">              
    <?php do_action('blogus_action_front_page_main_section_1'); ?>  
        </div><!--/row-->
    </div><!--/container-->
</div>
<!--mainfeatured end-->
<?php
do_action('blogus_action_featured_ads_section');
?>   