<?php

/**
 * Front-end of Socialshareprivacy_XH.
 *
 * PHP version 5
 *
 * @category  CMSimple_XH
 * @package   Socialshareprivacy
 * @author    Christoph M. Becker <cmbecker69@gmx.de>
 * @copyright 2012-2015 Christoph M. Becker <http://3-magi.net>
 * @license   http://www.gnu.org/licenses/gpl-3.0.en.html GNU GPLv3
 * @link      http://3-magi.net/?CMSimple_XH/Socialshareprivacy_XH
 */

/**
 * The plugin version.
 */
define('SOCIALSHAREPRIVACY_VERSION', '@SOCIALSHAREPRIVACY_VERSION@');

/**
 * Displays the social buttons.
 *
 * @return string (X)HTML
 */
function socialshareprivacy()
{
    Socialshareprivacy_Controller::init();
    return '<div class="socialshareprivacy"></div>';
}

Socialshareprivacy_Controller::dispatch();

?>
