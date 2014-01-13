<?php

namespace Drupal\panelizer_deploy;

class EntityConverter implements ConverterInterface {
  protected $entity_type;

  public function __construct($entity_type) {
    $this->entity_type = $entity_type;
  }

  public function getKeyField($object) {
    $info = \entity_get_info($this->entity_type);

    return $object->{$info['entity keys']['id']};
  }

  public function convertToUUID(&$objects) {
    $info = \entity_get_info($this->entity_type);
    \entity_property_id_to_uuid($objects, $this->entity_type, $info['entity keys']['id']);
  }

  public function convertToID(&$objects) {
    $info = \entity_get_info($this->entity_type);
    \entity_property_uuid_to_id($objects, $this->entity_type, $info['entity keys']['id']);
  }
}