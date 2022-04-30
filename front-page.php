<?php get_header();?>

<div class="main-banner">
    <?php if(have_rows('baner_glowny')):?>
        <?php while(have_rows('baner_glowny')): the_row();?>
            <?php
                $image = get_sub_field('zdjecie');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <div class="image-overlay"></div>
            <?php endif; ?>
            <div class="banner-text">
                <h1><?php the_sub_field('tytul');?></h1>
                <p class="short-desc"><?php the_sub_field('krotki_opis');?></p>
                <div class="top-cta big-container">
                    <h3><?php the_sub_field('maly_tytul');?></h3>
                    <p><i class="fa-regular fa-clock"></i><?php the_sub_field('godziny');?></p>
                    <a class="btn" target="_blank" href="<?php the_sub_field('przycisk');?>"><span>Rezerwacja</span></a>
                </div>
            </div>
        <?php endwhile;?>
    <?php endif;?>
</div>

<div class="our-services container">
    <?php if(have_rows('nasze_uslugi')):?>
        <?php while(have_rows('nasze_uslugi')): the_row();?>
            <h2><?php the_sub_field('glowny_tytul_sekcji');?></h2>
            <div class="card-wrapper">
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
                <div class="card">
                    <?php if(have_rows('usluga')):?>
                        <?php while(have_rows('usluga')): the_row();?>
                            <a class="link" href="<?php the_sub_field('link');?>">
                            <?php
                                $image = get_sub_field('zdjecie');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                            <?php endif; ?>
                            <h3><?php the_sub_field('tytul_uslugi');?></h3>
                            <p><?php the_sub_field('opis');?></p>
                                </a>
                        <?php endwhile;?>
                    <?php endif;?>
                </div>
            </div>
        <?php endwhile;?>
    <?php endif;?>
</div>

<div class="big-cta">
    <?php if(have_rows('bon_podarunkowy')):?>
        <?php while(have_rows('bon_podarunkowy')): the_row();?>
            <?php
                $image = get_sub_field('zdjecie');
                if( !empty( $image ) ): ?>
                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                    <div class="image-overlay"></div>
            <?php endif; ?>
            <div class="cta-text">
                <h2><?php the_sub_field('tytul');?></h2>
                <p><?php the_sub_field('opis');?></p>
            </div>
        <?php endwhile;?>
    <?php endif;?>
</div>

<div class="about-us container">
    <?php if(have_rows('o_nas')):?>
        <?php while(have_rows('o_nas')): the_row();?>
            <div class="about-img">
                <?php
                    $image = get_sub_field('zdjecie');
                    if( !empty( $image ) ): ?>
                        <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                <?php endif; ?>
            </div>
            <div class="about-text">
                <h2><?php the_sub_field('tytul');?></h2>
                <p><?php the_sub_field('opis');?></p>
            </div>
        <?php endwhile;?>
    <?php endif;?>
</div>

<div class="reviews container">
    <?php if(have_rows('opinie')):?>
        <?php while(have_rows('opinie')): the_row();?>
            <h2><?php the_sub_field('glowny_tytul_sekcji');?></h2>
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <p><?php the_sub_field('opinia');?></p>
                    <h4><?php the_sub_field('uzytkownik');?></h4>
                </div>
                <div class="item">
                    <p><?php the_sub_field('opinia');?></p>
                    <h4><?php the_sub_field('uzytkownik');?></h4>
                </div>
                <div class="item">
                    <p><?php the_sub_field('opinia');?></p>
                    <h4><?php the_sub_field('uzytkownik');?></h4>
                </div>
                <div class="item">
                    <p><?php the_sub_field('opinia');?></p>
                    <h4><?php the_sub_field('uzytkownik');?></h4>
                </div>
                <div class="item">
                    <p><?php the_sub_field('opinia');?></p>
                    <h4><?php the_sub_field('uzytkownik');?></h4>
                </div>
            </div>
        <?php endwhile;?>
    <?php endif;?>
</div>

<?php get_footer();?>