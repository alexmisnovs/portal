<?php
/**
 * Metric
 *
 * PHP version 5
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * UltraCart Rest API V2
 *
 * UltraCart REST API Version 2
 *
 * OpenAPI spec version: 2.0.0
 * Contact: support@ultracart.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace ultracart\v2\models;

use \ArrayAccess;
use \ultracart\v2\ObjectSerializer;

/**
 * Metric Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Metric implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Metric';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'all_time' => 'float',
        'all_time_formatted' => 'string',
        'last_30' => 'float',
        'last_30_formatted' => 'string',
        'name' => 'string',
        'prior_30' => 'float',
        'prior_30_formatted' => 'string',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'all_time' => null,
        'all_time_formatted' => null,
        'last_30' => null,
        'last_30_formatted' => null,
        'name' => null,
        'prior_30' => null,
        'prior_30_formatted' => null,
        'type' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'all_time' => 'all_time',
        'all_time_formatted' => 'all_time_formatted',
        'last_30' => 'last_30',
        'last_30_formatted' => 'last_30_formatted',
        'name' => 'name',
        'prior_30' => 'prior_30',
        'prior_30_formatted' => 'prior_30_formatted',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'all_time' => 'setAllTime',
        'all_time_formatted' => 'setAllTimeFormatted',
        'last_30' => 'setLast30',
        'last_30_formatted' => 'setLast30Formatted',
        'name' => 'setName',
        'prior_30' => 'setPrior30',
        'prior_30_formatted' => 'setPrior30Formatted',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'all_time' => 'getAllTime',
        'all_time_formatted' => 'getAllTimeFormatted',
        'last_30' => 'getLast30',
        'last_30_formatted' => 'getLast30Formatted',
        'name' => 'getName',
        'prior_30' => 'getPrior30',
        'prior_30_formatted' => 'getPrior30Formatted',
        'type' => 'getType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['all_time'] = isset($data['all_time']) ? $data['all_time'] : null;
        $this->container['all_time_formatted'] = isset($data['all_time_formatted']) ? $data['all_time_formatted'] : null;
        $this->container['last_30'] = isset($data['last_30']) ? $data['last_30'] : null;
        $this->container['last_30_formatted'] = isset($data['last_30_formatted']) ? $data['last_30_formatted'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['prior_30'] = isset($data['prior_30']) ? $data['prior_30'] : null;
        $this->container['prior_30_formatted'] = isset($data['prior_30_formatted']) ? $data['prior_30_formatted'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        return true;
    }


    /**
     * Gets all_time
     *
     * @return float
     */
    public function getAllTime()
    {
        return $this->container['all_time'];
    }

    /**
     * Sets all_time
     *
     * @param float $all_time all_time
     *
     * @return $this
     */
    public function setAllTime($all_time)
    {
        $this->container['all_time'] = $all_time;

        return $this;
    }

    /**
     * Gets all_time_formatted
     *
     * @return string
     */
    public function getAllTimeFormatted()
    {
        return $this->container['all_time_formatted'];
    }

    /**
     * Sets all_time_formatted
     *
     * @param string $all_time_formatted all_time_formatted
     *
     * @return $this
     */
    public function setAllTimeFormatted($all_time_formatted)
    {
        $this->container['all_time_formatted'] = $all_time_formatted;

        return $this;
    }

    /**
     * Gets last_30
     *
     * @return float
     */
    public function getLast30()
    {
        return $this->container['last_30'];
    }

    /**
     * Sets last_30
     *
     * @param float $last_30 last_30
     *
     * @return $this
     */
    public function setLast30($last_30)
    {
        $this->container['last_30'] = $last_30;

        return $this;
    }

    /**
     * Gets last_30_formatted
     *
     * @return string
     */
    public function getLast30Formatted()
    {
        return $this->container['last_30_formatted'];
    }

    /**
     * Sets last_30_formatted
     *
     * @param string $last_30_formatted last_30_formatted
     *
     * @return $this
     */
    public function setLast30Formatted($last_30_formatted)
    {
        $this->container['last_30_formatted'] = $last_30_formatted;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name name
     *
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets prior_30
     *
     * @return float
     */
    public function getPrior30()
    {
        return $this->container['prior_30'];
    }

    /**
     * Sets prior_30
     *
     * @param float $prior_30 prior_30
     *
     * @return $this
     */
    public function setPrior30($prior_30)
    {
        $this->container['prior_30'] = $prior_30;

        return $this;
    }

    /**
     * Gets prior_30_formatted
     *
     * @return string
     */
    public function getPrior30Formatted()
    {
        return $this->container['prior_30_formatted'];
    }

    /**
     * Sets prior_30_formatted
     *
     * @param string $prior_30_formatted prior_30_formatted
     *
     * @return $this
     */
    public function setPrior30Formatted($prior_30_formatted)
    {
        $this->container['prior_30_formatted'] = $prior_30_formatted;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type type
     *
     * @return $this
     */
    public function setType($type)
    {
        $this->container['type'] = $type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}


