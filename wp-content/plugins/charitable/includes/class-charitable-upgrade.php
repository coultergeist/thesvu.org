<?php

/**
 * This provides backwards compatibility for any extensions that 
 * attempt to load the Charitable_Upgrade class from here.
 *
 * @deprecated
 */

if ( class_exists( 'Charitable_Upgrade' ) ) {
    return;
}

require_once( charitable()->get_path( 'admin' ) . 'upgrades/class-charitable-upgrade.php' );