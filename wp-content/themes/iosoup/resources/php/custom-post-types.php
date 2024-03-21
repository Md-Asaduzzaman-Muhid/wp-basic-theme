<?php

/**
 * Registers a custom post type.
 */
function prefix_register_post_type()
{
	register_post_type(
		'portfolio',
		array(
			'labels'        => array(
				'name'               => __('Portfolio', 'text_domain'),
				'singular_name'      => __('Portfolio', 'text_domain'),
				'menu_name'          => __('Portfolio', 'text_domain'),
				'name_admin_bar'     => __('Portfolio Item', 'text_domain'),
				'all_items'          => __('All Items', 'text_domain'),
				'add_new'            => _x('Add New', 'portfolio', 'text_domain'),
				'add_new_item'       => __('Add New Item', 'text_domain'),
				'edit_item'          => __('Edit Item', 'text_domain'),
				'new_item'           => __('New Item', 'text_domain'),
				'view_item'          => __('View Item', 'text_domain'),
				'search_items'       => __('Search Items', 'text_domain'),
				'not_found'          => __('No items found.', 'text_domain'),
				'not_found_in_trash' => __('No items found in Trash.', 'text_domain'),
				'parent_item_colon'  => __('Parent Items:', 'text_domain'),
			),
			'public'        => true,
			'menu_position' => 6,
			'menu_icon'		=> 'dashicons-format-gallery',
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
				'author'
			),
			'taxonomies'    => array(
				'portfolio_categories',
			),
			'has_archive'   => true,
			'rewrite'       => array(
				'slug' => 'portfolio',
			),
		)
	);
	register_post_type(
		'blog',
		array(
			'labels'        => array(
				'name'               => __('Blog', 'text_domain'),
				'singular_name'      => __('Blog', 'text_domain'),
				'menu_name'          => __('Blog', 'text_domain'),
				'name_admin_bar'     => __('Blog Item', 'text_domain'),
				'all_items'          => __('All Blogs', 'text_domain'),
				'add_new'            => _x('Add New Blog', 'portfolio', 'text_domain'),
				'add_new_item'       => __('Add New Blog', 'text_domain'),
				'edit_item'          => __('Edit Blog', 'text_domain'),
				'new_item'           => __('New Blog', 'text_domain'),
				'view_item'          => __('View Blog', 'text_domain'),
				'search_items'       => __('Search Blogs', 'text_domain'),
				'not_found'          => __('No Blogs found.', 'text_domain'),
				'not_found_in_trash' => __('No Blogs found in Trash.', 'text_domain'),
				'parent_item_colon'  => __('Parent Blog:', 'text_domain'),
			),
			'public'        => true,
			'menu_position' => 6,
			'menu_icon'		=> 'dashicons-format-gallery',
			'supports'      => array(
				'title',
				'editor',
				'thumbnail',
				'excerpt',
				'custom-fields',
				'author'
			),
			'taxonomies'    => array(
				'blog_categories',
			),
			'has_archive'   => true,
			'rewrite'       => array(
				'slug' => 'blog',
			),
		)
	);
	register_post_type( 'job',
		array(
		'labels' => array(
			'name' => __( 'Jobs' ),
			'singular_name' => __( 'Job' ),
		),
		'public' => true,
		'menu_icon'	=> 'dashicons-id-alt',
		'has_archive' => false,
		'rewrite' => array('slug' => 'jobs'),
		'supports' => array( 'title' ,'editor','custom-fields', 'author')
		)
	);
	register_post_type( 'testimonial',
	array(
	'labels' => array(
		'name' => __( 'Testimonials' ),
		'singular_name' => __( 'Testimonial' ),
	),
	'public' => true,
	'menu_icon'	=> 'dashicons-id-alt',
	'has_archive' => false,
	'rewrite' => array('slug' => 'testimonials'),
	'supports' => array( 'title' ,'editor', 'thumbnail')
	)
);
    //     register_post_type(
	// 	'faq',
	// 	array(
	// 		'labels'        => array(
	// 			'name'               => __('Faq', 'text_domain'),
	// 			'singular_name'      => __('Faq', 'text_domain'),
	// 			'menu_name'          => __('Faq', 'text_domain'),
	// 			'name_admin_bar'     => __('Faq Item', 'text_domain'),
	// 			'all_items'          => __('All Items', 'text_domain'),
	// 			'add_new'            => _x('Add New', 'faq', 'text_domain'),
	// 			'add_new_item'       => __('Add New Item', 'text_domain'),
	// 			'edit_item'          => __('Edit Item', 'text_domain'),
	// 			'new_item'           => __('New Item', 'text_domain'),
	// 			'view_item'          => __('View Item', 'text_domain'),
	// 			'search_items'       => __('Search Items', 'text_domain'),
	// 			'not_found'          => __('No items found.', 'text_domain'),
	// 			'not_found_in_trash' => __('No items found in Trash.', 'text_domain'),
	// 			'parent_item_colon'  => __('Parent Items:', 'text_domain'),
	// 		),
	// 		'public'        => true,
	// 		'menu_position' => 7,
	// 		'menu_icon'		=> 'dashicons-editor-help',
	// 		'supports'      => array(
	// 			'title',
	// 			'editor',
	// 			'thumbnail',
	// 			'excerpt',
	// 			'custom-fields',
	// 			'author'
	// 		),
	// 		'taxonomies'    => array(
	// 			'faq_categories',
	// 		),
	// 		'has_archive'   => true,
	// 		'rewrite'       => array(
	// 			'slug' => 'faq',
	// 		),
	// 	)
	// );

}

