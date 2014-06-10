<?php

/**
 * Socials
 * Display social links into sidebar.
 *
 * @package		SpyroPress
 * @category	Widgets
 * @author		SpyroSol
 */

class SpyroPress_Widget_Social_Icons extends SpyropressWidget {

    /**
     * Constructor
     */
    function __construct() {

        // Widget variable settings.
        $this->cssclass = 'social-icons';
        $this->description = __( 'Display social links into sidebar.', 'spyropress' );
        $this->id_base = 'social_icons';
        $this->name = __( 'Spyropress: Social Icons', 'spyropress' );
        
        $this->templates['style2'] = array(
            'class' => 'pull-top',
            'label' => 'Space from top'
        );
        
        $this->fields = array(

            array(
                'label' => 'Styles',
                'id' => 'template',
                'type' => 'select',
                'options' => $this->get_option_templates()
            ),
            
            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text',
            ),
            
            array(
                'id' => 'socials',
                'type' => 'repeater',
                'item_title' => 'network',
                'fields' => array(
                    
                    array(
                        'label' => 'Network',
                        'id' => 'network',
                        'type' => 'select',
                        'options' => spyropress_get_options_social()
                    ),
                    
                    array(
                    	'label' => 'URL',
                    	'id' => 'url',
                    	'type' => 'text'
                    )
                )
            ),            
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        extract( $args ); extract( spyropress_clean_array( $instance ) );

        // get view to render
        include $this->get_view();
    }
} // class SpyroPress_Widget_TextPhoto

register_widget( 'SpyroPress_Widget_Social_Icons' );
?>