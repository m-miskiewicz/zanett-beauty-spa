<?php get_header();?>

<div id="page-title">
    <div class="title-container">
        <h1><?php the_title();?></h1>
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="page-pricing">
            <?php if(have_posts()) : while(have_posts()) : the_post();?>
                <?php the_content();?>
            <?php endwhile; else: endif;?>
        </div>
    </div>
</div>

<?php get_footer();?>