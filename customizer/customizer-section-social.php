<?php namespace WSUWP\Theme\WDS;

class Customizer_Section_Social extends Customizer_Section {

	protected $section_title  = 'Social Media Accounts';
	protected $settings_group = 'site_info';
	protected $key_base       = 'social';



	public function add_section() {

		$this->wp_customize->add_section(
			$this->get( 'section_id' ),
			array(
				'title'      => $this->get( 'section_title' ),
				'priority'   => 30,
				'panel'      => $this->get( 'settings_group' ),
			)
		);

		$channels = array(
			'none'      => 'None',
			//'directory' => 'Directory',
			'facebook'  => 'Facebook',
			//'flickr'    => 'Flickr',
			'instagram' => 'Instagram',
			'linkedin'  => 'LinkedIn',
			//'pinterest' => 'Pinterest',
			//'tumblr'    => 'Tumblr',
			'twitter'   => 'Twitter',
			//'vimeo'     => 'Vimeo',
			'youtube'   => 'YouTube',
		);

		$locations = array( 'one', 'two', 'three', 'four' );

		foreach ( $locations as $location ) {

			$this->wp_customize->add_setting(
				$this->get_setting_key( 'channel_' . $location, true ),
				array(
					'default'     => '',
					'transport'   => 'refresh',
					'type'        => 'option',
				)
			);

			$this->wp_customize->add_setting(
				$this->get_setting_key( 'channel_' . $location . '_link', true ),
				array(
					'default'     => '',
					'transport'   => 'refresh',
					'type'        => 'option',
				)
			);

			$this->wp_customize->add_setting(
				$this->get_setting_key( 'channel_' . $location . '_html' ),
				array()
			);

			$this->wp_customize->add_control(
				$this->get_control_key( 'channel_' . $location ),
				array(
					'settings' => $this->get_setting_key( 'channel_' . $location, true ),
					'label'    => 'Account Type',
					'section'  => $this->get( 'section_id' ),
					'type'     => 'select',
					'choices'  => $channels,
				)
			);

			$this->wp_customize->add_control(
				$this->get_control_key( 'channel_' . $location . '_link' ),
				array(
					'settings' => $this->get_setting_key( 'channel_' . $location . '_link', true ),
					'label'    => 'Account URL',
					'section'  => $this->get( 'section_id' ),
					'type'     => 'text',
				)
			);

			$this->wp_customize->add_control(
				new \WDS_Customize_Control_HTML(
					$this->wp_customize,
					$this->get_setting_key( 'channel_' . $location . '_html' ),
					array(
						'section'  => $this->get( 'section_id' ),
						'content'  => '<hr />',
					)
				)
			);

		}

	}

}
