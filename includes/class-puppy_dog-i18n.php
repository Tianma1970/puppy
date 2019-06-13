<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       remlost.eu/animals
 * @since      1.0.0
 *
 * @package    Puppy_dog
 * @subpackage Puppy_dog/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Puppy_dog
 * @subpackage Puppy_dog/includes
 * @author     Tillmann Weimer <tillmann.weimer@medieinstitutet.se>
 */
class Puppy_dog_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'puppy_dog',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
