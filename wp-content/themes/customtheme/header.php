<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//vjs.zencdn.net/7.10.2/video-js.min.css" rel="stylesheet">
    <script src="//vjs.zencdn.net/7.10.2/video.min.js"></script>
    <script>
        window.HELP_IMPROVE_VIDEOJS = false;
    </script>

</head>

<body>
    <header>
        <div class="header_black">
            <div class="container">
                <div class="header_black_inside">
                    <nav id="menu" class="menu">
                        <?php
                        wp_nav_menu( array(
                        'theme_location' => 'Header menu',
                        'menu'           => 'Main menu',
                        'container'      => '',
                        'menu_class'     => 'links',
                        'menu_id'        => '',
                        'echo'           => true,
                       // 'items_wrap'     => '<ul class="links"></ul>',
                        'depth'          => 2
                        ));
                        ?>
                    </nav>
                    <button class="top-forum-club_btn"><a href="https://en.wikipedia.org/wiki/Forum_Club_Handball">TOP FORUM CLUB</a></button>
                </div>

                <div id="burger-menu">
                    <span></span>
                </div>

            </div>
        </div>
        <div class="container">

            <div class="header_white">

                <a href="/media" class="custom-logo-link"><?php the_custom_logo()?></a>
                <ul class="menu">
                    <li class="menu-item">
                        <div class="cup">

                        </div>
                        <a href="/media">upcoming events</a>
                    </li>
                    <li class="menu-item">
                        <div class="flag">

                        </div>
                        <a href="/contacts">contacts</a>
                    </li>
                </ul>
                <button class="register"><a href="/registration">REGISTER NOW</a></button>
            </div>

        </div>
    </header>