<?php
/* Template Name: Contact */

get_header();
?>

<main class="content contact js-scroll">
    <div class="container">

        <?php get_template_part('partials/page', 'title'); ?>

      <div class="row">

        <div class="col-sm">

          <form class="contact_form">
            <div class="form-group">
              <input type="text" name="nomeIpt" class="form-control" placeholder="Digite seu nome" required="">
            </div>
            <div class="form-group">
              <input type="email" name="emailIpt" class="form-control" placeholder="Digite seu e-mail" required="">
            </div>
            <div class="form-group">
              <select name="assuntoIpt" class="form-control custom-select" required="">
                <option value="">Selecione uma opção</option>
                <option value="Orçamento">Orçamento</option>
                <option value="Outros assuntos">Outros assuntos</option>
              </select>
            </div>
            <div class="form-group">
              <textarea name="mensagemIpt" placeholder="Digite aqui sua mensagem" rows="3"
                class="form-control"></textarea>
            </div>
            <button type="submit" class="btn-transparent">Enviar</button>
          </form>

          <div id="mensagem" class="alert "></div>

        </div>

        <div class="col-sm-5">
            <ul class="contact_list">
                <?php if ( have_rows('contact_information') ) : while( have_rows('contact_information') ) : the_row(); ?>
                <li>
                    <span><?php echo get_sub_field('title'); ?></span>
                    <a href="mailto:<?php echo get_sub_field('url'); ?>"><?php echo get_sub_field('text'); ?></a>
                </li>
                <?php endwhile; endif; ?>
            </ul>

            <ul class="social-media">
                <?php if ( have_rows('contact_informations_social_media') ) : while( have_rows('contact_informations_social_media') ) : the_row(); ?>
                <li>
                    <a href="<?php echo get_sub_field('profile_url'); ?>" target="_blank">
                    <?php echo get_sub_field('name_of_social_media'); ?>
                    </a>
                </li>
                <?php endwhile; endif; ?>
            </ul>
        </div>
      </div>

    </div>
</main>

<?php get_footer(); ?>