add_action('init', 'prefix_register_post_type');



/**
 * Registers a custom taxonomy.
 */
function prefix_register_taxonomy()
{
	register_taxonomy(
		'portfolio_categories',
		array(
			'portfolio',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'portfolio', 'text_domain'),
				'singular_name'     => _x('Category', 'portfolio', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
                        'show_ui' => true,
                        'show_admin_column' => true,
                        'query_var' => true,
			'rewrite'           => array(
				'slug' => 'portfolio/category',
			),
		)
	);
	register_taxonomy(
		'blog_categories',
		array(
			'blog',
		),
		array(
			'labels'            => array(
				'name'              => _x('Categories', 'portfolio', 'text_domain'),
				'singular_name'     => _x('Category', 'portfolio', 'text_domain'),
				'menu_name'         => __('Categories', 'text_domain'),
				'all_items'         => __('All Categories', 'text_domain'),
				'edit_item'         => __('Edit Category', 'text_domain'),
				'view_item'         => __('View Category', 'text_domain'),
				'update_item'       => __('Update Category', 'text_domain'),
				'add_new_item'      => __('Add New Category', 'text_domain'),
				'new_item_name'     => __('New Category Name', 'text_domain'),
				'parent_item'       => __('Parent Category', 'text_domain'),
				'parent_item_colon' => __('Parent Category:', 'text_domain'),
				'search_items'      => __('Search Categories', 'text_domain'),
			),
			'show_admin_column' => true,
			'hierarchical'      => true,
                        'show_ui' => true,
                        'show_admin_column' => true,
                        'query_var' => true,
			'rewrite'           => array(
				'slug' => 'blog/category',
			),
		)
	);
    //     register_taxonomy(
	// 	'faq_categories',
	// 	array(
	// 		'faq',
	// 	),
	// 	array(
	// 		'labels'            => array(
	// 			'name'              => _x('Categories', 'faq', 'text_domain'),
	// 			'singular_name'     => _x('Category', 'faq', 'text_domain'),
	// 			'menu_name'         => __('Categories', 'text_domain'),
	// 			'all_items'         => __('All Categories', 'text_domain'),
	// 			'edit_item'         => __('Edit Category', 'text_domain'),
	// 			'view_item'         => __('View Category', 'text_domain'),
	// 			'update_item'       => __('Update Category', 'text_domain'),
	// 			'add_new_item'      => __('Add New Category', 'text_domain'),
	// 			'new_item_name'     => __('New Category Name', 'text_domain'),
	// 			'parent_item'       => __('Parent Category', 'text_domain'),
	// 			'parent_item_colon' => __('Parent Category:', 'text_domain'),
	// 			'search_items'      => __('Search Categories', 'text_domain'),
	// 		),
	// 		'show_admin_column' => true,
	// 		'hierarchical'      => true,
    //                     'show_ui' => true,
    //                     'show_admin_column' => true,
    //                     'query_var' => true,
	// 		'rewrite'           => array(
	// 			'slug' => 'faq/category',
	// 		),
	// 	)
	// );

}

add_action('init', 'prefix_register_taxonomy', 0);
