<?php

/**
 * Shortcodes
 */

init_shortcode();
function init_shortcode() {
    
    $shortcodes = array(
        'lead'          => 'spyropress_sc_lead',
        'inverted'      => 'spyropress_sc_inverted',
        'alt_font'      => 'spyropress_sc_alt_font',
        'promo_img'     => 'spyropress_sc_promo_img',
        'button'        => 'spyropress_sc_button',
        'btn_link'      => 'spyropress_sc_link_button',
        'img'           => 'spyropress_sc_img',
        'label'         => 'spyropress_sc_label_badge',
        'badge'         => 'spyropress_sc_label_badge',
        'alerts'        => 'spyropress_sc_alerts',
        'bars'          => 'spyropress_sc_bars',
        'bar'           => 'spyropress_sc_bar',
        'tooltip'       => 'spyropress_sc_tooltip',
        'lightbox'      => 'spyropress_sc_lightbox',
        'inline_list'   => 'spyropress_sc_inline_list',
        'tables'        => 'spyropress_sc_tables',
    );
    
    foreach( $shortcodes as $tag => $func )
        add_shortcode( $tag, $func );
}

function spyropress_sc_lead( $atts = array(), $content = '' ) {

    if( empty( $content ) ) return;
    
    return '<p class="lead">' . spyropress_remove_formatting( $content ) . '</p>';
}

function spyropress_sc_inverted( $atts = array(), $content = '' ) {

    if( empty( $content ) ) return;
    
    $atts = spyropress_clean_array( shortcode_atts( array(
        'animation' => ''
    ), $atts ) );
    
    return '<strong class="inverted"' . spyropress_build_atts( $atts, 'data-appear-' ) . '>' . spyropress_remove_formatting( $content ) . '</strong>';
}

function spyropress_sc_alt_font( $atts = array(), $content = '' ) {

    if( empty( $content ) ) return;
    
    $atts = spyropress_clean_array( shortcode_atts( array(
        'animation' => ''
    ), $atts ) );
    
    return '<span class="alternative-font"' . spyropress_build_atts( $atts, 'data-appear-' ) . '>' . spyropress_remove_formatting( $content ) . '</span>';
}

function spyropress_sc_promo_img( $atts = array(), $content = '' ) {

    if( empty( $content ) ) return;
    
    return '<img class="responsive" src="' . spyropress_remove_formatting( $content ) . '" data-appear-animation="fadeInRight">';
}

function spyropress_sc_button( $atts = array(), $content = '' ) {
    
    $default = array(
        'cls' => 'default',
        'size' => 'default',
        'disabled' => false
    );
    
    extract( shortcode_atts( $default, $atts ) );
        
    $tmpl = '<button type="button" class="{class}">{content}</button>';
    
    $args['content'] = spyropress_remove_formatting( $content );
    
    //class
    $class = array();
    $class[] = 'btn';
    if( $cls ) $class[] = 'btn-' . $cls;
    if ( $size ) $class[] = 'btn-' . $size;
    if( $disabled ) $class[] = 'disabled';
    
    $args['class'] = spyropress_clean_cssclass( $class );
    
    return token_repalce( $tmpl, $args );
}

function spyropress_sc_link_button( $atts = array(), $content = '' ) {
    
    $default = array(
        'cls' => 'default',
        'extra_cls' => '',
        'size' => 'default',
        'disabled' => false,
        'url' => '#'
    );
    
    extract( shortcode_atts( $default, $atts ) );
        
    $tmpl = '<a href="{url}" class="{class}">{content}</a>';
    
    $args['content'] = spyropress_remove_formatting( $content );
    $args['url'] = esc_url( $url );
    
    //class
    $class = array();
    $class[] = 'btn';
    if( $cls ) $class[] = 'btn-' . $cls;
    if ( $size ) $class[] = 'btn-' . $size;
    if( $disabled ) $class[] = 'disabled';
    $class[] = $extra_cls;
    
    $args['class'] = spyropress_clean_cssclass( $class );
    
    return token_repalce( $tmpl, $args );
}

function spyropress_sc_img( $atts = array(), $content = '' ) {
    
    $default = array(
        'cls' => '',
        'alt' => '',
        'url' => ''
    );
    
    extract( shortcode_atts( $default, $atts ) );
    
    return '<img class="img-' . $cls . '" alt="' . $alt . '" src="' . $url . '" />';
}

