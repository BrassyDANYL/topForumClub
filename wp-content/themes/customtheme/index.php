<?php 
include('header.php');

?>
    <!--BANNER-->
    <div class="banner">

        <div class="container">
            <div class="border">
                <?php 
                $banner = get_posts(array(
                    'category_name' => 'banner',
                    'numberposts' => 2
                ));
                    
                foreach($banner as $post) {
                    setup_postdata( $post );
                    ?>
                        <div class="slider-item post">
                    <div class="date">
                        <span class="year"><?php the_field('date');?></span>
                    </div>
                    <div class="textblock">
                        <h2 class="subtitle"><?php the_field('title');?></h2>
                        <div class="text">
                            <?php the_field('content')?>
                        </div>
                        <h4 class="place"><?php the_field('city');?></h4>
                    </div>
                </div>
                    <?php
                }


?>
                
            </div>
        </div>
    </div>
    <!--CONTENT-->
    <div class="container">
        <div class="about_text">
            <p>
                TOP FORUM is an international business communication company. Our main idea is to take your business to the next level. To make this transformation happen you need to have a platform to meet hundreds of new clients and specialists, become aware of new
                trends and soak up fresh ideas from best experts. It's what we call the forum impact. Face to face communication with like-minded professionals is a personal experience which leads your business to a great success. TOP FORUM business conferences
                give you the unique opportunity to set new goals, open your new strategy and implement the campaigns that will give you superiority in your industry. Just invest in your future.
            </p>
        </div>
        <div class="sponsors">
            <div class="sponsors_item">
                <div class="sponsors_item_img">
                    <img src="<?php echo bloginfo('template_url');?>/img/icons/people.png" alt="people">
                </div>
                <h2 class="sponsors_item_title">FOR FUTURE SPONSORS AND EXHIBITORS</h2>
                <p class="sponsors_item_text">
                    TOP FORUM conferences are the best route to raise brand awareness, get pre- and after-event promotion among your target audience, confirm the highest level of your business, present your company services and catch the interest of highly qualified prospects
                    and as a result to find new clients
                </p>
                <button class="sponsors_item_button"><a href="#">Learn more</a></button>
                <h6 class="sponsors_item_deskr">Wealth TOP FORUM Israel 2016</h6>
            </div>
            <div class="sponsors_item">
                <div class="sponsors_item_img">
                    <img src="<?php echo bloginfo('template_url');?>/img/icons/delegate.png" alt="people">
                </div>
                <h2 class="sponsors_item_title">BECOME A DELEGATE</h2>
                <p class="sponsors_item_text">
                    TOP FORUM business conferences and events serve as the best platform to learn useful insights and new trends in your business area, engage with peers from the global community and choose the best available offer, and all that in one place, so your participation
                    will safe dozens of working hours.
                </p>
                <button class="sponsors_item_button"><a href="#">Learn more</a></button>
                <h6 class="sponsors_item_deskr">Wealth TOP FORUM Israel 2016</h6>
            </div>
            <div class="sponsors_item">
                <div class="sponsors_item_img">
                    <img src="<?php echo bloginfo('template_url');?>/img/icons/people.png" alt="people">
                </div>
                <h2 class="sponsors_item_title">FOR FUTURE SPEAKERS</h2>
                <p class="sponsors_item_text">
                    We thoroughly choose the key experts to make a speech at TOP FORUM international conferences and our audience obtains the most up-to-date information about new trends on the market. Should you like to share useful insights, become a speaker or to take
                    part in panel discussion, please contact us.
                </p>
                <button class="sponsors_item_button"><a href="#">Learn more</a></button>
                <h6 class="sponsors_item_deskr">Wealth TOP FORUM Israel 2016</h6>
            </div>
        </div>
        <div class="sponsors_buttons">
            <button class="sponsors_buttons_register">
            <a href="/registration">REGISTER NOW</a>
         </button>
            <button onclick="myFunction4()" class="sponsors_buttons_subscribe">
         SUBSCRIBE
         </button>
        </div>
    </div>
    <!--POP-UP-->
    <div id="myPopup" class="pop-up-container">
        <div class="pop-up">
            <button onclick="myFunction5()" class="close"></button>
            <h2 class="title">subscribe</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            <input placeholder="NAME AND SURNAME" type="text" class="name">
            <input placeholder="COMPANY NAME" type="text" class="company_name">
            <input placeholder="E-MAIL" type="email" class="mail">
            <button onclick="myFunction5()">subscribe</button>
        </div>
    </div>

    <!--CUSTOMER REVIEWS-->
    <div class="reviews">
        <div class="container">
            <h2 class="reviews_subtitle">CUSTOMER REVIEWS</h2>
            <div class="review_slider">
                <?php
                 $my_posts = get_posts( array(
                    'numberposts' => 4,
                    'category_name'    => 'reviews',
                    'orderby'     => 'date',
                    'order'       => 'DESC',
                    'post_type'   => 'post',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );

                foreach( $my_posts as $post ){
                    setup_postdata( $post );
                        ?>
                         <div class="review">
                    <div class="photo-wrapper">
                        <div class="photo"><img src="
                        <?php 
                        if(get_field('photo'))         {
                          the_field('photo');
                        }else{
                            echo get_template_directory_uri() . '/img/icons/no_photo.png';
                        }
                                       
                        ; ?>" alt="photo"></div>
                    </div>
                    <div class="comment">
                        <h2 class="user-name"><?php the_field('name');?></h2>
                        <div class="date"><?php the_field('date');?></div>
                        <p class="text"><?php the_field('content');?></p>
                    </div>
                </div>
                        <?php
                    // формат вывода the_title() ...
                }

                wp_reset_postdata(); // сброс   
                ?>
                
            </div>

        </div>
    </div>
    <!--PROMO VIDEO-->
    <div class="promo">
        <div class="container">
            <h2 class="subtitle">promo video</h2>
            <video id="my-player" class="video-js" preload="auto" controls data-setup='{}' poster="<?php echo bloginfo('template_url');?>/img/alina.jpg">
            <source src="<?php echo bloginfo('template_url');?>/video/Пресс-конференция презедента Владимира Зеленского.mp4" type="video/mp4">
         </video>
        </div>
    </div>
    <!--OUR CLIENTS-->
    <div class="clients">
        <h2 class="subtitle">our clients</h2>
        <div class="container clients_slider">
            <?php
             $footer_slider = get_posts( array(
                    'numberposts' => -1,
                    'category_name'    => 'slider-footer',
                    'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
                ) );
                

                foreach( $footer_slider as $post ) {
                    setup_postdata( $post );
                    ?>
 <a href="#"><img src="<?php the_field('img');?>" alt="clients logo"></a>
                    <?php
                }
?>
        </div>
    </div>
    <?php include('footer.php'); ?>