<?php
/* Template Name: About */

get_header();
?>

<main class="content about js-scroll">
    <div class="container">

        <?php get_template_part('partials/page', 'title'); ?>

        <div class="row">
            <div class="col-sm-4">
                <img src="<?php the_post_thumbnail_url(); ?>" alt="<?php bloginfo('title'); ?> - <?php bloginfo('description'); ?>">
            </div>
            <div class="col-sm-8">
                <?php the_content(); ?>
            </div>
        </div>

    </div>
</main>

<?php get_footer(); ?>