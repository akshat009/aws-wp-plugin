<?php
/**
 * Plugin Name: AWS WP Lab Plugin
 * Plugin URI: https://lab.asaxenadev.com
 * Description: Automated CI/CD WordPress Plugin deployed to AWS EC2 via GitHub Actions.
 * Version: 1.0.0
 * Author: Akshat Saxena
 * License: GPL2
 */

if ( ! defined( 'ABSPATH' ) ) {
    // Prevent direct execution outside WordPress.
    define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/**
 * Class AwsWpLabPlugin
 */
class AwsWpLabPlugin
{
    /**
     * Returns the active plugin version.
     *
     * @return string
     */
    public static function get_version(): string
    {
        return '1.0.0';
    }

    /**
     * Returns the deployment status string.
     *
     * @return string
     */
    public static function get_status(): string
    {
        return 'Active - Deployed via GitHub Actions';
    }
}
