<?php
// Simple test to check GD extension through web server
if (extension_loaded('gd')) {
    echo "GD extension is loaded through web server!<br>";
    
    // Test the specific function that was failing
    if (function_exists('imagecreatefromjpeg')) {
        echo "imagecreatefromjpeg() function is available!<br>";
    } else {
        echo "imagecreatefromjpeg() function is NOT available!<br>";
    }
    
    // Print GD info
    $gd_info = gd_info();
    echo "GD Version: " . $gd_info['GD Version'] . "<br>";
    echo "JPEG Support: " . ($gd_info['JPEG Support'] ? "Yes" : "No") . "<br>";
    
} else {
    echo "GD extension is NOT loaded through web server!<br>";
}

// Also show phpinfo for GD
phpinfo(INFO_MODULES);
?>
