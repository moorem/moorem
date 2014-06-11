<?php
/**
 * Theme Options
 *
 * @author 		SpyroSol
 * @category 	Admin
 * @package 	Spyropress
 */

global $spyropress_theme_settings;

$spyropress_theme_settings['general'] = array(

	array(
        'label' => __( 'General Settings', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'generalsettings',
        'icon' => 'module-icon-general'
    ),
    
    array(
		'label' => __( 'Custom Logo', 'spyropress' ),
        'desc' => __( 'Upload a logo for your site or specify an image URL directly.', 'spyropress' ),
		'id' => 'logo',
        'type' => 'upload'
	),
    
    array(
		'label' => __( 'Custom Favicon', 'spyropress' ),
        'desc' => __( 'Upload a favicon for your site or specify an icon URL directly.<br/>Accepted formats: ico, png, gif<br/>Dimension: 16px x 16px.', 'spyropress' ),
		'id' => 'custom_favicon',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Apple Touch Icon (small)', 'spyropress' ),
        'desc' => __( 'Upload apple favicon.<br/>Accepted formats: png<br/>Dimension: 57px x 57px.', 'spyropress' ),
		'id' => 'apple_small',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Apple Touch Icon (medium)', 'spyropress' ),
        'desc' => __( 'Upload apple favicon.<br/>Accepted formats: png<br/>Dimension: 72px x 72px.', 'spyropress' ),
		'id' => 'apple_medium',
        'type' => 'upload'
	),

    array(
		'label' => __( 'Apple Touch Icon (large)', 'spyropress' ),
        'desc' => __( 'Upload apple favicon.<br/>Accepted formats: png<br/>Dimension: 114px x 114px.', 'spyropress' ),
		'id' => 'apple_large',
        'type' => 'upload'
	),

    array(
        'label' => __( 'Layout Options', 'spyropress' ),
        'type' => 'sub_heading',
    ),

    array(
        'label' => __( 'Theme Layout', 'spyropress' ),
        'id' => 'theme_layout',
        'type' => 'radio_img',
        'desc' => __( 'Select which layout you want for theme.', 'spyropress' ),
		'options' => array(
            'full' => array(
                'title' => __( 'Full Layout', 'spyropress' ),
                'img' => get_panel_img_path( 'layouts/full.png' )
            ),
            'boxed' => array(
                'title' => __( 'Boxed Layout', 'spyropress' ),
                'img' => get_panel_img_path( 'layouts/full.png' )
            )
		),
        'std' => 'full'
    ),

    array(
		'label' => __( 'Reponsiveness', 'spyropress' ),
		'id' => 'responsive',
        'type' => 'checkbox',
        'options' => array(
            '1' => __( 'Deactivate responsive layout', 'spyropress' ),
        )
	),
    
    array(
        'label' => __( 'Search Options', 'spyropress' ),
        'type' => 'sub_heading',
    ),
    
    array(
		'id' => 'google_search',
        'type' => 'checkbox',
        'options' => array(
            1 => 'Enable Google Custom Search Engine'
        )
	),
    
    array(
        'label' => 'Custom Search engine ID',
        'type' => 'text',
        'id' => 'google_cse_id',
    ),

); // End General Settings

$spyropress_theme_settings['header'] = array(

    array(
        'label' => __( 'Header Customization', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'header',
        'icon' => 'module-icon-layout'
    ),
    
    array(
        'label' => 'Header Styles',
        'id' => 'header_style',
        'type' => 'radio_img',
        'class' => 'full-width',
        'options' => array(
            'v1' => array( 'img' => assets_img() . 'framework_assets/header-v1.png' ),
            'v2' => array( 'img' => assets_img() . 'framework_assets/header-v2.png' ),
            'v3' => array( 'img' => assets_img() . 'framework_assets/header-v3.png' ),
            'v4' => array( 'img' => assets_img() . 'framework_assets/header-v4.png' ),
            'v5' => array( 'img' => assets_img() . 'framework_assets/header-v5.png' ),
            'v6' => array( 'img' => assets_img() . 'framework_assets/header-v6.png' ),
        ),
        'std' => 'v1'
    ),
    
    array(
        'label' => 'Social Networks',
        'type' => 'sub_heading'
    ),
    
    array(
        'id' => 'header_social',
        'type' => 'repeater',
        'item_title' => 'network',
        'fields' => array(
            array(
            	'label' => 'URL',
            	'id' => 'url',
            	'type' => 'text'
            ),
            
            array(
                'label' => 'Network',
                'id' => 'network',
                'type' => 'select',
                'options' => spyropress_get_options_social()
            )
        )
    ),
    
    array(
        'label' => 'Search',
        'type' => 'sub_heading'
    ),
    
    array(
		'id' => 'search_disable',
        'type' => 'checkbox',
        'options' => array(
            '1' => __( 'Disable Search Box', 'spyropress' ),
        )
	),
    
    array(
        'label' => 'Search Placerholder',
        'type' => 'text',
        'id' => 'search_placeholder',
        'std' => 'Search...'
    ),
    
    array(
        'label' => 'Top Bar Settings',
        'type' => 'sub_heading'
    ),
    
    array(
        'label' => 'Teaser',
        'type' => 'textarea',
        'id' => 'topbar_teaser',
        'std' => 'Get in touch!',
        'rows' => 5
    ),
    
    array(
        'label' => 'Phone Number',
        'type' => 'text',
        'id' => 'topbar_ph',
        'std' => '(123) 456-7890'
    ),
    
    array(
        'label' => 'Email',
        'type' => 'text',
        'id' => 'topbar_email',
        'std' => 'mail@domain.com'
    ),
    
); // End Header

$spyropress_theme_settings['footer'] = array(

    array(
        'label' => __( 'Footer Customization', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'footer',
        'icon' => 'module-icon-footer'
    ),
    
    array(
        'label' => 'Footer Styles',
        'id' => 'footer_style',
        'type' => 'radio_img',
        'class' => 'full-width',
        'options' => array(
            'v1' => array( 'img' => assets_img() . 'framework_assets/footer-v1.png' ),
            'v2' => array( 'img' => assets_img() . 'framework_assets/footer-v2.png' ),
            'v3' => array( 'img' => assets_img() . 'framework_assets/footer-v3.png' ),
            'v4' => array( 'img' => assets_img() . 'framework_assets/footer-v4.png' )
        ),
        'std' => 'v1'
    ),
    
    
    array(
		'label' => __( 'Ribbon Text', 'spyropress' ),
        'desc' => 'Ribbon area above the footer make empty to disbale.',
        'type' => 'text',
        'id' => 'footer_ribbon',
        'std' => 'Get in Touch'
	),
    
    array(
		'label' => __( 'Footer Logo', 'spyropress' ),
        'type' => 'upload',
        'id' => 'footer_logo'
	),

    array(
		'label' => __( 'Copyrigth Text', 'spyropress' ),
		'id' => 'footer_copyright',
        'type' => 'editor'
	),
    
    array(
		'label' => __( 'About', 'spyropress' ),
        'type' => 'sub_heading'
	),
    
    array(
		'label' => __( 'About Title', 'spyropress' ),
		'id' => 'footer_about_title',
        'type' => 'text'
	),
    
    array(
		'label' => __( 'About Company', 'spyropress' ),
		'id' => 'footer_about',
        'type' => 'editor'
	)    

); // END FOOTER

$spyropress_theme_settings['post'] = array(

    array(
        'label' => __( 'Post Options', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'post',
        'icon' => 'module-icon-post'
    ),

    array(
		'label'    => __( 'Layout', 'spyropress' ),
		'type'    => 'sub_heading'
	),

    array(
		'label' => __( 'Blog Layout', 'spyropress' ),
        'id' => 'blog_layout',
		'type' => 'select',
		'options' => array(
            'full' => __( 'Full Width', 'spyropress' ),
            'large' => __( 'Large Image', 'spyropress' ),
            'medium' => __( 'Medium Image', 'spyropress' ),
        ),
		'std' => 'full'
	),
    
    array(
		'label' => __( 'Sidebar Position', 'spyropress' ),
        'id' => 'blog_sidebar_position',
		'type' => 'select',
		'options' => array(
            'left' => __( 'Left Side', 'spyropress' ),
            'right' => __( 'Right Side', 'spyropress' )
        ),
		'std' => 'left'
	),
    
    array(
		'label' => __( 'Single Sidebar Position', 'spyropress' ),
        'id' => 'blog_single_sidebar_position',
		'type' => 'select',
		'options' => array(
            'left' => __( 'Left Side', 'spyropress' ),
            'right' => __( 'Right Side', 'spyropress' )
        ),
		'std' => 'left'
	),

    array(
		'label' => __( 'Excerpt Settings', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
        'label' => __( 'Length by', 'spyropress' ),
        'id' => 'excerpt_by',
        'type' => 'select',
        'options' => array (
            '' => '',
            'words' => __( 'Words', 'spyropress' ),
            'chars' => __( 'Character', 'spyropress' ),
        ),
        'std' => 'words'
	),

    array(
		'label' => __( 'Length', 'spyropress' ),
        'desc' => __( 'Set the length of excerpt.', 'spyropress' ),
		'id' => 'excerpt_length',
        'type' => 'text',
        'std' => 60
	),

    array(
		'label' => __( 'Ellipsis', 'spyropress' ),
        'desc' => __( 'This is the description field, again good for additional info.', 'spyropress' ),
		'id' => 'excerpt_ellipsis',
        'type' => 'text',
        'std' => '&nbsp;[...]'
	),

    array(
		'label' => __( 'Before Text', 'spyropress' ),
        'desc' => __( 'This is the description field, again good for additional info.', 'spyropress' ),
		'id' => 'excerpt_before_text',
        'type' => 'text',
        'std' => '<p>'
	),

    array(
		'label' => __( 'After Text', 'spyropress' ),
        'desc' => __( 'This is the description field, again good for additional info.', 'spyropress' ),
		'id' => 'excerpt_after_text',
        'type' => 'text',
        'std' => '</p>'
	),

    array(
		'label' => __( 'Read More', 'spyropress' ),
		'id' => 'excerpt_link_to_post',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Enable or disable Read more link.', 'spyropress' ),
        )
	),

    array(
		'label' => __( 'Link Text', 'spyropress' ),
        'desc' => __( 'A text for Read More button.', 'spyropress' ),
		'id' => 'excerpt_link_text',
        'type' => 'text',
        'std' => __( 'Read more', 'spyropress' )
	),

    array(
		'label' => __( 'Author Box', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
        'desc' => __( 'A box to display about author.', 'spyropress' ),
		'id' => 'meta_authorbox',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Disable author box.', 'spyropress' ),
        ),
        'std' => '1'
	),

    array(
		'label' => __( 'Author Title', 'spyropress' ),
        'desc' => __( 'Write the title.', 'spyropress' ),
		'id' => 'authorbox_title',
        'type' => 'text',
        'std' => __( 'About the Author', 'spyropress' )
	),

    array(
		'label' => __( 'Related Posts', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
		'id' => 'related_enable',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Enable related posts.', 'spyropress' ),
        ),
        'std' => '1'
	),

    array(
		'label' => __( 'Related Posts Title', 'spyropress' ),
        'desc' => __( 'Write the title.', 'spyropress' ),
		'id' => 'related_title',
        'type' => 'text',
        'std' => __( 'Related Posts', 'spyropress' )
	),

    array(
		'label' => __( 'Number Of Posts', 'spyropress' ),
        'desc' => __( 'Set the number of related post.', 'spyropress' ),
		'id' => 'related_number',
        'type' => 'range_slider',
        'max' => '20',
        'min' => '1',
        'std' => 4
	),

    array(
		'label' => __( 'Related Posts By', 'spyropress' ),
        'desc' => __( 'Choose the tag or category to show related post.', 'spyropress' ),
        'id' => 'related_by',
		'type' => 'select',
		'options' => array(
            'tags' => __( 'Tags', 'spyropress' ),
            'category' => __( 'Category', 'spyropress' )
        ),
		'std' => 'tags'
	),

    array(
		'label' => __( 'Excerpt Word Count', 'spyropress' ),
        'desc' => __( 'Set the length of word for related post.', 'spyropress' ),
		'id' => 'related_number_excerpt',
        'type' => 'range_slider',
        'max' => '80',
        'min' => '1',
        'std' => 10
	)
    
); // End Blog Settings

$spyropress_theme_settings['portfolio'] = array(

    array(
        'label' => __( 'Portfolio Options', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'portfolio',
        'icon' => 'module-icon-post'
    ),

    array(
		'label' => __( 'Related Work', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
		'id' => 'related_portfolio_enable',
        'type' => 'checkbox',
        'options' => array(
            1 => __( 'Enable related work.', 'spyropress' ),
        ),
        'std' => '1'
	),

    array(
		'label' => __( 'Related Title', 'spyropress' ),
        'desc' => __( 'Write the title.', 'spyropress' ),
		'id' => 'related_portfolio_title',
        'type' => 'text',
        'std' => __( 'Related <strong>Work</strong>', 'spyropress' )
	),

    array(
		'label' => __( 'Number Of items', 'spyropress' ),
        'desc' => __( 'Set the number of related post.', 'spyropress' ),
		'id' => 'related_portfolio_number',
        'type' => 'range_slider',
        'max' => '20',
        'min' => '1',
        'std' => 4
	),

    array(
		'label' => __( 'Related Work By', 'spyropress' ),
        'desc' => __( 'Choose the tag or category to show related portfolio.', 'spyropress' ),
        'id' => 'related_portfolio_by',
		'type' => 'select',
		'options' => array(
            'portfolio_service' => __( 'Services', 'spyropress' ),
            'portfolio_category' => __( 'Category', 'spyropress' )
        ),
		'std' => 'portfolio_category'
	)
    
); // End Blog Settings

$skins = get_option( '_spyropress_porto_skins', array(
    'blue' => 'Blue'
) );

$spyropress_theme_settings['skin'] = array(

	array (
        'label' => __( 'Skins', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'skin',
        'icon' => 'module-icon-styling'
    ),
    
    array(
        'label' => 'Select skin',
        'id' => 'theme_skin',
        'type' => 'select',
        'options' => $skins
    ),

    array(
        'type' => 'skin_generator',
        'id' => 'skins'
	),
    
    array(
        'label' => 'Custom CSS',
        'id' => 'custom_css',
        'class' => 'section-full',
        'type' => 'textarea',
        'rows' => 10
    )
    
); // END Import/Export

$spyropress_theme_settings['translation'] = array(

	array(
        'label' => __( 'Translation', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'translation',
        'icon' => 'module-icon-general'
    ),
    
    array(
		'label' => __( 'Portfolio', 'spyropress' ),
		'type' => 'sub_heading'
	),
    
    array(
		'label' => __( 'Description Title', 'spyropress' ),
		'id' => 'portfolio_desc_title',
        'type' => 'text',
        'std' => __( 'Project <strong>Description</strong>', 'spyropress' )
	),
    
    array(
		'label' => __( 'Preview Title', 'spyropress' ),
		'id' => 'portfolio_preview_title',
        'type' => 'text',
        'std' => __( 'Live Preview', 'spyropress' )
	),
    
    array(
		'label' => __( 'Service Title', 'spyropress' ),
		'id' => 'portfolio_service_title',
        'type' => 'text',
        'std' => __( 'Services', 'spyropress' )
	),
);

$spyropress_theme_settings['plugins'] = array(

	array(
        'label' => __( 'Settings', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'plugins',
        'icon' => 'module-icon-general'
    ),

    array(
		'label' => __( 'Email Settings', 'spyropress' ),
		'type' => 'sub_heading'
	),

    array(
		'label' => __( 'Sender Name', 'spyropress' ),
        'desc' => __( 'For example sender name is "WordPress".', 'spyropress' ),
		'id' => 'mail_from_name',
        'type' => 'text'
	),

    array(
		'label' => __( 'Sender Email Address', 'spyropress' ),
        'desc' => __( 'For example sender email address is wordpress@yoursite.com.', 'spyropress' ),
		'id' => 'mail_from_email',
        'type' => 'text'
	),
    
    array( 'label' => 'Twitter oAuth Settings', 'type' => 'sub_heading' ),
                
    array(
        'label' => __( 'Consumer Key', 'spyropress' ),
        'id' => 'twitter_consumer_key',
        'type' => 'text'
    ),
    
    array(
        'label' => __( 'Consumer Secret', 'spyropress' ),
        'id' => 'twitter_consumer_secret',
        'type' => 'text'
    ),
    
    array(
        'label' => __( 'Access Token', 'spyropress' ),
        'id' => 'twitter_access_token',
        'type' => 'text'
    ),
    
    array(
        'label' => __( 'Access Token Secret', 'spyropress' ),
        'id' => 'twitter_access_token_secret',
        'type' => 'text'
    ),
    
    array(
        'type' => 'raw_info',
        'desc' => '<a href="https://dev.twitter.com/apps" target="_blank">Create an Application on Twitter</a>, once your application is created Twitter will generate your Oauth key and access tokens. Paste them below.'
    ),

    array(
		'label' => __( 'WP-Pagenavi', 'spyropress' ),
		'type' => 'toggle'
	),

    array(
		'label' => __( 'Text For Current Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'current_text',
        'desc' => '%PAGE_NUMBER% - '.__( 'The page number.', 'spyropress' ),
        'std' => '%PAGE_NUMBER%'
	),

    array(
		'label' => __( 'Text For Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'page_text',
        'desc' => '%PAGE_NUMBER% - ' .__( 'The page number.', 'spyropress' ),
        'std' => '%PAGE_NUMBER%'
	),

    array(
		'label' => __( 'Text For First Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'first_text',
        'desc' => '%TOTAL_PAGES% - ' .__( 'The total number of pages.', 'spyropress' ),
        'std' => __( '&laquo; First', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Last Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'last_text',
        'desc' => '%TOTAL_PAGES% - ' .__( 'The total number of pages.', 'spyropress' ),
        'std' => __( 'Last &raquo;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Previous Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'prev_text',
        'std' => __( '&laquo;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Next Page', 'spyropress' ),
		'type' => 'text',
        'id' => 'next_text',
        'std' => __( '&raquo;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Previous &hellip;', 'spyropress' ),
		'type' => 'text',
        'id' => 'dotleft_text',
        'std' => __( '&hellip;', 'spyropress' )
	),

    array(
		'label' => __( 'Text For Next &hellip;', 'spyropress' ),
		'type' => 'text',
        'id' => 'dotright_text',
        'std' => __( '&hellip;', 'spyropress' )
    ),

    array(
        'label' => __( 'Page Navigation Text', 'spyropress' ),
        'id' => 'wp-page-pager',
        'type' => 'sub_heading',
        'desc' => __( 'Leaving a field blank will hide that part of the navigation.', 'spyropress' ),
    ),

    array(
		'label' => __( 'Always Show Page Navigation', 'spyropress' ),
		'type' => 'checkbox',
        'id' => 'always_show',
        'options' => array(
            1 => __( 'Show navigation even if there\'s only one page.', 'spyropress' ),
        )
    ),

    array(
		'label' => __( 'Number Of Pages To Show', 'spyropress' ),
		'type' => 'text',
        'id' => 'num_pages',
        'std' => 5
    ),

    array(
		'label' => __( 'Number Of Larger Page Numbers To Show', 'spyropress' ),
		'type' => 'text',
        'id' => 'num_larger_page_numbers',
        'desc' => __( 'Larger page numbers are in addition to the normal page numbers. They are useful when there are many pages of posts.', 'spyropress' ),
        'std' => 3
    ),

    array(
		'label' => __( 'Show Larger Page Numbers In Multiples Of', 'spyropress' ),
		'type' => 'text',
        'id' => 'larger_page_numbers_multiple',
        'desc' => __( 'For example, if mutiple is 5, it will show: 5, 10, 15, 20, 25', 'spyropress' ),
        'std' => 10
    ),

    array(
		'type' => 'toggle_end'
	),

); // END CONNECT

$spyropress_theme_settings['separator'] = array(

	array ( 'type' => 'separator' )

); // END Separator

$spyropress_theme_settings['import'] = array(

	array (
        'label' => __( 'Import / Export', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'import-export',
        'icon' => 'module-icon-import'
    ),

    array(
        'type' => 'import',
	),
    
    array(
        'type' => 'export',
	)
    
); // END Import/Export

$spyropress_theme_settings['support'] = array(

	array (
        'label' => __( 'Support', 'spyropress' ),
        'type' => 'heading',
        'slug' => 'support',
        'icon' => 'module-icon-support'
    ),

    array(
		'id' => 'admin/docs-support.php',
        'type' => 'include'
	)

); // END Separator
?>