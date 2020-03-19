<?php

class WDS_Customize_Control_HTML extends WP_Customize_Control {

	public $content = '';

	public function render_content() {

		if ( isset( $this->content ) ) {

			echo wp_kses_post( $this->content );

		}

	}

}
