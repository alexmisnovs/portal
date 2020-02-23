<?php
/**
 * ItemDigitalDelivery
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
 * ItemDigitalDelivery Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemDigitalDelivery implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemDigitalDelivery';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'activation_code_description' => 'string',
        'activation_code_low_warning' => 'int',
        'activation_code_realtime_url' => 'string',
        'activation_code_shared_secret' => 'string',
        'activation_code_type' => 'string',
        'digital_items' => '\ultracart\v2\models\ItemDigitalItem[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'activation_code_description' => null,
        'activation_code_low_warning' => 'int32',
        'activation_code_realtime_url' => null,
        'activation_code_shared_secret' => null,
        'activation_code_type' => null,
        'digital_items' => null
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
        'activation_code_description' => 'activation_code_description',
        'activation_code_low_warning' => 'activation_code_low_warning',
        'activation_code_realtime_url' => 'activation_code_realtime_url',
        'activation_code_shared_secret' => 'activation_code_shared_secret',
        'activation_code_type' => 'activation_code_type',
        'digital_items' => 'digital_items'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'activation_code_description' => 'setActivationCodeDescription',
        'activation_code_low_warning' => 'setActivationCodeLowWarning',
        'activation_code_realtime_url' => 'setActivationCodeRealtimeUrl',
        'activation_code_shared_secret' => 'setActivationCodeSharedSecret',
        'activation_code_type' => 'setActivationCodeType',
        'digital_items' => 'setDigitalItems'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'activation_code_description' => 'getActivationCodeDescription',
        'activation_code_low_warning' => 'getActivationCodeLowWarning',
        'activation_code_realtime_url' => 'getActivationCodeRealtimeUrl',
        'activation_code_shared_secret' => 'getActivationCodeSharedSecret',
        'activation_code_type' => 'getActivationCodeType',
        'digital_items' => 'getDigitalItems'
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
        $this->container['activation_code_description'] = isset($data['activation_code_description']) ? $data['activation_code_description'] : null;
        $this->container['activation_code_low_warning'] = isset($data['activation_code_low_warning']) ? $data['activation_code_low_warning'] : null;
        $this->container['activation_code_realtime_url'] = isset($data['activation_code_realtime_url']) ? $data['activation_code_realtime_url'] : null;
        $this->container['activation_code_shared_secret'] = isset($data['activation_code_shared_secret']) ? $data['activation_code_shared_secret'] : null;
        $this->container['activation_code_type'] = isset($data['activation_code_type']) ? $data['activation_code_type'] : null;
        $this->container['digital_items'] = isset($data['digital_items']) ? $data['digital_items'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['activation_code_description']) && (mb_strlen($this->container['activation_code_description']) > 50)) {
            $invalidProperties[] = "invalid value for 'activation_code_description', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['activation_code_realtime_url']) && (mb_strlen($this->container['activation_code_realtime_url']) > 350)) {
            $invalidProperties[] = "invalid value for 'activation_code_realtime_url', the character length must be smaller than or equal to 350.";
        }

        if (!is_null($this->container['activation_code_shared_secret']) && (mb_strlen($this->container['activation_code_shared_secret']) > 20)) {
            $invalidProperties[] = "invalid value for 'activation_code_shared_secret', the character length must be smaller than or equal to 20.";
        }

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

        if (mb_strlen($this->container['activation_code_description']) > 50) {
            return false;
        }
        if (mb_strlen($this->container['activation_code_realtime_url']) > 350) {
            return false;
        }
        if (mb_strlen($this->container['activation_code_shared_secret']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets activation_code_description
     *
     * @return string
     */
    public function getActivationCodeDescription()
    {
        return $this->container['activation_code_description'];
    }

    /**
     * Sets activation_code_description
     *
     * @param string $activation_code_description Description of the activation code
     *
     * @return $this
     */
    public function setActivationCodeDescription($activation_code_description)
    {
        if (!is_null($activation_code_description) && (mb_strlen($activation_code_description) > 50)) {
            throw new \InvalidArgumentException('invalid length for $activation_code_description when calling ItemDigitalDelivery., must be smaller than or equal to 50.');
        }

        $this->container['activation_code_description'] = $activation_code_description;

        return $this;
    }

    /**
     * Gets activation_code_low_warning
     *
     * @return int
     */
    public function getActivationCodeLowWarning()
    {
        return $this->container['activation_code_low_warning'];
    }

    /**
     * Sets activation_code_low_warning
     *
     * @param int $activation_code_low_warning The number of activation codes whcih should generate a warning email
     *
     * @return $this
     */
    public function setActivationCodeLowWarning($activation_code_low_warning)
    {
        $this->container['activation_code_low_warning'] = $activation_code_low_warning;

        return $this;
    }

    /**
     * Gets activation_code_realtime_url
     *
     * @return string
     */
    public function getActivationCodeRealtimeUrl()
    {
        return $this->container['activation_code_realtime_url'];
    }

    /**
     * Sets activation_code_realtime_url
     *
     * @param string $activation_code_realtime_url The URL to retrieve activation codes from in real-time
     *
     * @return $this
     */
    public function setActivationCodeRealtimeUrl($activation_code_realtime_url)
    {
        if (!is_null($activation_code_realtime_url) && (mb_strlen($activation_code_realtime_url) > 350)) {
            throw new \InvalidArgumentException('invalid length for $activation_code_realtime_url when calling ItemDigitalDelivery., must be smaller than or equal to 350.');
        }

        $this->container['activation_code_realtime_url'] = $activation_code_realtime_url;

        return $this;
    }

    /**
     * Gets activation_code_shared_secret
     *
     * @return string
     */
    public function getActivationCodeSharedSecret()
    {
        return $this->container['activation_code_shared_secret'];
    }

    /**
     * Sets activation_code_shared_secret
     *
     * @param string $activation_code_shared_secret Shared secret used when communicating with the real-time URL
     *
     * @return $this
     */
    public function setActivationCodeSharedSecret($activation_code_shared_secret)
    {
        if (!is_null($activation_code_shared_secret) && (mb_strlen($activation_code_shared_secret) > 20)) {
            throw new \InvalidArgumentException('invalid length for $activation_code_shared_secret when calling ItemDigitalDelivery., must be smaller than or equal to 20.');
        }

        $this->container['activation_code_shared_secret'] = $activation_code_shared_secret;

        return $this;
    }

    /**
     * Gets activation_code_type
     *
     * @return string
     */
    public function getActivationCodeType()
    {
        return $this->container['activation_code_type'];
    }

    /**
     * Sets activation_code_type
     *
     * @param string $activation_code_type Type of activation code
     *
     * @return $this
     */
    public function setActivationCodeType($activation_code_type)
    {
        $this->container['activation_code_type'] = $activation_code_type;

        return $this;
    }

    /**
     * Gets digital_items
     *
     * @return \ultracart\v2\models\ItemDigitalItem[]
     */
    public function getDigitalItems()
    {
        return $this->container['digital_items'];
    }

    /**
     * Sets digital_items
     *
     * @param \ultracart\v2\models\ItemDigitalItem[] $digital_items Digital items that customer can download when this item is purchased
     *
     * @return $this
     */
    public function setDigitalItems($digital_items)
    {
        $this->container['digital_items'] = $digital_items;

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


