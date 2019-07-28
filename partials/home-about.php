<?php if ( have_rows('about') ) : while( have_rows('about') ) : the_row(); ?>
<section id="sobre" class="skills">
    <div class="container">

        <div class="skills_what-i-do js-scroll"> 
            <?php the_sub_field('about_text'); ?>
        </div>

        <div class="skills_slide skills_workflow js-scroll">

            <?php if ( have_rows('about_skills_workflow') ) : while( have_rows('about_skills_workflow') ) : the_row(); ?>
                <div>
                    <div class="circle">
                        <img src="<?php the_sub_field('about_skills_workflow_icon'); ?>" alt="<?php the_sub_field('about_skills_workflow_title'); ?>">
                    </div>
                    <span><?php the_sub_field('about_skills_workflow_title'); ?></span>
                </div>
            <?php endwhile; endif; ?>

        </div>

    </div>
</section>
<?php endwhile; endif; ?>