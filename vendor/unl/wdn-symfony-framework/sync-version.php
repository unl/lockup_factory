<?php
/*
  This file is intended to sync the listed twig files from wdntemplates repo for specified WDN version.
  Any updates resulting from sync can be committed to this repo.
*/
const WDN_SOURCE_ROOT = 'https://raw.githubusercontent.com/unl/wdntemplates/';
const APP_LOCAL_DWT = 'php.app_local.dwt.twig';
const LOCAL_DWT = 'php.local.dwt.twig';
const VIEWS_PATH = __DIR__ . '/Resources/views/';
const DWT_VIEWS = array(APP_LOCAL_DWT, LOCAL_DWT);

if (is_array($argv) && isset($argv[1]) && preg_match('/^\d+\.\d+$/', $argv[1])) {
  $version = $argv[1];
  $viewsDirectory = VIEWS_PATH . $version;

  // Create version directory if DNE
  if (!is_dir($viewsDirectory)) {
    mkdir($viewsDirectory, 0777, true);
  }

  // Sync DWT Files for version
  if (is_dir($viewsDirectory)) {
    echo 'Syncing WDN twig templates for version ' . $version .  "\n";
    foreach (DWT_VIEWS as $dwtView) {
      $sourceViewName = WDN_SOURCE_ROOT . $version . '/Templates/'. $dwtView;
      $sourceViewContents = trim(file_get_contents($sourceViewName));
      $destFile = $viewsDirectory . '/' . $dwtView;

      // create or overwrite file
      $result = file_put_contents($destFile, $sourceViewContents);
      if ($result) {
        echo "\tsynced " . $dwtView . "\n";
      } else {
        echo "\tfailed to sync " . $dwtView . "\n";
      }
    }
  }
} else {
  echo "Invalid or missing WDN version. Usage 'php sync-version.php 5.3'\n";
}
