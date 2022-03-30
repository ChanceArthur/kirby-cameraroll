<?php

use Kirby\Cms\Page;
use Kirby\Cms\Pages;

class PhotosPage extends Page {
  public function children() {
    $images = [];

    foreach ($this->images()->template('photo') as $image) {

      if ($image->location()->isNotEmpty()) {
        $title = $image->location();
      } elseif ($image->alt()->isNotEmpty()) {
        $title = $image->alt();
      } else {
        $title = "Photo";
      }

      $images[] = [
        'slug'     => $image->name(),
        'template' => 'photo',
        'model'    => 'photo',
        'content'  => [
          'title' => $title,
          $image->content()->toArray()
        ]
      ];
    }

    return Pages::factory($images, $this);
  }
}
