<?php
/**
 * wordPress helper
 *
 * @author            l3n641
 * @copyright         2022 My Company
 * @license           GPL
 *
 * @wordpress-plugin
 * Plugin Name:       wordPress helper
 * Description:       Adds wordPress helper
 * Version:           1.0.0
 * Requires at least: 5.0
 * Requires PHP:      7.3+
 * Author:            l3n641
 * License:           GPL
 */

error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once __DIR__ . "./vendor/autoload.php";

use command\HelloWorld;


/**
 * Registers our command when cli get's initialized.
 */
function cli_register_commands()
{
    WP_CLI::add_command('hello', '\command\HelloWorld');
}

add_action('cli_init', 'cli_register_commands');