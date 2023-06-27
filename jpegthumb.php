<?php

if (!isset($argv[1])) {
	die('please provide a filename as a parameter' . "\n");
}
$filename = $argv[1];
if (!file_exists($filename)) {
	die('file does not exist' . "\n");
}
/* our output filename */
if (file_exists('thumb-' . basename($filename))) {
	die('thumbnail filename exists, thumb-' . basename($filename) . "\n");
}

$data = exif_read_data($filename, 'FILE,COMPUTED,ANY_TAG,IFD0,COMMENT,EXIF', true, true);

if (isset($data['THUMBNAIL']['THUMBNAIL'])) {
	file_put_contents( 'thumb-' . basename($filename), $data['THUMBNAIL']['THUMBNAIL']);
}
