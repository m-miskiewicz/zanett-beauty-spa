<?php get_header();?>

<div id="page-title">
    <div class="title-container">
        <h1><?php the_title();?></h1>
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="page-contact">
            <?php if(have_rows('kontakt')):?>
                <?php while(have_rows('kontakt')): the_row();?>
                    <div class="row">
                        <div class="info">
                            <?php if(have_rows('dane')):?>
                                <?php while(have_rows('dane')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <div class="item double">
                                        <div class="box">
                                            <i class="fa-solid fa-phone"></i>
                                            <a href="tel:791734343"><?php the_sub_field('telefon');?></a>
                                        </div>
                                        <div class="box">
                                            <i class="fa-regular fa-envelope"></i>
                                            <p><?php the_sub_field('email');?></p>
                                        </div>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="adress">
                            <?php if(have_rows('adres')):?>
                                <?php while(have_rows('adres')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <div class="item">
                                        <i class="fa-solid fa-location-dot"></i>
                                        <p><?php the_sub_field('ulica');?></p>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="opening-ours">
                            <?php if(have_rows('godziny_otwarcia')):?>
                                <?php while(have_rows('godziny_otwarcia')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <div class="item">
                                        <i class="fa-regular fa-clock"></i>
                                        <p><?php the_sub_field('godziny');?></p>
                                    </div>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="facilities">
                            <?php if(have_rows('udogodnienia')):?>
                                <?php while(have_rows('udogodnienia')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <p><?php the_sub_field('udogodnienie_1');?></p>
                                    <p><?php the_sub_field('udogodnienie_2');?></p>
                                    <p><?php the_sub_field('udogodnienie_3');?></p>
                                    <p><?php the_sub_field('udogodnienie_4');?></p>
                                    <p><?php the_sub_field('udogodnienie_5');?></p>
                                    <p><?php the_sub_field('udogodnienie_6');?></p>
                                    <p><?php the_sub_field('udogodnienie_7');?></p>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="social-media">
                            <?php if(have_rows('social_media')):?>
                                <?php while(have_rows('social_media')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <a target="_blank" href="https://pl-pl.facebook.com/zanettbeautyspa/"><i class="fa-brands fa-facebook"></i></a>
                                    <a target="_blank" href="https://www.instagram.com/zanett_beauty_spa/"><i class="fa-brands fa-instagram"></i></a>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="photo">
                            <?php if(have_rows('zdjecie')):?>
                                <?php while(have_rows('zdjecie')): the_row();?>
                                    <?php
                                        $image = get_sub_field('zdjecie');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                    </div>
                    <div class="row bottom">
                        <div class="parking">
                            <?php if(have_rows('parking')):?>
                                <?php while(have_rows('parking')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <?php
                                        $image = get_sub_field('zdjecie');
                                        if( !empty( $image ) ): ?>
                                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                                    <?php endif; ?>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                        <div class="map">
                            <?php if(have_rows('nasza_lokalizacja')):?>
                                <?php while(have_rows('nasza_lokalizacja')): the_row();?>
                                    <h2><?php the_sub_field('tytul');?></h2>
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10240.258201688095!2d19.88694540000001!3d50.085078300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa67f6dd3ab82d96f!2s%C5%BBanett%20Beauty%26Spa!5e0!3m2!1spl!2spl!4v1649320354554!5m2!1spl!2spl" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                                <?php endwhile;?>
                            <?php endif;?>
                        </div>
                    </div>
                <?php endwhile;?>
            <?php endif;?>
        </div>
    </div>
</div>

<?php get_footer();?>