<?php
/*
Template Name: Gold Sponsors
*/

get_header();
?>


<div class="container">
      <div class="text">
 <h2 class="subtitle" style = "color:<?php the_field('title_color');?>"><?php the_title();?></h2>         <p class="text_about">
            <?php the_content();?>
         </p>
      </div>

      <div class="sponsors-list">
         <?php
         $my_posts = get_posts( array(
         'numberposts' => 5,
         'type_of_sponsor'    => 'gold',
         'orderby'     => 'date',
         'order'       => 'DESC',
         'post_type'   => 'sponsor',
         'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
      ) );

      foreach( $my_posts as $post ){
         setup_postdata( $post );
         ?>
         <div class="sponsor-item">
            <h2 class="category"><?php the_field('category');?></h2>
            <div class="custom-logo-link"> <img class="custom-logo" src="<?php the_field('img');?>" alt="logo"></div>
            <h3 class="subtitle"><?php the_field('brand_name');?></h3>
            <p class="about"><?php the_field('about');?></p>
            <button><a href="<?php the_field('link');?>">Learn more</a></button>
         </div>
         <?php

	// формат вывода the_title() ...
}

wp_reset_postdata(); // сброс
         ?>
        
</div>
</div>

<?php
get_footer();
?>
