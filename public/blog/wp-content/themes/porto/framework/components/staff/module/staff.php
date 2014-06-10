<?php

/**
 * Module: Staff
 * Display a list of staff
 *
 * @author 		SpyroSol
 * @category 	BuilderModules
 * @package 	Spyropress
 */

class Spyropress_Module_Staff extends SpyropressBuilderModule {

    public function __construct() {

        // Widget variable settings.
        $this->path = dirname( __FILE__ );
        $this->cssclass = 'module-staff';
        $this->description = __( 'Display a list of staff.', 'spyropress' );
        $this->id_base = 'spyropress_staff';
        $this->name = __( 'Our Team', 'spyropress' );

        // Fields
        $this->fields = array(
        
            array(
                'label' => __( 'Title', 'spyropress' ),
                'id' => 'title',
                'type' => 'text',
            ),
            
            array(
                'label' => 'Animation',
                'id' => 'animation',
                'type' => 'select',
                'options' => spyropress_get_options_animation()
            ),

            array(
                'label' => __( 'Number of items', 'spyropress' ),
                'id' => 'limit',
                'type' => 'text',
                'std' => 4
            ),
            
            array(
                'id' => 'enable',
                'type' => 'checkbox',
                'options' => array(
                    1 => 'Show filters'
                )
            ),
        );

        $this->create_widget();
    }

    function widget( $args, $instance ) {

        // extracting info
        extract( $args );

        // get view to render
        include $this->get_view();
    }

    function query( $atts, $content = null ) {

        $default = array (
            'post_type' => 'staff',
            'limit' => -1,
            'pagination' => false,
            'callback' => array( $this, 'generate_item' ),
            'row' => false,
            'columns' => false
        );
        $atts = wp_parse_args( $atts, $default );

        if ( $content )
            return token_repalce( $content, spyropress_query_generator( $atts ) );

        return spyropress_query_generator( $atts );
    }
    
    function generate_item( $post_ID, $atts ) {

        // these arguments will be available from inside $content
        $image = array(
            'post_id' => $post_ID,
            'echo' => false,
            'width' => 9999
        );
        $image_tag = get_image( $image );
                
        $info = get_post_meta( $post_ID, '_mate_info', true );
        
        $socials = '';
        if( isset( $info['socials'] ) && !empty( $info['socials'] ) ) {
            $socials .= '<span class="thumb-info-social-icons">';
            
            foreach( $info['socials'] as $item ) {
                $social_title = spyropress_beautify( $item['network'] );
                $socials .= '<a rel="tooltip" data-placement="bottom" href="' . $item['url'] . '" data-original-title="' . $social_title . '"><i class="icon-' . $item['network'] . '"></i><span>' . $social_title . '</span></a> ';
            }
            
            $socials .= '</span>';
        }
        
        $terms = get_the_terms( $post_ID, 'designation' );
        $terms =  ( !empty( $terms ) && !is_wp_error( $terms ) ) ? current( $terms ) : '';
    
        // item tempalte
        return '
        <li class="span3">
			<div class="team-item thumbnail">
				<a href="#" class="thumb-info team">
					' . $image_tag . '
					<span class="thumb-info-title">
						<span class="thumb-info-inner">' . get_the_title() . '</span>
						<span class="thumb-info-type">' . $terms->name . '</span>
					</span>
				</a>
				<span class="thumb-info-caption">
					' . $info['about'] . '
					' . $socials . '
				</span>
			</div>
		</li>';
    }
    
    function generate_filter_item( $post_ID, $atts ) {

        // these arguments will be available from inside $content
        $image = array(
            'post_id' => $post_ID,
            'echo' => false,
            'width' => 9999
        );
        $image_tag = get_image( $image );
                
        $info = get_post_meta( $post_ID, '_mate_info', true );
        
        $socials = '';
        if( isset( $info['socials'] ) && !empty( $info['socials'] ) ) {
            $socials .= '<span class="thumb-info-social-icons">';
            
            foreach( $info['socials'] as $item ) {
                $social_title = spyropress_beautify( $item['network'] );
                $socials .= '<a rel="tooltip" data-placement="bottom" href="' . $item['url'] . '" data-original-title="' . $social_title . '"><i class="icon-' . $item['network'] . '"></i><span>' . $social_title . '</span></a> ';
            }
            
            $socials .= '</span>';
        }
        
        $terms = get_the_terms( $post_ID, 'designation' );
        $terms =  ( !empty( $terms ) && !is_wp_error( $terms ) ) ? current( $terms ) : '';
            
        // item tempalte
        return '
        <li class="span3 isotope-item ' . $terms->slug . '">
			<div class="team-item thumbnail">
				<a href="#" class="thumb-info team">
					' . $image_tag . '
					<span class="thumb-info-title">
						<span class="thumb-info-inner">' . get_the_title() . '</span>
						<span class="thumb-info-type">' . $terms->name . '</span>
					</span>
				</a>
				<span class="thumb-info-caption">
					' . $info['about'] . '
					' . $socials . '
				</span>
			</div>
		</li>';
    }

}

spyropress_builder_register_module( 'Spyropress_Module_Staff' );
?>