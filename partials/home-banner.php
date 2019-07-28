<?php if ( have_rows('home_banner') ) : while( have_rows('home_banner') ) : the_row(); ?>
<div class="banner" background: url(<?php the_sub_field('home_banner_background'); ?>);>
  <div class="container">

    <h3 class="underline js-scroll"><?php the_sub_field('home_banner_title'); ?></h3>
    <p class="js-scroll"><?php the_sub_field('home_banner__text'); ?></p>
    <a href="<?php the_sub_field('home_banner_button_url'); ?>" class="js-scroll"><?php the_sub_field('home_banner_button_text'); ?><div class="arrow-down"></div></a>
    
  </div>
</div>
<?php endwhile; endif; ?>