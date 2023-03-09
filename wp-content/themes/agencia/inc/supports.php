<?php
defined('ABSPATH') or die('');

add_action('after_setup_theme', function () {
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('html5');
    add_theme_support('post-thumbnails');
});


add_filter('upload_mines', function ($mines) {
    $mines['svg'] = 'image/svg+xml';
    return $mines;
});