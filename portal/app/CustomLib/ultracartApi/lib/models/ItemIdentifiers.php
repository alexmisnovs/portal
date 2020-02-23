<?php
/**
 * ItemIdentifiers
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
 * ItemIdentifiers Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemIdentifiers implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemIdentifiers';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'barcode' => 'string',
        'manufacturer_name' => 'string',
        'manufacturer_sku' => 'string',
        'unspsc' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'barcode' => null,
        'manufacturer_name' => null,
        'manufacturer_sku' => null,
        'unspsc' => null
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
        'barcode' => 'barcode',
        'manufacturer_name' => 'manufacturer_name',
        'manufacturer_sku' => 'manufacturer_sku',
        'unspsc' => 'unspsc'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'barcode' => 'setBarcode',
        'manufacturer_name' => 'setManufacturerName',
        'manufacturer_sku' => 'setManufacturerSku',
        'unspsc' => 'setUnspsc'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'barcode' => 'getBarcode',
        'manufacturer_name' => 'getManufacturerName',
        'manufacturer_sku' => 'getManufacturerSku',
        'unspsc' => 'getUnspsc'
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
        $this->container['barcode'] = isset($data['barcode']) ? $data['barcode'] : null;
        $this->container['manufacturer_name'] = isset($data['manufacturer_name']) ? $data['manufacturer_name'] : null;
        $this->container['manufacturer_sku'] = isset($data['manufacturer_sku']) ? $data['manufacturer_sku'] : null;
        $this->container['unspsc'] = isset($data['unspsc']) ? $data['unspsc'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['barcode']) && (mb_strlen($this->container['barcode']) > 30)) {
            $invalidProperties[] = "invalid value for 'barcode', the character length must be smaller than or equal to 30.";
        }

        if (!is_null($this->container['manufacturer_name']) && (mb_strlen($this->container['manufacturer_name']) > 50)) {
            $invalidProperties[] = "invalid value for 'manufacturer_name', the character length must be smaller than or equal to 50.";
        }

        if (!is_null($this->container['manufacturer_sku']) && (mb_strlen($this->container['manufacturer_sku']) > 25)) {
            $invalidProperties[] = "invalid value for 'manufacturer_sku', the character length must be smaller than or equal to 25.";
        }

        if (!is_null($this->container['unspsc']) && (mb_strlen($this->container['unspsc']) > 20)) {
            $invalidProperties[] = "invalid value for 'unspsc', the character length must be smaller than or equal to 20.";
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

        if (mb_strlen($this->container['barcode']) > 30) {
            return false;
        }
        if (mb_strlen($this->container['manufacturer_name']) > 50) {
            return false;
        }
        if (mb_strlen($this->container['manufacturer_sku']) > 25) {
            return false;
        }
        if (mb_strlen($this->container['unspsc']) > 20) {
            return false;
        }
        return true;
    }


    /**
     * Gets barcode
     *
     * @return string
     */
    public function getBarcode()
    {
        return $this->container['barcode'];
    }

    /**
     * Sets barcode
     *
     * @param string $barcode Barcode
     *
     * @return $this
     */
    public function setBarcode($barcode)
    {
        if (!is_null($barcode) && (mb_strlen($barcode) > 30)) {
            throw new \InvalidArgumentException('invalid length for $barcode when calling ItemIdentifiers., must be smaller than or equal to 30.');
        }

        $this->container['barcode'] = $barcode;

        return $this;
    }

    /**
     * Gets manufacturer_name
     *
     * @return string
     */
    public function getManufacturerName()
    {
        return $this->container['manufacturer_name'];
    }

    /**
     * Sets manufacturer_name
     *
     * @param string $manufacturer_name Manufacturer Name
     *
     * @return $this
     */
    public function setManufacturerName($manufacturer_name)
    {
        if (!is_null($manufacturer_name) && (mb_strlen($manufacturer_name) > 50)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_name when calling ItemIdentifiers., must be smaller than or equal to 50.');
        }

        $this->container['manufacturer_name'] = $manufacturer_name;

        return $this;
    }

    /**
     * Gets manufacturer_sku
     *
     * @return string
     */
    public function getManufacturerSku()
    {
        return $this->container['manufacturer_sku'];
    }

    /**
     * Sets manufacturer_sku
     *
     * @param string $manufacturer_sku Manufacturer SKU
     *
     * @return $this
     */
    public function setManufacturerSku($manufacturer_sku)
    {
        if (!is_null($manufacturer_sku) && (mb_strlen($manufacturer_sku) > 25)) {
            throw new \InvalidArgumentException('invalid length for $manufacturer_sku when calling ItemIdentifiers., must be smaller than or equal to 25.');
        }

        $this->container['manufacturer_sku'] = $manufacturer_sku;

        return $this;
    }

    /**
     * Gets unspsc
     *
     * @return string
     */
    public function getUnspsc()
    {
        return $this->container['unspsc'];
    }

    /**
     * Sets unspsc
     *
     * @param string $unspsc UNSPSC
     *
     * @return $this
     */
    public function setUnspsc($unspsc)
    {
        if (!is_null($unspsc) && (mb_strlen($unspsc) > 20)) {
            throw new \InvalidArgumentException('invalid length for $unspsc when calling ItemIdentifiers., must be smaller than or equal to 20.');
        }

        $this->container['unspsc'] = $unspsc;

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


