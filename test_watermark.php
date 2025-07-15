<?php
// Test the watermark_image function to verify it's working
require_once 'application/controllers/Admin.php';

// Create a test image if it doesn't exist
$test_image = 'uploads/test_image.jpg';
$test_watermark = 'image/logo3.png';

// Check if test image exists, create a simple one if not
if (!file_exists($test_image)) {
    // Create a simple test image
    $img = imagecreatetruecolor(400, 300);
    $white = imagecolorallocate($img, 255, 255, 255);
    $black = imagecolorallocate($img, 0, 0, 0);
    
    imagefill($img, 0, 0, $white);
    imagestring($img, 5, 50, 50, 'Test Image', $black);
    
    // Save as JPEG
    imagejpeg($img, $test_image, 90);
    imagedestroy($img);
    
    echo "Test image created: $test_image<br>";
}

// Test the watermark function
try {
    $admin = new Admin();
    $admin->watermark_image($test_image, $test_watermark);
    echo "✓ Watermark function executed successfully!<br>";
    echo "✓ GD extension is working properly!<br>";
} catch (Exception $e) {
    echo "✗ Error: " . $e->getMessage() . "<br>";
}

// Clean up
if (file_exists($test_image)) {
    unlink($test_image);
    echo "Test image cleaned up.<br>";
}
?>
