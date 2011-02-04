<?php

/**
 * Return the appropriate HTTP definition for a given status code.
 *
 * @code
 *  echo HttpStatusCodeDefinition::get(504); // Gateway Time-out
 * @endcode
 *
 * @author Jon Ursenbach <jon@gdgt.com>
 *
 */
class HttpStatusCodeDefinition {
  public static $instance;

  /**
   * Holds an array of loaded definitions from $json_location.
   *
   * @var array
   */
  public static $definitions = array();

  /**
   * Location of the JSON definitions file.
   *
   * @var string
   */
  public static $json_location = '/../definitions.json';

  public function __construct() {
    $json = dirname(__FILE__) . static::$json_location;
    $definitions = file_get_contents($json);
    static::$definitions = json_decode($definitions, true);
  }

  /**
   * Create a new HttpStatusCodeDefinition instance, or pull the existing one
   * if it's already been created.
   *
   * @return HttpStatusCodeDefinition
   */
  public static function getInstance() {
    if (!isset(static::$instance) || is_null(static::$instance)) {
      $class = get_called_class();
      static::$instance = new $class;
    }

    return static::$instance;
  }

  /**
   * Get a status code definition.
   *
   * @throws Exception if the supplied $status_code isn't defined
   *
   * @param integer $status_code
   *
   * @return string definition for the given status code
   */
  public static function get($status_code) {
    if (!isset(static::$instance)) {
      static::getInstance();
    }

    if (isset(static::$definitions[$status_code])) {
      return static::$definitions[$status_code];
    }

    throw new Exception('Status code [' . $status_code . '] not defined.');
  }
}
