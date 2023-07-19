<?php

/**
 * Map Legacy FA Icons
 *
 * Maps old icon class names to new versions.
 *
 * @since 1.9.1
 */
if( !function_exists('nectar_svg_shape_divider') ) {

	function nectar_svg_shape_divider($shape_type, $shape_divider_color) {

		switch( $shape_type ) {
			case 'curve' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path d="M 0 0 c 0 0 200 50 500 50 s 500 -50 500 -50 v 101 h -1000 v -100 z"></path> </svg>';
				break;
			case 'curve_asym' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"> <path d="M0 100 C 20 0 50 0 100 100 Z"></path> </svg>';
				break;
			case 'curve_asym_2' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100" preserveAspectRatio="none"> <path d="M0 100 C 50 0 80 0 100 100 Z"></path> </svg>';
				break;
			case 'tilt' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"> <polygon points="104 10 0 0 0 10"></polygon> </svg>';
				break;
			case 'tilt_alt' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"> <polygon points="100 10 100 0 -4 10"></polygon> </svg>';
				break;
			case 'triangle' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <polygon points="501 53.27 0.5 0.56 0.5 100 1000.5 100 1000.5 0.66 501 53.27"/></svg>';
				break;
			case 'fan' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1003.92 91" preserveAspectRatio="none"> <polygon class="cls-1" points="502.46 46.31 1 85.67 1 91.89 1002.91 91.89 1002.91 85.78 502.46 46.31"/><polygon class="cls-2" points="502.46 45.8 1 0 1 91.38 1002.91 91.38 1002.91 0.1 502.46 45.8"/><rect class="cls-3" y="45.81" width="1003.92" height="46.09"/>
          </svg>';
				break;
			case 'waves' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none"> <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path> </svg>';
				break;
			case 'speech' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path d="M 0 45.86 h 458 c 29 0 42 19.27 42 19.27 s 13 -19.27 42.74 -19.27 h 457.26 v 54.14 h -1000 z"></path>  </svg>';
				break;
			case 'straight_section' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 10" preserveAspectRatio="none"> <polygon points="104 10, 104 0, 0 0, 0 10"></polygon> </svg>';
				break;
			case 'clouds' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path d="M 983.71 4.47 a 56.19 56.19 0 0 0 -37.61 14.38 a 15.24 15.24 0 0 0 -25.55 -0.55 a 40.65 40.65 0 0 0 -55.45 13 a 15.63 15.63 0 0 0 -22.69 1.52 a 73.82 73.82 0 0 0 -98.57 27.91 a 14.72 14.72 0 0 0 -9.31 0.55 a 26.13 26.13 0 0 0 -42.63 1.92 a 39.08 39.08 0 0 0 -47 10.08 a 18.45 18.45 0 0 0 -34.18 -0.45 a 12.21 12.21 0 0 0 -14.23 0.9 a 11.47 11.47 0 0 0 -16.59 -6 a 47.2 47.2 0 0 0 -66.12 -4.07 a 21.32 21.32 0 0 0 -26.48 -4.91 a 15 15 0 0 0 -29 -7.79 a 10.47 10.47 0 0 0 -14 5.13 a 31.55 31.55 0 0 0 -50.68 12.32 a 23 23 0 0 0 -28.69 -5.34 a 54.54 54.54 0 0 0 -89.93 5.71 a 16.3 16.3 0 0 0 -22.71 2.3 a 33.41 33.41 0 0 0 -44.93 9.65 a 17.72 17.72 0 0 0 -9.79 -2.94 h -0.22 a 29 29 0 0 0 -39.66 -12.26 a 75.24 75.24 0 0 0 -94 -12.19 a 22.91 22.91 0 0 0 -14.78 -5.34 h -0.69 a 33 33 0 1 0 -52.53 31.55 h -29.69 v 143.45 h 79.5 v -57.21 a 75.26 75.26 0 0 0 132.93 -46.7 a 28.88 28.88 0 0 0 12.78 -6.86 a 17.61 17.61 0 0 0 12.79 0 a 33.41 33.41 0 0 0 63.93 -7.44 a 54.56 54.56 0 0 0 101.57 18.56 v 7.65 h 140.21 a 47.23 47.23 0 0 0 79.55 -15.88 l 51.25 1.95 a 39.07 39.07 0 0 0 67.12 2.55 l 29.76 1.13 a 73.8 73.8 0 0 0 143.76 -16.75 h 66.17 a 56.4 56.4 0 1 0 36.39 -99.53 z"></path>  </svg>';
				break;
			case 'waves_opacity' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  <path d="M 850.23 235.79 a 1.83 1.83 0 0 0 -0.8 -3.24 c -10.23 -2 -53.38 -23.41 -97.44 -43.55 c -244.99 -112 -337.79 97.38 -432.99 104 c -115 8 -217 -87 -330 -37 c 0 0 9 15 9 42 v -1 h 849 l 2 -55 s -2.87 -3 1.23 -6.21 z"></path>  <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path> </svg>';
				break;
			case 'waves_opacity_alt' :
				echo '<svg class="nectar-shape-divider" aria-hidden="true" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">
          <path d="M 1000 299 l 2 -279 c -155 -36 -310 135 -415 164 c -102.64 28.35 -149 -32 -232 -31 c -80 1 -142 53 -229 80 c -65.54 20.34 -101 15 -126 11.61 v 54.39 z"></path> <path d="M 1000 286 l 2 -252 c -157 -43 -302 144 -405 178 c -101.11 33.38 -159 -47 -242 -46 c -80 1 -145.09 54.07 -229 87 c -65.21 25.59 -104.07 16.72 -126 10.61 v 22.39 z"></path> <path d="M 1000 300 l 1 -230.29 c -217 -12.71 -300.47 129.15 -404 156.29 c -103 27 -174 -30 -257 -29 c -80 1 -130.09 37.07 -214 70 c -61.23 24 -108 15.61 -126 10.61 v 22.39 z"></path>
           </svg>';
				break;
			case 'curve_opacity' :
				echo '<svg class="nectar-shape-divider" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none"> <path d="M 0 14 s 88.64 3.48 300 36 c 260 40 514 27 703 -10 l 12 28 l 3 36 h -1018 z"></path> <path d="M 0 45 s 271 45.13 500 32 c 157 -9 330 -47 515 -63 v 86 h -1015 z"></path> <path d="M 0 58 s 188.29 32 508 32 c 290 0 494 -35 494 -35 v 45 h -1002 z"></path> </svg>';
				break;
			case 'curve_custom' :
				echo '<svg class="nectar-shape-divider curve_sanmichele" xmlns="http://www.w3.org/2000/svg" width="1920" height="1071" viewBox="0 0 1920 1071" preserveAspectRatio="none"><defs><linearGradient id="linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox"><stop offset="0" stop-color="var(--color-stop-color-1)"/><stop offset="0.517" stop-color="var(--color-stop-color-2)"/><stop offset="1" stop-color="var(--color-stop-color-3)"/></linearGradient></defs><g id="shape_gradient_V3" data-name="shape gradient_V3" clip-path="url(#clip-shape_gradient_V3)"><rect width="1920" height="1071" fill="'.esc_attr($shape_divider_color).'"/><g id="shape_gradient_background" data-name="shape gradient background" transform="translate(0 36.336)"><rect id="Rettangolo_75" data-name="Rettangolo 75" width="3599.664" height="1920" rx="960" transform="translate(1920) rotate(90)" fill="url(#linear-gradient)"/></g></g> </svg>';
				break;
			case 'mountains' :
				echo '<svg class="nectar-shape-divider" fill="'.esc_attr($shape_divider_color).'" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">
          <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>
          <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>
          <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>
          <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path> </svg>';
				break;

		}
	}
}

