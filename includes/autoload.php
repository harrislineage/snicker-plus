<?php
/*
 |  Snicker Plus – A FlatFile Comment Plugin for Bludit
 |  @file       ./includes/autoload.php
 |  @author     Steve Harris (Harris Lineage)
 |  @version    1.0.0
 |  @website    https://github.com/harrislineage/snicker-plus
 |  @license    MIT License
 |  @copyright  Copyright © 2025 Steve Harris (Harris Lineage)
 */

spl_autoload_register(function($class) {
    foreach (array("Gregwar", "Identicon", "PIT", "OWASP") as $allowed) {
        if (strpos($class, $allowed) !== 0) {
            continue;
        }
        $path = dirname(__FILE__) . DIRECTORY_SEPARATOR;
        $classPath = str_replace("\\", DIRECTORY_SEPARATOR, $class);
        require_once $path . $classPath . ".php";
        return true;
    }
    return false;
});
