<?php
/*
Plugin Name: As Franchise
Plugin URI: http://www.dselva.co.in/franchise
Description: A brief description of the Plugin.
Version: 0.1
Author: Anurag
Author URI: http://www.dselva.co.in
Plugin Type: Piklist
License: GPL2
*/
?>
<?php

add_action('init', 'my_init_function');
function my_init_function()
{
  if(is_admin())
  {
   include_once('checker/class-piklist-checker.php');

   if (!piklist_checker::check(__FILE__))
   {
     return;
   }
  }
}

add_filter('piklist_post_types', 'franchise_post_type');
function franchise_post_type($post_types)
{
  $post_types['franchise'] = array(
							    'labels' 		=> piklist('post_type_labels', 'Franchise')
							    ,'public' 		=> true
							    ,'has_archive' 	=> true
							    ,'menu_icon' 	=> 'dashicons-groups'
							    ,'rewrite' 		=> array(
							      'slug' 		=> 'franchise'
							    )
							    ,'supports' 	=> array(
										    	'title',
										      	'thumbnail'
										    )
							    ,'hide_meta_box' => array(
										      'slug'
										      ,'author'
										      ,'revisions'
										      ,'comments'
										      ,'commentstatus'
										    )

  );

  return $post_types;
}

add_filter('piklist_taxonomies', 'cpt_franchise_taxo');
function cpt_franchise_taxo($taxonomies)	{
	$taxonomies[] = array(
		'post_type' => 'franchise'
		,'name' => 'segments'
		,'show_admin_column' => true
		,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
		,'configuration' => array(
								'hierarchical' => true
								,'labels' => piklist('taxonomy_labels', 'Segments')
								// ,'hide_meta_box' => true
								,'show_admin_column' => true
								,'show_ui' => true
								,'query_var' => true
								,'rewrite' => array(
													'slug' => 'segments'
								)
		)
	);

	$taxonomies[] = array(
		'post_type' => 'franchise'
		,'name' => 'locations'
		,'show_admin_column' => true
		,'page_icon' => plugins_url('piklist/parts/img/piklist-page-icon-32.png')
		,'configuration' => array(
								'hierarchical' => true
								,'labels' => piklist('taxonomy_labels', 'Locations')
								#,'hide_meta_box' => true
								#,'show_admin_column' => true
								,'show_ui' => true
								,'query_var' => true
								,'rewrite' => array(
													'slug' => 'locations'
								)
		)
	);

	return $taxonomies;
}