<?php
/*
Template Name: Another World Top Forum Israel 2016
*/
get_header();
?>

<div class="container">
      <div class="text">
 <h2 class="subtitle" style = "color:<?php the_field('title_color');?>"><?php the_title();?></h2>         <p class="text_about">
            <?php the_content();?>
         </p>
      </div>

      <div class="selector_block">
         <h2 class="subtitle">please select a conference</h2>
         <ul class="selector">
            <li class="current">Another name of conference 2016<button onclick="myFunction3()" class="dropbtn3"></button>
            </li>
            <ul id="myDropdown3" class="dropdown3-content">
              <a href="/exhibitors-pf-wealth-top-forum-israel-2016"><li>Wealth TOP FORUM Israel 2016</li></a> 
               <a href="/exhibitors-of-another-conference"><li>Another name of conference</li></a>
            </ul>
         </ul>
      </div>

      <div class="sponsors-list">
         <?php
         $my_posts = get_posts( array(
            'numberposts' => 5,
            'conference'    => 'another-name-of-the-conference-2016',
            'orderby'     => 'date',
            'order'       => 'DESC',
            'post_type'   => 'sponsor',
            'suppress_filters' => true, // подавление работы фильтров изменения SQL запроса
         ) );

         foreach( $my_posts as $post ){
            setup_postdata( $post );
               ?>
               <div class="exhibitor-item">
            <div class="custom-logo-link"> <img src="<?php the_field('img');?>" alt="logo" class="custom-logo"></div>
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
