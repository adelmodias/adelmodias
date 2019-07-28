<?php 

/* Load CSS Files  */
function wpmziq_theme_styles()
{
    wp_enqueue_style('style_css', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('slick_theme', get_template_directory_uri() . '/vendor/slick-1.9.0/slick-theme.min.css');
    wp_enqueue_style('slick', get_template_directory_uri() . '/vendor/slick-1.9.0/slick.min.css');
    wp_enqueue_style('open_sans', 'https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&display=swap');
    if ( is_page_template( 'page-templates/page-stockinfo.php' ) ) {
        wp_enqueue_style('mziq_stockinfo_css', 'https://s3.amazonaws.com/mz-prd-stockinfo/assets/css/mziq_stockinfo.min.css');
    }
}
add_action('wp_enqueue_scripts', 'wpmziq_theme_styles');

/* Load JS Files */
function wpmziq_theme_js()
{
    wp_enqueue_script('slick_js', get_template_directory_uri() .'/vendor/slick-1.9.0/slick.min.js', array('jquery'), VERSION);

    wp_enqueue_script('lodash_js',    'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js', array('jquery'), VERSION);
    wp_enqueue_script('jquery_ui_min_js', get_template_directory_uri() .'/js/jquery-ui.min.js', array('jquery'), VERSION);
    wp_enqueue_script('lodash_js', 'https://cdnjs.cloudflare.com/ajax/libs/lodash.js/4.17.4/lodash.min.js', array('jquery'), VERSION);
    wp_enqueue_script('filesize_js', 'https://cdnjs.cloudflare.com/ajax/libs/filesize/3.5.10/filesize.min.js', '', VERSION);
    wp_enqueue_script('ics_js', get_template_directory_uri()  .'/js/ics.js', array('jquery'), VERSION);
    // wp_enqueue_script('numeral_js',         get_template_directory_uri() .'/js/charts/numeral.min.js');
    // wp_enqueue_script('locales_min_js',     get_template_directory_uri() .'/js/charts/locales.min.js');
    wp_enqueue_script('moment_js', get_template_directory_uri() . '/js/moment.min.js', '', VERSION);

    wp_enqueue_script('mzcalendar_datepicker_js', get_template_directory_uri() .'/js/mzcalendar.datepicker.js', array('jquery'), VERSION);
    wp_enqueue_script('mziqcalendar_pastevents_js', get_template_directory_uri() .'/js/mziqcalendar.pastevents.js', array('jquery'), VERSION);

    wp_enqueue_script('mz_util_js', get_template_directory_uri() .'/js/mz.util.js', array('jquery'), VERSION);
    wp_enqueue_script('mziq_cmsint_js', get_template_directory_uri() .'/js/mziq.cmsint.js', array('jquery', 'mz_util_js'), VERSION);
    // wp_enqueue_script('mzgetquotations_js',                          $baseTemplateUri .'/js/mzgetquotations.js', array('jquery'), VERSION);

    if ( is_page_template( 'page-templates/page-stockinfo.php' ) ) {
        wp_enqueue_script('highstock', 'https://code.highcharts.com/stock/highstock.js', array('jquery'), VERSION);
        wp_enqueue_script('exporting', 'https://code.highcharts.com/stock/modules/exporting.js', array('jquery'), VERSION);
        wp_enqueue_script('export_data', 'https://code.highcharts.com/stock/modules/export-data.js', array('jquery'), VERSION);
    }
    // Caso tenha cotações na HOME mantenha esse script fora da condicional anterior
    wp_enqueue_script('mziq_stockinfo', 'https://s3.amazonaws.com/mz-prd-stockinfo/assets/js/mziq_stockinfo.min.js', array('jquery'), VERSION);

    if( is_page_template( 'page-templates/page-portfolio.php' ) ) {
        wp_enqueue_script('js_isotope', 'https://npmcdn.com/isotope-layout@3/dist/isotope.pkgd.js', array('jquery'), VERSION);
    }
    
    if (ICL_LANGUAGE_CODE == 'pt-br') {
        wp_enqueue_script('jquery_ui_pt_br', get_template_directory_uri() .'/js/i18n/datepicker-pt-BR.js', array('jquery'), VERSION);
    }

    if (ICL_LANGUAGE_CODE == 'en') {
        wp_enqueue_script('datepicker_en_GB', get_template_directory_uri() .'/js/i18n/datepicker-en-GB.js', array('jquery'), VERSION);
    }

    if (ICL_LANGUAGE_CODE == 'es') {
        wp_enqueue_script('datepicker_es', get_template_directory_uri() .'/js/i18n/datepicker-es.js', array('jquery'), VERSION);
    }
}
add_action('wp_enqueue_scripts', 'wpmziq_theme_js');
?>