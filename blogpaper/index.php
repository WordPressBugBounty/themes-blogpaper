<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * @package Blogpaper
 */
get_header(); ?>
<main id="content">
    <!--container-->
    <div class="container">
        <!--row-->
        <div class="row">
            <!--col-md-8-->
            <?php $blogpaper_content_layout = esc_attr(get_theme_mod('blogpaper_content_layout','grid-fullwidth'));
            if( ($blogpaper_content_layout == "align-content-left") || ($blogpaper_content_layout == "grid-left-sidebar")) { ?>
            <aside class="col-md-3 sidebar-right">
                <?php get_sidebar();?>
            </aside>
            <?php } if(($blogpaper_content_layout == "align-content-right") || ($blogpaper_content_layout == "align-content-left")){ ?>
            <div class="col-md-9 content-right">
                <?php get_template_part('template-parts/content', get_post_format()); ?>
            </div>
            <?php } elseif($blogpaper_content_layout == "full-width-content") { ?>
                <div class="col-md-12">
                <?php get_template_part('template-parts/content', get_post_format()); ?>
            </div>
            <?php } if(($blogpaper_content_layout == "grid-left-sidebar") || ($blogpaper_content_layout == "grid-right-sidebar")) { ?>
            <div class="col-md-9 content-right">
                <?php get_template_part('content','grid'); ?>
            </div>
            <?php } elseif($blogpaper_content_layout == "grid-fullwidth") { ?>
                <div class="col-md-12">
                <?php get_template_part('content','grid'); ?>
            </div>
            <?php } ?>
            <!--/col-md-8-->
            <?php if(($blogpaper_content_layout == "align-content-right") || ($blogpaper_content_layout == "grid-right-sidebar")) { ?>
            <aside class="col-md-3 sidebar-right">
                <?php get_sidebar();?>
            </aside>
            <?php } ?>
        </div><!--/row-->
    </div><!--/container-->
</main>                
<?php
get_footer();
?>