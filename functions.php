<?php 
/** CONSTANTS **/
define("MZ_AJAX_LOGG_PREFFIX", "wp_ajax_");
define("MZ_AJAX_ANON_PREFFIX", "wp_ajax_nopriv_");
define("MZ_POST_LOGG_PREFFIX", "admin_post_");
define("MZ_POST_ANON_PREFFIX", "admin_post_nopriv_");
define('VERSION', time());
define("LANG_DOMAIN", "bc_fund_ri");

remove_action( 'wp_head', 'remote_login_js_loader' );

/** INCLUDES **/
function includeDir($path) {
    $dir      = new RecursiveDirectoryIterator($path);
    $iterator = new RecursiveIteratorIterator($dir);
    foreach ($iterator as $file) {
        $fname = $file->getFilename();
        if (preg_match('%\.php$%', $fname)) {
            require_once($file->getPathname());
        }
    }
}

includeDir(__DIR__.'/includes/');

// Número de posts do tipo 'news' (Paginação)
// add_action('pre_get_posts', function ($q) {
//     if (!is_admin() && $q->is_main_query() && $q->is_post_type_archive('noticia')) {
//         $q->set('posts_per_page', 2);
//     }
// });

// // Número de posts do tipo 'events' (Paginação)
// add_action('pre_get_posts', function ($q) {
//     if (!is_admin() && $q->is_main_query() && $q->is_post_type_archive('events')) {
//         $q->set('posts_per_page', 10);
//     }
// });

// // Número de posts do tipo 'events' (Paginação)
// add_action('pre_get_posts', function ($q) {
//     if (!is_admin() && $q->is_main_query() && $q->is_post_type_archive('events')) {
//         $q->set('posts_per_page', 10);
//     }
// });

// //Seta os emails como html
// add_filter('wp_mail_content_type', 'set_html_content_type');

// add_filter('acf/settings/remove_wp_meta_box', '__return_false');

// //Configura as querystrings permitidas no site
// function add_query_vars($aVars)
// {
//     $aVars[] = "mz-cr-quarter";
//     $aVars[] = "mz-cr-year";
//     $aVars[] = "mz-cr-sent";
//     $aVars[] = "sent";
//     return $aVars;
// }
// add_filter('query_vars', 'add_query_vars');

// /** Kit Investidor **/
// function get_kit_investidor_zip()
// {
//     //TODO: Check which path it saves and fix it!
//     $files_to_zip = array();
//     //EXAMPLE: array_push($files_to_zip, "https://upload.wikimedia.org/wikipedia/pt/0/02/Homer_Simpson_2006.png");
//     # create new zip object
//     $zip = new ZipArchive();

//     # create a temp file & open it
//     $tmp_file = tempnam('.', '');
//     $zip->open($tmp_file, ZipArchive::CREATE);

//     $name = $_GET['investorkit-item'];

//     # loop through each file
//     foreach ($name as $file) {
        
//         $download_file = get_attached_file($file); // Returns the File Path
//         $download_file_contents = file_get_contents($download_file); // Returns the file Content

//         #add it to the zip
//         $zip->addFromString(basename($download_file), $download_file_contents); //Adds content to zip archive
//     }
    
//     # close zip
//     $zip->close();
    
//     # send the file to the browser as a download
//     header('Content-disposition: attachment; filename="InvestorKit.zip"');
//     header('Content-type: application/zip');
//     readfile($tmp_file);
//     unlink($tmp_file);

//     die();
// }
// add_action("wp_ajax_get_kit_investidor_zip", "get_kit_investidor_zip");
// add_action("wp_ajax_nopriv_get_kit_investidor_zip", "get_kit_investidor_zip");

// /**
//  * Filter the except length to 20 words.
//  *
//  * @param int $length Excerpt length.
//  * @return int (Maybe) modified excerpt length.
//  */
// function wpdocs_custom_excerpt_length( $length ) {
//     return 7;
// }
// add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

// add_filter('acf/settings/remove_wp_meta_box', '__return_true');




// /**
//  * Convert values of ACF core date time pickers from Y-m-d H:i:s to timestamp
//  * @param  string $value   unmodified value
//  * @param  int    $post_id post ID
//  * @param  object $field   field object
//  * @return string          modified value
//  */
// function acf_save_as_timestamp( $value, $post_id, $field  ) {
//     if( $value ) {
//         $value = strtotime( $value );
//     }

//     return $value;    
// }

// add_filter( 'acf/update_value/type=date_time_picker', 'acf_save_as_timestamp', 10, 3 );

