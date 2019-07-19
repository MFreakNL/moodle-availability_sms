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
 * EN language file.
 *
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 * @package   availability_sms
 * @copyright 2019-07-19 Mfreak.nl | LdesignMedia.nl - Luuk Verhoeven
 * @author    Luuk Verhoeven
 **/
$string['pluginname'] = 'SMS availability';
$string['title'] = 'SMS availability';
$string['description'] = 'Restrict access by SMS verfication';
$string['require_condition'] = 'SMS code has been validated';

// Privacy provider.
$string['privacy:metadata'] = 'The restriction by activity SMS plugin does not store any personal data.';

// Settings.
$string['setting:course_popup'] = 'Force SMS verfication on course level';
$string['setting:course_popup_desc'] = 'If enabled the course can\'t be viewed till a valid SMS is entered.';
$string['setting:cm_producttoken'] = 'CM telecom Product Token';
$string['setting:cm_producttoken_desc'] = 'Gateway credentials';
$string['setting:cm_sender'] = 'Sender';
$string['setting:cm_sender_desc'] = ' This is the sender name. The maximum length is 11 alphanumerical characters or 16 digits. Example: \'CM Telecom\'';