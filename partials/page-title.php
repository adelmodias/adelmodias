<div class="content_title" title-section="<?php the_title(); ?>">
    <?php if ( have_rows('page_title') ) : while( have_rows('page_title') ) : the_row(); ?>
    <span class="underline"><?php the_sub_field('subtitle'); ?></span>
    <h1><?php the_sub_field('title'); ?></h1>
    <?php endwhile; endif; ?>
</div>