// /**
//  * Convert values of ACF core date time pickers from timestamp to Y-m-d H:i:s
//  * @param  string $value   unmodified value
//  * @param  int    $post_id post ID
//  * @param  object $field   field object
//  * @return string          modified value
//  */
// function acf_load_as_timestamp( $value, $post_id, $field  ) {
//     if( $value ) {
//         $value = date( 'Y-m-d H:i:s', $value );
//     }

//     return $value;    
// }

// add_filter( 'acf/load_value/type=date_time_picker', 'acf_load_as_timestamp', 10, 3 );



// //CPT Glossario
// register_post_type( 'glossario',
//         array(
//             'labels'        => array(
//                 'name'          => __( 'Glossário' ),
//                 'singular_name' => __( 'Palavra' ),
//                 'edit_item'     => __( 'Editar Palavra' ),
//                 'add_new_item'  => __( 'Nova Palavra' )
//             ),
//             'menu_icon'     => 'dashicons-editor-textcolor',
//             'public'        => TRUE,
//             'hierarchical'  => TRUE, 
//             'has_archive'   => TRUE,
//             'rewrite'       => array( 'slug' => 'glossario-', 'with_front' => FALSE ),
//             'menu_position' => 5,
//             'supports'      => array( 'title', 'editor', 'page-attributes' )
//         )
//     );

// //cria taxonomia para categorias
// // register_taxonomy(
// //   'Tipo_arquivos', 'arquivos',
// //   array(
// //     'label' => "Categoria",
// //     'singular_label' => "Categoria",
// //     'rewrite' => true,
// //     'hierarchical' => true,
// //     'query_var' => true
// //   )
// // );
// // flush_rewrite_rules();

// // Navigation - update coming from twentythirteen
// function post_navigation() {
// 	echo '<div class="navigation">';
// 	echo '<div class="row">';
// 	echo '<div class="col-sm">';
// 	echo '	<div class="next-posts float-left">'.get_next_posts_link('&laquo; Posts mais antigos').'</div>';
// 	echo '</div>';
// 	echo '<div class="col-sm">';
// 	echo '	<div class="prev-posts float-right">'.get_previous_posts_link('Posts mais novos &raquo;').'</div>';
// 	echo '</div>';
// 	echo '</div>';
// 	echo '</div>';
// }

// // Numeric Navigation
// function post_navigation_numbers() {
 
// 	if( is_singular() )
// 			return;
// 	global $wp_query;
// 	/** Stop execution if there's only 1 page */
// 	if( $wp_query->max_num_pages <= 1 )
// 			return;
// 	$paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
// 	$max   = intval( $wp_query->max_num_pages );
// 	/** Add current page to the array */
// 	if ( $paged >= 1 )
// 			$links[] = $paged;
// 	/** Add the pages around the current page to the array */
// 	if ( $paged >= 3 ) {
// 			$links[] = $paged - 1;
// 			$links[] = $paged - 2;
// 	}
// 	if ( ( $paged + 2 ) <= $max ) {
// 			$links[] = $paged + 2;
// 			$links[] = $paged + 1;
// 	}
// 	echo '<div class="numeric-navigation"><ul class="pagination">' . "\n";
// 	/** Previous Post Link */
// 	if ( get_previous_posts_link() )
// 			printf( '<li class="page-item">%s</li>' . "\n", get_previous_posts_link('<span aria-hidden="true">&laquo;</span>') );
// 	/** Link to first page, plus ellipses if necessary */
// 	if ( ! in_array( 1, $links ) ) {
// 			$class = 1 == $paged ? ' class="active"' : '';
// 			printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( 1 ) ), '1' );
// 			if ( ! in_array( 2, $links ) )
// 					echo '<li>…</li>';
// 	}
// 	/** Link to current page, plus 2 pages in either direction if necessary */
// 	sort( $links );
// 	foreach ( (array) $links as $link ) {
// 			$class = $paged == $link ? ' class="active"' : '';
// 			printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $link ) ), $link );
// 	}
// 	/** Link to last page, plus ellipses if necessary */
// 	if ( ! in_array( $max, $links ) ) {
// 			if ( ! in_array( $max - 1, $links ) )
// 					echo '<li>…</li>' . "\n";
// 			$class = $paged == $max ? ' class="active"' : '';
// 			printf( '<li%s class="page-item"><a href="%s" class="page-link">%s</a></li>' . "\n", $class, esc_url( get_pagenum_link( $max ) ), $max );
// 	}
// 	/** Next Post Link */
// 	if ( get_next_posts_link() )
// 			printf( '<li class="page-item">%s</li>' . "\n", get_next_posts_link('<span aria-hidden="true">»</span>') );
// 	echo '</ul></div>' . "\n";
// }
// // Add class on the link previous and next post link
// add_filter('next_posts_link_attributes', 'posts_link_attributes');
// add_filter('previous_posts_link_attributes', 'posts_link_attributes');