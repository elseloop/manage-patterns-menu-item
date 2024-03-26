<?php
/**
 * @package Manage Patterns Menu Item
 * @version 1.0.0
 */
/**
 * Plugin Name: Manage Patterns Menu Item
 * Plugin URI: https://github.com/elseloop/add-patterns-menu
 * Description: Duplicates the Manage patterns link to the WordPress admin menu.
 * Version: 1.0.0
 * Author: Dan Manchester
 * Author URI: https://dan.isnot.cool
 * License: GPLv2 or later
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

 function elseloop_add_patterns_menu_item() {
  add_menu_page(
    'Manage patterns',
    'Manage patterns',
    'manage_options',
    'edit.php?post_type=wp_block',
    '',
    'dashicons-schedule',
    50
  );
}

add_action( 'admin_menu', 'elseloop_add_patterns_menu_item' );
