<?php
function get_custom_field( $field_name ) {
	if ( function_exists( 'the_field' ) ) {
		return the_field( $field_name );
	}

	return '[ADD PLUGIN: https://www.advancedcustomfields.com/]';
}