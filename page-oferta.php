<?php get_header();?>

<div id="page-title">
    <div class="title-container">
        <h1><?php the_title();?></h1>
        <div class="breadcrumb"><?php get_breadcrumb(); ?></div>
    </div>
</div>

<div class="page-content">
    <div class="container">
        <div class="page-offer">
            <?php if(have_rows('oferta')):?>
                <?php while(have_rows('oferta')): the_row();?>
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
    </div>
</div>

<?php get_footer();?>