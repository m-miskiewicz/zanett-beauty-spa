<?php
/*
 * Template name: Usługa
 */

get_header(); ?>

<div id="page-title">
    <div class="title-container">
        <h1><?php the_title();?></h1>
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="page-single-service">
            <?php if(have_rows('usluga')):?>
                <?php while(have_rows('usluga')): the_row();?>
                    <div class="service-img">
                        <?php
                            $image = get_sub_field('zdjecie');
                            if( !empty( $image ) ): ?>
                                <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                    </div>
                    <div class="service-text">
                        <h2><?php the_sub_field('tytul');?></h2>
                        <p><?php the_sub_field('opis');?></p>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</div>

<?php get_footer();?>