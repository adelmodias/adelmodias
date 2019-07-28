<?php get_header(); ?>

<?php get_template_part('partials/page', 'title'); ?>
<section class="wp-content">
  <div class="container">

    <?php if (have_posts()) : ?>

    <h2><?php echo _e("Resultado da pesquisa por ") . " \"" . $s . "\"" ?></h2>
    <ul>
      <?php while (have_posts()) : the_post(); ?>
      <li>
        <a href="<?php the_permalink() ?>">
          <?php the_title(); ?>
        </a>
      </li>
      <?php endwhile; ?>
    </ul>

    <?php else : ?>

    <h2><?php _e('Não foi encontrado nenhum arquivo.'); ?></h2>

    <?php endif; ?>

  </div>
</section>
<?php get_footer(); ?>