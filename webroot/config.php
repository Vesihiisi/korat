<?php
/**
 * Config-file for Korat. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Korat paths.
 *
 */
define('KORAT_INSTALL_PATH', __DIR__ . '/..');
define('KORAT_THEME_PATH', KORAT_INSTALL_PATH . '/theme/render.php');
 
 
/**
 * Include bootstrapping functions.
 *
 */
include(KORAT_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Korat variable.
 *
 */
$Korat = array();
 
 
/**
 * Site wide settings.
 *
 */
$Korat['lang']         = 'sv';
$Korat['title_append'] = ' | Korat – en webbtemplate';

/**
 * Theme related settings.
 *
 */
$Korat['stylesheets'] =  array('css/style.css');
$Korat['favicon']    =   'favicon.png';
$Korat['header'] =       <<<EOD
<a href='index.php'><img class='sitelogo' src='img/logo.png' alt='Korat Logo'></a>
<a href='index.php'><span class='sitetitle'>Korat</span></a>
<span class='siteslogan'>Reusable modules for web development with PHP</span>
EOD;

$Korat['footer'] =       <<<EOD
<span class='sitefooter'>By <a href='https://github.com/vesihiisi'>Alicia Fagerving</a> | 
<a href='https://github.com/vesihiisi/korat'>On GitHub</a> | 
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Validate html</a></span>
EOD;

$Korat['nav'] = array(
    'home'  => array('text'=>'Home',  'url'=>'index.php'),
    'source'  => array('text'=>'Show source',  'url'=>'source.php')
);

/**
 * Settings for JavaScript.
 *
 */
$Korat['modernizr'] = 'js/modernizr-custom.js';
$Korat['jquery'] = '//ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js';
$Korat['javascript_include'] = array('js/main.js');
