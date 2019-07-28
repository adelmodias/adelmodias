<?php 
/** CONSTANTS **/
define('VERSION', time());

/** INCLUDES **/
function includeDir($path) {
    $dir      = new RecursiveDirectoryIterator($path);
    $iterator = new RecursiveIteratorIterator($dir);
    foreach ($iterator as $file) {
        $fname = $file->getFilename();
        if (preg_match('%\.php$%', $fname)) {
            require_once($file->getPathname());
        }
    }
}

includeDir(__DIR__.'/includes/');