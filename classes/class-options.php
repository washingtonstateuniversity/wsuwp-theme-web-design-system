<?php namespace WSUWP\Theme\Binder;

class Options {


	protected $theme_key = 'wsu_wsd_theme_option';
	protected $site_key  = 'wsu_wsd_site_option';
	protected $options = array(
		'components' => array(
			'global_header' => array(
				'is_active' => true,
			),
			'global_footer' => array(
				'is_active' => true,
			),
			'site_header' => array(
				'is_active' => true,
			),
			'site_footer' => array(
				'is_active' => true,
			),
			'site_nav_vertical' => array(
				'is_active' => true,
			),
		),

	);





	public function set_options() {

		$custom_options = apply_filters( 'wsu_wds_options', array() );
		$site_options   = get_option( $this->site_key );
		$site_options   = ( is_array( $site_options ) ) ? $site_options : array();
		$theme_options  = get_theme_mod( $this->theme_key, array() );

		$this->options = array_merge_recursive( $this->options, $site_options, $custom_options, $theme_options );

		/*foreach ( $this->options as $group ) {

			foreach ( $group as $object ) {

				foreach ( $object as $property ) {

					if ( $this->has_option( $theme_options, $group, $object, $property ) ) {

						$this->options[ $group ][ $object ][ $property ] = $theme_options[ $group ][ $object ][ $property ];

					} elseif ( isset( $site_options[ $group ][ $object ][ $property ] ) ) {

						$this->options[ $group ][ $object ][ $property ] = $site_options[ $group ][ $object ][ $property ];

					} elseif ( isset( $child_options[ $group ][ $object ][ $property ] ) ) {

						$this->options[ $group ][ $object ][ $property ] = $child_options[ $group ][ $object ][ $property ];

					}
				}
			}
		}*/

	}


	protected function has_option( $option_set, $group, $object, $property ) {

		if ( is_array( $option_set ) ) {

			if ( array_key_exists( $group, $option_set ) ) {

				if ( array_key_exists( $object, $group ) ) {

					if ( array_key_exists( $property, $object ) ) {

						return true;

					}
				}
			}
		}

		return false;

	}


	public function get_option( $group, $object, $property, $default = '' ) {

		if ( isset( $this->options[ $group ][ $object ][ $property ] ) ) {

			$property_value = $this->options[ $group ][ $object ][ $property ];

			if ( is_array( $property_value ) ) {

				$property_value = end( $property_value ); 

			}

			return $property_value;

		} else {

			return $default;

		}

	}


	protected function array_merge_recursive_distinct(array &$array1, array &$array2)
{
    $merged = $array1;
    foreach ($array2 as $key => &$value)
    {
        if (is_array($value) && isset($merged[$key]) && is_array($merged[$key]))
        {
            $merged[$key] = array_merge_recursive_distinct($merged[$key], $value);
        }
        else
        {
            $merged[$key] = $value;
        }
    }
    return $merged;
}

}
