<?php
// Check if GD extension is loaded
if (extension_loaded('gd')) {
    echo "GD extension is loaded.\n";

    // Check GD version
    $gd_info = gd_info();
    echo "GD Version: " . $gd_info['GD Version'] . "\n";

    // Check supported image formats
    echo "Supported formats:\n";
    echo "JPEG: " . (function_exists('imagecreatefromjpeg') ? "Yes" : "No") . "\n";
    echo "PNG: " . (function_exists('imagecreatefrompng') ? "Yes" : "No") . "\n";
    echo "WebP: " . (function_exists('imagecreatefromwebp') ? "Yes" : "No") . "\n";
    echo "GIF: " . (function_exists('imagecreatefromgif') ? "Yes" : "No") . "\n";

    // Print all GD info
    echo "\nFull GD info:\n";
    print_r($gd_info);
} else {
    echo "GD extension is NOT loaded.\n";
    echo "Please enable GD extension in php.ini by uncommenting:\n";
    echo "extension=gd\n";
}

// Check PHP version
echo "\nPHP Version: " . phpversion() . "\n";

// Check loaded extensions
echo "\nLoaded extensions:\n";
$extensions = get_loaded_extensions();
foreach ($extensions as $ext) {
    if (strpos(strtolower($ext), 'gd') !== false) {
        echo "- " . $ext . " (GD related)\n";
    }
}
?>