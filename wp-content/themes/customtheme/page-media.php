<?php
/*
Template Name: Media
*/
?>
<?php
get_header();
?>
<div class="container">
        <div class="text">
         <h2 class="subtitle" style = "color:<?php the_field('title_color');?>"><?php the_title();?></h2>
            <p class="text_about">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's
                standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
        </div>

        <div id="articles__block" class="articles__block">
            <?php
                echo do_shortcode( '[ajax_load_more container_type="div" post_type="event" posts_per_page="1" scroll="false"]' );
            ?>

           


           
        </div>

    </div>
<?php
get_footer();
?>