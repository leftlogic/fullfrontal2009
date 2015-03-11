<?php
$names = array(
  'christian',
  'jake',
  'ppk',
  'robert',
  'stuart',
  'simon',
  'todd'
);

shuffle($names);
$name = array_pop($names);
$url = 'ff2009-' . $name . '.png';

$pinfo = pathinfo($url);
header('Content-type: image/' . $pinfo['extension']);
echo file_get_contents($url);

// prevent caching to force the image to rotate
// header('Location: ' . $url);

?>