<?php

namespace Drupal\panelizer_deploy;

class PaneEntityConverter extends EntityConverter implements ConverterInterface {
  /**
   * Before converting the object setup the
   * tracking of ids and references
   *
   * @param $objects array
   * @param $key_field
   * @return array
   */
  protected function preConvert(&$objects, $key_field) {
    if (!is_array($objects)) {
      $things = array(&$objects);
    } else {
      $things = &$objects;
    }

    // track the ids
    $ids = array();
    $i = 0;
    foreach ($things as &$thing) {
      $this->refs[$i] = &$thing->entity_id;
      $ids[] = $this->refs[$i];
      $i++;
    }

    return $ids;
  }

}