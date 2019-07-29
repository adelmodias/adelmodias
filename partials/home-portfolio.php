<div class="container">
    <?php if ( have_rows('portfolio') ) : while( have_rows('portfolio') ) : the_row(); ?>
    <section class="portfolio" id="projetos">

        <div class="projects_title js-scroll">

            <div class="projects_title-text">
                <span class="underline"><?php the_sub_field('portfolio_subtitle'); ?></span>
                <h3><?php the_sub_field('portfolio_title'); ?></h3>
                <!-- <small><?php the_sub_field('portfolio_description'); ?></small> -->
            </div>

            <!-- <div class="projects_title-button">
                <a href="<?php the_sub_field('portfolio_button_url'); ?>" class="btn-transparent"><?php the_sub_field('portfolio_button_text'); ?></a>
            </div> -->

        </div>

        <div class="portfolio_cards js-scroll">

            <?php if ( have_rows('portfolio_projects') ) : while( have_rows('portfolio_projects') ) : the_row(); ?>
            <div class="portfolio_card">
                <div class="portfolio_card_title-bar">
                    <h4><?php the_sub_field('portfolio_projects_title'); ?></h4>
                    <?php $values = get_sub_field('portfolio_projects_category'); ?>
                    <label><span class="<?php echo $values['value']; ?>"><?php echo $values['label']; ?></span></label>
                </div>

                <p class="desc"><?php the_sub_field('portfolio_projects_description'); ?></p>

                <hr>

                <div class="projects_slides_card_footer">
                    <a href="<?php the_sub_field('portfolio_projects_url'); ?>" target="_blank" class="btn-transparent" style="margin-right: 10px;">Demo</a>
                    <a href="<?php the_sub_field('portfolio_projects_gitlab_url'); ?>" target="_blank" class="btn-transparent">GitLab</a>
                    <p><?php the_sub_field('portfolio_projects_date'); ?></p>
                </div>
            </div>
            <?php endwhile; endif; ?>

        </div>

    </section>
    <?php endwhile; endif; ?>
</div>