<?php get_header(); ?>
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<?php get_template_part('partials/page', 'title'); ?>
<section class="wp-content">

  <div class="container bg-white p-4">

    <?php the_content(); ?>

    <?php if ( empty( get_the_content() ) ) { ?>
      <p><?php _e("Esta página ainda não possui informação cadastrada.", LANG_DOMAIN); ?></p>
    <?php } ?>

  </div>
</section>

<?php endwhile; endif; ?>
<?php get_footer(); ?>