function spyropress_sc_label_badge( $atts = array(), $content = '', $sc ) {
    
    $default = array(
        'cls' => ''
    );
    extract( shortcode_atts( $default, $atts ) );
        
    // class
    $class = array();
    $class[] = $sc;
    if( $cls )
        $class[] = $sc . '-' . $cls;
        
    return sprintf( '<span class="%2$s">%1$s</span>', $content, spyropress_clean_cssclass( $class ) );
}

function spyropress_sc_alerts( $atts = array(), $content = '' ) {
    
    $default = array(
        'title' => '',
        'type' => '',
        'close' => false,
        'fade' => false
    );
    extract(shortcode_atts($default, $atts));

    // Template
    $tmpl = '<div class="{class}">{close}{title}{content}</div>';
    $close_tmpl = '<button type="button" class="close" data-dismiss="alert">&times;</button>';

    $args['content'] = spyropress_remove_formatting( $content );

    if ( $title ) {
        $args['title'] = '<h4 class="alert-heading">' . $title . '</h4>';
        $args['content'] = wpautop( $args['content'] );
    }
    
    if ( $close ) $args['close'] = $close_tmpl;
        
    //class
    $class = array();
    $class[] = 'alert';
    if( $title ) $class[] = 'alert-block';
    if( $fade ) $class[] = 'fade in';
    if ( $type ) $class[] = 'alert-' . $type;
    
    $args['class'] = spyropress_clean_cssclass( $class );
    
    return token_repalce( $tmpl, $args );
}

function spyropress_sc_bars( $atts = array(), $content = '' ) {
    
    $default = array(
        'style' => ''
    );
    extract( shortcode_atts( $default, $atts ) );
    
    $styles = array(
        'striped'   => 'progress-striped',
        'animated'  => 'progress-striped active'
    );
    
    //class
    $class = array( 'progress' );
    if ( '' != $style ) $class[] = $styles[$style];
    
    return sprintf( '<div class="%s">%s</div>', spyropress_clean_cssclass( $class ), spyropress_remove_formatting( $content ) );
}

function spyropress_sc_bar( $atts = array(), $content = '' ) {

    $default = array(
        'progress' => '60',
        'cls' => ''
    );
    extract( shortcode_atts( $default, $atts ) );        
    
    //class
    $class = array( 'bar' );
    if ( '' != $cls ) $class[] = 'bar-' . $cls;
    
    return '<div class="' . spyropress_clean_cssclass( $class ) . '" style="width:' . $progress . '%"></div>';
}

function spyropress_sc_tooltip( $atts = array(), $content = '' ) {
    
    $default = array(
        'tip' => '',
        'position' => 'top'
    );
    extract( shortcode_atts( $default, $atts ) );
    
    // Template
    return '<a href="#" rel="tooltip" data-original-title="' . $tip . '" data-placement="' . $position . '" data-html="true">' . $content . '</a>';
}

function spyropress_sc_lightbox( $atts = array(), $content = '' ) {
    
    $default = array(
        'full' => '',
        'pull' => ''
    );
    extract( shortcode_atts( $default, $atts ) );
    
    if( $pull ) $pull = ' pull-' . $pull;
    
    // Template
    return '
    <a class="thumbnail lightbox' . $pull . '"	href="' . $full . '" data-plugin-options=\'{"type":"image"}\'>
        ' . $content . '
        <span class="zoom">
            <i class="icon-16 icon-white-shadowed icon-search"></i>
        </span>
    </a>';
}

function spyropress_sc_inline_list($atts, $content = null) {
    
    $content = str_replace( '<ul>', '<ul class="inline">', $content );
    $content = str_replace( '<ol>', '<ol class="inline">', $content );

    return spyropress_remove_formatting( $content );
}

function spyropress_sc_tables($atts, $content = null) {
    
    $default = array(
        'cls' => '',
    );
    
    extract( shortcode_atts( $default, $atts ) );
    
    // class
    $class = array();
    $class[] = 'table';
    if ( $cls != '')
        $class[] = str_replace( ',', ' ', $cls );
    
    return str_replace( '<table', '<table class="' . spyropress_clean_cssclass( $class ) . '"', spyropress_remove_formatting( $content ) );
}