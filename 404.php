<?php get_header(); ?>
<main class="wp-content">
	<?php get_template_part('partials/page', 'title'); ?>
	<div class="container">
		<h1><?php e_("Página não encontrada!", LANG_DOMAIN) ?></h1>
		<a href="<?php echo get_home_url(); ?>"><?php e_("Clique aqui", LANG_DOMAIN) ?></a> <?php e_("para voltar para a página principal.", LANG_DOMAIN) ?>
	</div>
</main>
<?php get_footer(); ?>