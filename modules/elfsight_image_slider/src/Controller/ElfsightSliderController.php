<?php

namespace Drupal\elfsight_slider\Controller;

use Drupal\Core\Controller\ControllerBase;

/**
 * {@inheritdoc}
 */
class ElfsightSliderController extends ControllerBase {

  /**
   * {@inheritdoc}
   */
  public function content() {
    $params = [
      'user' => [
        'configEmail' => \Drupal::config('system.site')->get('mail'),
      ],
    ];

    $url = 'https://apps.elfsight.com/embed/slider/?utm_source=portals&utm_medium=drupal&utm_campaign=slider&utm_content=sign-up&params=' . urlencode(json_encode($params));

    require_once __DIR__ . '/embed.php';

    return [
      'response' => 1,
    ];
  }

}
