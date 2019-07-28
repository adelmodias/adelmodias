<!DOCTYPE html>
<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html <?php language_attributes(); ?> class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js <?php echo ICL_LANGUAGE_CODE ?>">
<!--<![endif]-->
<!-- script_path: <?php echo  basename(__FILE__, ''); ?> -->

<head>
  <title><?php wp_title('|', true, 'right');?></title>
  <meta name="description" content="<?php bloginfo('description'); ?>">

  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta http-equiv="Content-Language" content="<?php echo ICL_LANGUAGE_CODE ?>">

  <!-- Fav and touch icons -->
  <link rel="shortcut icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" />
  <link rel="apple-touch-icon" href="<?php bloginfo('template_directory') ?>/img/favicon.ico" />

  <!-- BEFORE WP_HEAD() -->
  <script>
  var fmId = '<?php echo get_option('mziq_fm_company_id'); ?>';
  var fmName = '<?php echo get_option('company_name'); ?>';
  var fmBase = '<?php echo get_option( 'mziq_fm_base_uri' ); ?>';
  </script>

  <?php wp_head(); ?>
  
  <!-- AFTER WP_HEAD() -->
  <script>
    var $ = jQuery.noConflict();
    var i18nDateFormat = '<?php i18n_date_js_format();?>';
    var company_id = '<?php echo get_option('mziq_fm_company_id'); ?>';
    var baseEventsUrl = "https://apicatalog.mziq.com/events/events";
    var lang = "<?php echo ICL_LANGUAGE_CODE ?>";
    var ajaxurlPast = baseEventsUrl + "/past/" + company_id + "/" + lang;
    var ajaxurlCalendar = baseEventsUrl + "/calendar/" + company_id + "/" + lang;
    var ajaxurlFuture = baseEventsUrl + "/future/" + company_id + "/" + lang;
    var i18nShortQuarter = '<?php _e("T", LANG_DOMAIN);?>';
    var ajaxurl = '<?php echo get_site_url().'/wp-admin/admin-ajax.php?lang=' . ICL_LANGUAGE_CODE ?>';
    var stockInfoId = '<?php echo get_option('prices_key');?>'
  </script>

  <!--[if lt IE 9]>
    <script src="<?php echo bloginfo('template_directory') . '/js/html5shiv.js'?>"></script>
  <![endif]-->
</head>

<body id="lang-<?php echo ICL_LANGUAGE_CODE ?>" <?php  body_class(); ?>>

<?php get_template_part('partials/header', 'topheader'); ?>
<?php get_template_part('partials/header', 'right-menu'); ?>
<?php get_template_part('partials/search', 'popup'); ?>
