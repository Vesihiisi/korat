<?php 
/**
 * This is a Korat pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Korat variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Add style for csource
$Korat['stylesheets'][] = 'css/source.css';
 
// Create the object to display sourcecode
//$source = new CSource();
$source = new CSource(array('secure_dir' => '..', 'base_dir' => '..'));
 
// Do it and store it all in variables in the Korat container.
$Korat['title'] = "Show source";
$Korat['main'] = "<h1>Show source</h1>" . $source->View();
 
// Finally, leave it all to the rendering phase of Korat.
include(KORAT_THEME_PATH);
