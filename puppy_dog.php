<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              remlost.eu/animals
 * @since             1.0.0
 * @package           Puppy_dog
 *
 * @wordpress-plugin
 * Plugin Name:       Puppy
 * Plugin URI:        myportfolio.remlost.eu
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Tillmann Weimer
 * Author URI:        remlost.eu/animals
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       puppy_dog
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'PUPPY_DOG_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-puppy_dog-activator.php
 */
function activate_puppy_dog() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-puppy_dog-activator.php';
	Puppy_dog_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-puppy_dog-deactivator.php
 */
function deactivate_puppy_dog() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-puppy_dog-deactivator.php';
	Puppy_dog_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_puppy_dog' );
register_deactivation_hook( __FILE__, 'deactivate_puppy_dog' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-puppy_dog.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_puppy_dog() {

	$plugin = new Puppy_dog();
	$plugin->run();

}
run_puppy_dog();
