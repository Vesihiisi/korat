<?php 
/**
 * This is a Korat pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Korat variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Korat container.
$Korat['title'] = "404";
$Korat['header'] = "";
$Korat['main'] = "This is a Korat 404. Document is not here.";
$Korat['footer'] = "";
 
// Send the 404 header 
header("HTTP/1.0 404 Not Found");
 
 
// Finally, leave it all to the rendering phase of Korat.
include(KORAT_THEME_PATH);
