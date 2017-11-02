<?php
/**
 * @file
 * Functions that need to be loaded on every request.
 */

/**
 * data_load wrapper to load the xml file from config/ subpath.
 */
function config_load($entity_type) {
  return data_load($entity_type, DATA_CONFIG_SUBPATH);
}

 /**
  * Returns all xml data elements in the specified entity type file.
  *
  * @param string $entity_type
  *   The name of the xml document corresponding to the entity data.
  * @return mixed
  *   The xml data elements.
  */
function data_load($entity_type, $subpath = DATA_CONTENT_SUBPATH) {
  $xml = load_xml($entity_type, $subpath);
  return $xml->data;
}

/**
 * Returns all xml data elements of the specified entity type.
 *
 * @param string $entity_type
 *   The name of the xml document corresponding to the entity data, also the
 *   name of the elements inside the root data element.
 * @return mixed
 *   The xml data elements.
 */
function data_find_all($entity_type) {
  $xml = load_xml($entity_type);
  return $xml->data->$entity_type;
}

/**
 * Finds an entity element from the specified type.
 *
 * @param string $entity_type
 *   The name of the xml document corresponding to the entity data, also the
 *   name of the elements inside the root data element.
 *
 * @param string $id
 *   The content of the id node defining the entity element, must be unique.
 *
 * @return bool|SimpleXMLElement
 *   The specified xml element.
 */
function data_find($entity_type, $id) {
  $entity = FALSE;
  $xml = load_xml($entity_type);
  $result = $xml->xpath('//' . $entity_type . '[id="' . $id . '"]');
  if (isset($result[0])) {
    $entity = $result[0];
  }
  return $entity;
}

/**
 * A shortcut for printing the get_data() content result.
 *
 * @param $field
 *
 * @see get_data().
 */
function print_data($field) {
  print get_data($field);
}

/**
 * Gets the content from the specified field node of the xml element.
 *
 * @param $field
 *   The name of the element corresponding to the entity field.
 *
 * @return mixed
 *   The contents of the field element.
 */
function get_data($field) {
  $content = $field->innerXML();
  if (substr($content, 0, 9) == "<![CDATA[") if (substr($content, -3) == "]]>") {
    $content = substr_replace($content, '', 0, 9);
    $content = substr_replace($content, '', -3);
  }
  return $content;
}

/**
 * Loads the entity type xml document.
 *
 * @param string $entity_type
 *   The name of the xml document corresponding to the entity data, also the
 *   name of the elements inside the root data element.
 *
 * @return SimpleDOM
 *   The specified xml document.
 *
 * @see /core/includes/SimpleDOM.php
 */
function load_xml($entity_type, $subpath = DATA_CONTENT_SUBPATH) {
  require_once('vendor/SimpleDOM.php');
  $file = DATA_PATH . $subpath . $entity_type . ".xml";
  $xml = simpledom_load_file($file);
  return $xml;
}
