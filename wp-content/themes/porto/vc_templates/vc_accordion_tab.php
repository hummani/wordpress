<?php
/**
 * Shortcode attributes
 * @var $atts
 * @var $title
 * @var $el_id
 * @var $content - shortcode content
 *
 * Extra Params
 * @var $show_icon
 * @var $icon
 *
 * Shortcode class
 * @var $this WPBakeryShortCode_VC_Accordion_tab
 */
$output = '';
$atts = vc_map_get_attributes( $this->getShortcode(), $atts );
extract( $atts );

$col_id = 'collapse' . rand();

$css_class = apply_filters(VC_SHORTCODE_CUSTOM_CSS_FILTER_TAG, 'panel panel-default', $this->settings['base']);
$output .= "\n\t\t\t" . '<div class="' . esc_attr( $css_class ) . '">';
    $output .= "\n\t\t\t\t" . '<div class="panel-heading"><h4 class="panel-title">';
        $output .= "\n\t\t\t\t\t" . '<a class="accordion-toggle" data-toggle="collapse" href="#' . $col_id . '">';
            $output .= "\n\t\t\t\t\t\t" . ($show_icon && $icon ? '<i class="' . esc_attr( $icon ) . '"></i>' : '') . $title;
        $output .= "\n\t\t\t\t\t" . '</a>';
    $output .= "\n\t\t\t\t" . '</h4></div>';

    $output .= "\n\t\t\t\t" . '<div id="' . $col_id . '" class="accordion-body collapse">';
        $output .= "\n\t\t\t\t\t" . '<div class="panel-body">';
            $output .= "\n\t\t\t\t\t" . ( '' === trim( $content ) ) ? wpb_js_remove_wpautop($content, false) : __("Empty section. Edit page to add content here.", "js_composer");
        $output .= "\n\t\t\t\t\t" . '</div>';
    $output .= "\n\t\t\t\t" . '</div>';

$output .= "\n\t\t\t" . '</div> ' . $this->endBlockComment( $this->getShortcode() ) . "\n";

echo $output;