<?php

namespace Drupal\panelizer_deploy;


class EntityContextConverter extends EntityConverter implements ConverterInterface {

  /**
   * Override the preconvert.
   *
   * The objects will be ctools context arrays
   *
   * @param array $objects
   * @param $key_field
   * @return array
   */
  protected function preConvert(&$objects, $key_field) {

  }

}