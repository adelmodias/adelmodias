<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->

<head>
  <title><?php wp_title('|', true, 'right');?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" />

  <?php wp_head(); ?>

  <!--[if lt IE 9]>
    <script src="<?php echo bloginfo('template_directory') . '/js/html5shiv.js'?>"></script>
  <![endif]-->
</head>

<body <?php  body_class(); ?>>

<?php //get_template_part('partials/search', 'popup'); ?>
