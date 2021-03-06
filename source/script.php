#!/usr/bin/php

<?php
/**
 * GammaFix 1.0
 * Copyright (c) 2009 Malte Wassermann
 */
$pngcrush = "$argv[1]/Contents/Resources/pngcrush";
foreach ($argv as $file) {
  if ($items > 1) {
    $filename = basename($file);
    $suffix = strrchr($file, '.');
    $name = basename($file, $suffix);
    $path = dirname($file);
    $newFile = $path . '/' . $name . '.fix' . $suffix;
    if (!file_exists($newFile)) {
      system("$pngcrush -rem cHRM -rem gAMA -rem iCCP -rem sRGB '$file' '$newFile'", $results);
    }
  }
  $items++;
}
?>
