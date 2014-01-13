<?php

namespace Drupal\panelizer_deploy;

interface ConverterInterface {
  /**
   * Run a conversion to UUID
   *
   * @param array $objects
   */
  public function convertToUUID(&$objects);

  /**
   * Run a conversion to Id
   *
   * @param array $objects
   */
  public function convertToID(&$objects);

  /**
   * Get the key for the object
   *
   * @param $object
   */
  public function getKeyField($object);
}