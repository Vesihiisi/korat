<?php 
/**
 * This is a Korat pagecontroller.
 *
 */
// Include the essential config-file which also creates the $Korat variable with its defaults.
include(__DIR__.'/config.php'); 
 
 
// Do it and store it all in variables in the Korat container.
$Korat['title'] = "This is a hello world page";
 
$Korat['main'] = <<<EOD
<h1>Hello world</h1>
<p>This is an example page.</p>
EOD;
 

 
 
// Finally, leave it all to the rendering phase of Korat.
include(KORAT_THEME_PATH);
