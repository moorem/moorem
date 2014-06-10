<?php

/**
 * Date Picker OptionType
 *
 * @author 		SpyroSol
 * @category 	UI
 * @package 	Spyropress
 */

function spyropress_ui_datepicker( $item, $id, $value, $is_widget = false, $is_builder = false ) {

    ob_start();

    // collecting attributes
    $atts = array();
    $atts['class'] = 'field';
    $atts['autocomplete'] = 'off';
    $atts['type'] = 'text';
    $atts['id'] = esc_attr( $id );
    $atts['name'] = esc_attr( $item['name'] );
    if ( isset( $item['placeholder'] ) && $item['placeholder'] )
        $atts['placeholder'] = esc_attr( $item['placeholder'] );

    $atts['value'] = esc_attr( $value );

    echo '<div ' . build_section_class( 'section-datepicker', $item ) . '>';
        build_heading( $item, $is_widget );
        build_description( $item );
        echo '<div class="controls">';
            printf( '<input%s />', spyropress_build_atts( $atts ) );
        echo '</div>';
    echo '</div>';

    $ui_content = ob_get_clean();
    $js = "panelUi.init_datepicker();";

    if ( $is_widget ) {
        if ( ! $is_builder )
            add_jquery_ready( $js );
        else
            $ui_content .= sprintf( '<script type="text/javascript">%2$s//<![CDATA[%2$s %1$s %2$s//]]>%2$s</script>', $js, "\n" );
        return $ui_content;
    }
    else {
        echo $ui_content;
        add_jquery_ready( $js );
    }
}

function spyropress_widget_datepicker( $item, $id, $value, $is_builder = false ) {
    return spyropress_ui_datepicker( $item, $id, $value, true, $is_builder );
}
?>