<?php
/*
Template Name: Speakers of Wealth top forum Israel 2016
*/
get_header();
?>
<div class="container">
   <div class="text">
 <h2 class="subtitle" style = "color:<?php the_field('title_color');?>"><?php the_title();?></h2>         <p class="text_about">
      <p class="text_about">
         <?php the_content();?>
      </p>
   </div>
<div class="selector_block">
      <h2 class="subtitle">please select a conference</h2>
      <ul class="selector">
         <li class="current">Wealth TOP FORUM Israel 2016<button onclick="myFunction3()" class="dropbtn3"></button>
         </li>
         <ul id="myDropdown3" class="dropdown3-content">
           <a href="/speakers-of-another-conference-2016/"><li>Another name of conference 2016</li></a> 
            <a href="/speakers-of-another-conference/"><li>Another name of conference</li></a>
         </ul>
      </ul>
   </div>
   

   <div class="speakers_block">
      <?php
      $my_posts = get_posts( array(
	'numberposts' => -1,
	'conference'    => 'wealth-top-forum-israel-2016',
	'orderby'     => 'date',
	'order'       => 'DESC',
	'post_type'   => 'speaker',
	'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
) );

foreach( $my_posts as $post ){
	setup_postdata( $post );
   ?>
<div class="speaker">
        <div class="speaker_photo"><img src="<?php the_field('img');?>" alt="speaker"></div>
         <h2 class="speaker_name"><?php the_field('brand_name');?></h2>
         <p class="speaker_about"><?php the_field('about');?></p>
         <button><a href="<?php the_permalink();?>">Learn more</a></button>
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
