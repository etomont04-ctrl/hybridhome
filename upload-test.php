<?php
/* ==========================================================================
	PHPからuploadsへ書き込めるか確認
========================================================================== */

$dir = __DIR__ . '/wp/wp-content/uploads/';
$file = $dir . 'php-write-test.txt';

echo '<pre>';

echo 'dir: ' . $dir . "\n";
echo 'exists: ' . (is_dir($dir) ? 'yes' : 'no') . "\n";
echo 'writable: ' . (is_writable($dir) ? 'yes' : 'no') . "\n";

$result = @file_put_contents($file, 'test');

echo 'file_put_contents: ' . ($result !== false ? 'success' : 'failed') . "\n";
echo 'created: ' . (file_exists($file) ? 'yes' : 'no') . "\n";

if (file_exists($file)) {
	unlink($file);
}

echo '</pre>';