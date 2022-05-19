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
                        <ul class="links">
                            <li class="menu-item"><button onclick="myFunction()" class="dropbtn">Sponsors</button></li>
                            <ul id="myDropdown" class="sponsor_submenu dropdown-content">
                                <li><a href="/general-sponsors">General Sponsor</a></li>
                                <li><a href="/platinum-sponsors">Platinum Sponsor</a></li>
                                <li><a href="/high-tech-sponsors">High-Tech Sponsor</a></li>
                                <li><a href="gold-sponsors">Gold Sponsor</a></li>
                                <li><a href="/silver-night-sponsors">Silver Night Sponsor</a></li>
                            </ul>
                            <li class="menu-item"><button onclick="myFunction1()" class="dropbtn1">Exhibitors</button></li>
                            <ul id="myDropdown1" class="exhibitors_submenu dropdown1-content">
                                <li><a href="/exhibitors-pf-wealth-top-forum-israel-2016">Wealth TOP FORUM Israel 2016</a></li>
                                <li><a href="/exhibitors-of-another-conference">Another name of conference</a></li>
                                <li><a href="/exhibitors-of-another-conference-2016">Another name of the conference 2016</a></li>
                            </ul>
                            <li class="menu-item"><button onclick="myFunction2()" class="dropbtn2">Speakers</button></li>
                            <ul id="myDropdown2" class="speakers_submenu dropdown2-content">
                                <li><a href="/speakers-of-wealth-top-forum-israel-2016">Wealth TOP FORUM Israel 2016</a></li>
                                <li><a href="/speakers-of-another-conference">Another name of conference</a></li>
                                <li><a href="/speakers-of-another-conference-2016">Another name of the conference 2016</a></li>
                            </ul>
                            <li class="menu-item"><a class="last" href="/media">Media</a></li>
                        </ul>
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