add_action('vc_before_init', function() {

	vc_add_param("vc_row", array(
		"type" => "nectar_radio_image",
		"class" => "",
		'save_always' => true,
		"heading" => esc_html__("Shape Type", "salient-core"),
		"param_name" => "shape_type",
		"group" => "Shape Divider",
		"options" => array(
			"curve" => array( esc_html__('Curve', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/curve_down.jpg"),
			'fan' => array( esc_html__('Fan', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/fan.jpg"),
			'curve_opacity' => array( esc_html__('Curve Opacity', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/curve_opacity.jpg"),
			'curve_custom' => array( esc_html__('Curve Custom', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/curve_opacity.jpg"),
			"mountains" => array( esc_html__('Mountains', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/mountains.jpg"),
			'curve_asym' => array( esc_html__('Curve Asym.', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/curve_asym.jpg"),
			'curve_asym_2' => array( esc_html__('Curve Asym. Alt', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/curve_asym_2.jpg"),
			"tilt" => array( esc_html__('Tilt', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/tilt.jpg"),
			"tilt_alt" => array( esc_html__('Tilt Alt', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/tilt_alt.jpg"),
			"triangle" => array( esc_html__('Triangle', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/triangle.jpg"),
			'waves' => array( esc_html__('Waves', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/waves_no_opacity.jpg"),
			'waves_opacity' => array( esc_html__('Waves Opacity', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/waves.jpg"),
			'waves_opacity_alt' => array( esc_html__('Waves Opacity 2', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/waves_opacity.jpg"),
			'clouds' => array( esc_html__('Clouds', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/clouds.jpg"),
			"speech" => array( esc_html__('Speech', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/speech.jpg"),
			"straight_section" => array( esc_html__('Straight Section', 'salient-core') => SALIENT_CORE_PLUGIN_PATH."/includes/img/shape_dividers/straight_section.jpg")
		),
	));
}, 11 );