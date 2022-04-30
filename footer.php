<footer class="site-footer">
    <div class="big-container">
        <div class="footer-top">
            <div class="col">
                <div class="logo">
                    <?php the_custom_logo();?>
                </div>
                <div class="address">
                    <div class="item">
                        <i class="fa-solid fa-location-dot"></i>
                        <p>Wizjonerów 7/206, 31-345 Kraków</p>
                    </div>
                    <div class="item">
                        <i class="fa-regular fa-clock"></i>
                        <p>Pon-Pt 9:00-21:00</p>
                    </div>
                    <div class="item double">
                        <div class="box">
                            <i class="fa-solid fa-phone"></i>
                            <a href="tel:791734343">791 734 343</a>
                        </div>
                        <div class="box">
                            <i class="fa-regular fa-envelope"></i>
                            <p>biuro@zanettbeautyspa.pl</p>
                        </div>
                    </div>
                    <div class="item">
                        <a target="_blank" href="https://pl-pl.facebook.com/zanettbeautyspa/"><i class="fa-brands fa-facebook"></i></a>
                        <a target="_blank" href="https://www.instagram.com/zanett_beauty_spa/"><i class="fa-brands fa-instagram"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <h3>Linki</h3>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu-1',
                        'menu_class' => 'footer-nav-menu',
                        'add_li_class'  => 'nav-link'
                    )
                );?>
            </div>
            <div class="col">
                <h3>Informacje</h3>
                <?php
                wp_nav_menu(
                    array(
                        'theme_location' => 'footer-menu-2',
                        'menu_class' => 'footer-nav-menu',
                        'add_li_class'  => 'nav-link'
                    )
                );?>
            </div>
            <div class="col last-col">
                <h3>Udogodnienia</h4>
                <p>Dostępne dla niepełnosprawnych</p>
                <p>Zwierzęta dozwolone</p>
                <p>Akceptacja kart płatniczych</p>
                <p>Przyjazne dla dzieci</p>
                <p>Internet (Wi-Fi)</p>
                <p>Rezerwacja natychmiastowa</p>
                <p>Płatności online</p>
            </div>
        </div>
        <div class="footer-bottom">
            <p>© 2022 zanettbeautyspa.pl</p>
            <p>Marked with the claw by <a target="_blank" href="https://weblions.pl/">weblions.pl</a></p>
        </div>
    </div>
</footer>

<?php wp_footer();?>

</div>

</body>
</html>