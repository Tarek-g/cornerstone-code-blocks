<?php

/*
Plugin Name: Cornerstone Code Blocks
Plugin URI: https://github.com/chuckfairy/cornerstone-code-blocks
Description: Code blocks in Cornerstone with Syntax Highlighting from Highlight.js
Version:      1.0.2
Author: Chuckfairy
Author URI: https://chuckfairy.com/
Text Domain: cornerstone
Themeco Plugin: cornerstone-code-blocks
*/

define('CS_CODE_BLOCKS_URI', plugin_dir_url(__FILE__));
define('CS_CODE_BLOCKS_PATH', plugin_dir_path(__FILE__));

define('CS_CODE_BLOCKS_VERSION', '1.0.2');

// Init
add_action('init', function() {
  if (!function_exists('cornerstone')) {
    trigger_error('Cornerstone is not installed, Cornerstone Code Blocks does not work without it');
    return;
  }

  // Includes for enqueue and Element registry
  require_once(__DIR__ . '/extension/Enqueue.php');
  require_once(__DIR__ . '/extension/Element.php');
});

// Load in dynamic options
add_action('cs_dynamic_content_register', function() {
  require_once(__DIR__ . '/extension/DynamicOptions.php');
});

// Prefab registry
add_action('cs_register_prefab_elements', function() {
  require_once(__DIR__ . '/extension/Prefabs.php');
});
