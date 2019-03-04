<?php
declare(strict_types=1);

/**
 * Plugin Name:     Imagify Preset
 * Plugin URI:      https://github.com/itinerisltd/imagify-preset
 * Description:     Configuration for Imagify.
 * Version:         0.1.0
 * Author:          Itineris Limited
 * Author URI:      https://www.itineris.co.uk/
 * Text Domain:     imagify-preset
 */

namespace Itineris\ImagifyPreset;

// If this file is called directly, abort.
if (! defined('WPINC')) {
    die;
}

add_filter('pre_get_imagify_option_resize_larger', function (): int {
    return 1;
});
add_filter('get_imagify_option_resize_larger', function (): int {
    return 1;
});

add_filter('pre_get_imagify_option_resize_larger_w', function (): int {
    return 1921;
});
add_filter('get_imagify_option_resize_larger_w', function (): int {
    return 1921;
});
