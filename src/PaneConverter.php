<?php

namespace Drupal\panelizer_deploy;

class PaneConverter implements ConverterInterface {

  /**
   * Run a conversion to UUID
   *
   * @param array $objects
   */
  public function convertToUUID(&$objects) {
    \panels_uuid_convert_pane_to_uuid($objects);
  }

  /**
   * Run a conversion to Id
   *
   * @param array $objects
   */
  public function convertToID(&$objects) {
    \panels_uuid_convert_pane_to_id($objects);
  }

  /**
   * Get the key for the object
   *
   * @param $object
   */
  public function getKeyField($object) {
    return $object->pid;
  }
}