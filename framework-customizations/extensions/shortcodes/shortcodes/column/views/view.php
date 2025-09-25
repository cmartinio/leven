<?php if (!defined('FW')) die('Forbidden'); ?>

<?php
	$id_to_class = array(
		'1_6' => 'col-xs-12 col-sm-2',
		'1_4' => 'col-xs-12 col-sm-3',
		'1_3' => 'col-xs-12 col-sm-4',
		'1_2' => 'col-xs-12 col-sm-6',
		'2_3' => 'col-xs-12 col-sm-8',
		'3_4' => 'col-xs-12 col-sm-9',
		'1_1' => 'col-xs-12 col-sm-12'
	);

    if($atts['tablet'] !=''){
        $id_to_class = array(
            '1_6' => 'col-md-2',
            '1_4' => 'col-md-3',
            '1_3' => 'col-md-4',
            '1_2' => 'col-md-6',
            '2_3' => 'col-md-8',
            '3_4' => 'col-md-9',
            '1_1' => 'col-md-12'
        );
    }

	$atts['padding_top'] = (int)$atts['padding_top'];
	$atts['padding_right'] = (int)$atts['padding_right'];
	$atts['padding_bottom'] = (int)$atts['padding_bottom'];
	$atts['padding_left'] = (int)$atts['padding_left'];
    $custom_styles = "{$atts['padding_top']}px {$atts['padding_right']}px {$atts['padding_bottom']}px {$atts['padding_left']}px";

    $id = $atts['id'];

    if (!isset($atts['content_slider'])) {
    	$slider = 'off';
    } else {
    	$slider = $atts['content_slider']['content_slider_switcher'];
    }
?>

<div class="<?php echo esc_attr($atts['tablet']); ?> <?php echo esc_attr($id_to_class[$atts['width']]); ?> <?php echo esc_attr($atts['class']); ?>">
    <div id="col_inner_<?php echo esc_attr($id); ?>" class="fw-col-inner" data-paddings="<?php echo esc_attr($custom_styles); ?>">
    	<?php if ($slider == 'on') { ?>
		<div id="lm_content_slider_<?php echo esc_attr($atts['id']); ?>"
		class="lm-content-slider owl-carousel 
		loop-<?php echo esc_attr($atts['content_slider']['on']['loop']) ?> 
		autoplay-<?php echo esc_attr($atts['content_slider']['on']['autoplay']['autoplay_switcher']) ?> 
		<?php if (($atts['content_slider']['on']['autoplay']['autoplay_switcher']) == 'on') {
			if (($atts['content_slider']['on']['autoplay']['on']['autoplay_tablet']) == 'on') { ?>
				autoplay-mobile 
			<?php }
		} ?>" 
		data-mobile-items="<?php echo esc_attr($atts['content_slider']['on']['items_mobile']) ?>" 
		data-tablet-items="<?php echo esc_attr($atts['content_slider']['on']['items_tablet']) ?>" 
		data-items="<?php echo esc_attr($atts['content_slider']['on']['items']) ?>"
		<?php if (($atts['content_slider']['on']['autoplay']['autoplay_switcher']) == 'on') { ?>
		data-autotime="<?php echo esc_attr($atts['content_slider']['on']['autoplay']['on']['autoplay_timeout']) ?>"
		<?php } ?>>
			<?php echo do_shortcode($content); ?>
		</div>
		<?php
		} else {
			echo do_shortcode($content);
		}
		?>
	</div>
</div>
