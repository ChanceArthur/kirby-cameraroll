<?php
use Kirby\Cms\App as Kirby;

require __DIR__ . '/models/Photos.php';
require __DIR__ . '/models/Photo.php';

Kirby::plugin('chancearthur/cameraroll', [
  'pageModels' => [
    'photos' => 'PhotosPage',
    'photo'  => 'PhotoPage',
  ]
]);
