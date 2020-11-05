<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Passionfruit theme.
 *
 * @package    theme_passionfruit
 * @copyright  &copy; 2020-onwards G J Barnard.
 * @author     G J Barnard - {@link http://moodle.org/user/profile.php?id=442195}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later.
 */

defined('MOODLE_INTERNAL') || die;

if ($ADMIN->fulltree) {
    // Add your settings here.
 


    // Custom CSS.
    $name = 'theme_passionfruit/customcss';
    $title = get_string('customcss', 'theme_passionfruit');
    $description = get_string('customcssdesc', 'theme_passionfruit');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
	
	   //Course title text size setting.
    $name = 'theme_passionfruit/coursetitlesize';
    $title = get_string('coursetitlesize', 'theme_passionfruit');
    $description = get_string('coursetitlesizedesc', 'theme_passionfruit');
    $default = 36;
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_INT);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $settings->add($setting);
}
