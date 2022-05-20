<!--FOOTER-->
    <footer>
        <div class="container">
            <div class="footer_menu">
                <nav id="menu" class="menu">
                    <li class="menu-item">
                            <h2 id="footerMenuSubtitle"class="subtitle">TOP FORUM</h2>
                        </li>
                    <?php 
                     wp_nav_menu(array(
                        'theme_location' => 'Footer menu',
                        'menu'           => 'Footer menu',
                        'container'      => '',
                        'menu_class'     => 'links',
                        'menu_id'        => '',
                        'echo'           => true,
                       // 'items_wrap'     => '<ul class="links"></ul>',
                        'depth'          => 0
                    ));
                    ?>
                </nav>
            </div>
            <div class="footer_contact">
                <h2 class="subtitle">CONTACT</h2>
                <h3 class="group">Top Forum Group</h3>
                <h3 class="address">Trnavska cesta 82, 821 02 Bratislava, Slovakia</h3>
                <br>
                <br>
                <a href="tel:<?php the_field('phone', 210);?>" class="phone"><?php echo the_field('phone', 210);?></a><br>
                <a href="<?php the_field('email', 210);?>" class="mail"><?php the_field('email', 210);?></a>

            </div>
            <button class="follow"><a href="<?php the_field('social_link', 210);?>">FOLLOW US</a></button>
        </div>
        <div class="container">
            <div class="footer_copyright">
                <div class="copyright">
                    <h3>© 2014 Top Forum Group. All rights reserved.</h3>
                </div>

                <div class="development">
                    <h3>
                        Website development:
                    </h3>
                    <img src="<?php echo bloginfo('template_url');?>/img/development.png" alt="logo">
                </div>
            </div>
        </div>
        <script src="https://vjs.zencdn.net/7.17.0/video.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
        <?php wp_footer(); ?>
    </footer>
</body>

</html>