<?php
function jerta_customizer($wp_customize){
  // Mapa

  $wp_customize->add_section(
    'sec_map', array(
      'title' => 'Map',
      'description' => 'Map Section'
    )
  );
  // API key map
  $wp_customize->add_setting(
    'set_map_apikey', array(
      'type' => 'theme_mod',
      'default' => '',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );
  $wp_customize->add_control(
    'set_map_apikey', array(
      'label' => 'API Key',
     'description' => 'Get your key <a target="_blank" href="https://console.developers.google.com/flows/enableapi?apiid=maps_backend">here</a>',
			'section' => 'sec_map',
			'type' => 'text'
    )
  );
   // Address
  $wp_customize->add_setting(
    'set_map_apikey', array(
      'type' => 'theme_mod',
      'default' => '',
      'sanitize_callback' => 'wp_filter_nohtml_kses'
    )
  );// Address

	$wp_customize->add_setting(
		'set_map_address', array(
			'type' => 'theme_mod',
			'default' => '',
			'sanitize_callback' => 'esc_textarea'
		)
	);

	$wp_customize->add_control(
		'set_map_address', array(
			'label' => 'Type your address here',
			'description' => 'No special characters allowed',
			'section' => 'sec_map',
			'type' => 'textarea'
		)
	);	

}
add_action('customize_register', 'jerta_customizer');