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
 * Config SMS api
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   availability_sms
 * @copyright 2019-07-19 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 **/
defined('MOODLE_INTERNAL') or die;
if ($hassiteconfig && !empty($CFG->enableavailability)) {

    $settings->add(new admin_setting_configcheckbox(
        'availability_sms/course_popup',
        new lang_string('setting:course_popup', 'availability_sms'),
        new lang_string('setting:course_popup_desc', 'availability_sms'),
        1
    ));

    $settings->add(new admin_setting_configtext(
        'availability_sms/cm_producttoken',
        new lang_string('setting:cm_producttoken', 'availability_sms'),
        new lang_string('setting:cm_producttoken_desc', 'availability_sms'),
        '00000000-0000-0000-0000-000000000000'
    ));
}