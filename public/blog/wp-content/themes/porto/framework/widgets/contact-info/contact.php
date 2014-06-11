<?php

/**
 * Contact Info Widget
 * Quickly add contact info to your sidebar e.g. address, phone, email.
 *
 * @package		SpyroPress
 * @category	Widgets
 * @author		SpyroSol
 */

class SpyroPress_Widget_Contact extends SpyropressWidget {

    private static $counter = 1;

    /**
     * Constructor
     */
    function __construct() {

        // Widget variable settings.
        $this->path = dirname( __file__ );
        $this->cssclass = 'contact-details';
        $this->description = __( 'Quickly add contact info to your sidebar e.g. address, phone, email.', 'spyropress' );
        $this->id_base = 'spyropress_contact';
        $this->name = __( 'Spyropress: Contact Info', 'spyropress' );
        
        $this->templates['style2'] = array(
            'view' => 'style2.php',
            'label' => 'Style 2'
        );

        $this->fields = array(
            
            array(
                'label' => 'Templates',
                'id' => 'template',
                'type' => 'select',
                'class' => 'enable_changer section-full',
                'options' => $this->get_option_templates()
            ),
            
            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'Address', 'spyropress' ),
                'id' => 'address',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'Phone', 'spyropress' ),
                'id' => 'phone',
                'type' => 'text',
            ),
            
            array(
                'label' => __( 'International', 'spyropress' ),
                'id' => 'int_phone',
                'type' => 'text',
                'class' => 'template style2 section-full'
            ),
            
            array(
                'label' => __( 'Fax', 'spyropress' ),
                'id' => 'fax',
                'type' => 'text',
                'class' => 'template style2 section-full'
            ),
            
            array(
                'label' => __( 'Email', 'spyropress' ),
                'id' => 'email',
                'type' => 'text',
            )
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        extract( $args ); extract( spyropress_clean_array( $instance ) );

        // get view to render
        include $this->get_view( $template );
    }
} // class SpyroPress_Widget_Contact

register_widget( 'SpyroPress_Widget_Contact' );
?>