<?php
/**
 * CartBuysafe
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
 * CartBuysafe Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class CartBuysafe implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'CartBuysafe';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bond_available' => 'bool',
        'bond_cost' => '\ultracart\v2\models\Currency',
        'bond_free' => 'bool',
        'bond_wanted' => 'bool',
        'cart_display_text' => 'string',
        'cart_display_url' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'bond_available' => null,
        'bond_cost' => null,
        'bond_free' => null,
        'bond_wanted' => null,
        'cart_display_text' => null,
        'cart_display_url' => null
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
        'bond_available' => 'bond_available',
        'bond_cost' => 'bond_cost',
        'bond_free' => 'bond_free',
        'bond_wanted' => 'bond_wanted',
        'cart_display_text' => 'cart_display_text',
        'cart_display_url' => 'cart_display_url'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bond_available' => 'setBondAvailable',
        'bond_cost' => 'setBondCost',
        'bond_free' => 'setBondFree',
        'bond_wanted' => 'setBondWanted',
        'cart_display_text' => 'setCartDisplayText',
        'cart_display_url' => 'setCartDisplayUrl'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bond_available' => 'getBondAvailable',
        'bond_cost' => 'getBondCost',
        'bond_free' => 'getBondFree',
        'bond_wanted' => 'getBondWanted',
        'cart_display_text' => 'getCartDisplayText',
        'cart_display_url' => 'getCartDisplayUrl'
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
        $this->container['bond_available'] = isset($data['bond_available']) ? $data['bond_available'] : null;
        $this->container['bond_cost'] = isset($data['bond_cost']) ? $data['bond_cost'] : null;
        $this->container['bond_free'] = isset($data['bond_free']) ? $data['bond_free'] : null;
        $this->container['bond_wanted'] = isset($data['bond_wanted']) ? $data['bond_wanted'] : null;
        $this->container['cart_display_text'] = isset($data['cart_display_text']) ? $data['cart_display_text'] : null;
        $this->container['cart_display_url'] = isset($data['cart_display_url']) ? $data['cart_display_url'] : null;
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
     * Gets bond_available
     *
     * @return bool
     */
    public function getBondAvailable()
    {
        return $this->container['bond_available'];
    }

    /**
     * Sets bond_available
     *
     * @param bool $bond_available True if buySAFE is willing to bond the order
     *
     * @return $this
     */
    public function setBondAvailable($bond_available)
    {
        $this->container['bond_available'] = $bond_available;

        return $this;
    }

    /**
     * Gets bond_cost
     *
     * @return \ultracart\v2\models\Currency
     */
    public function getBondCost()
    {
        return $this->container['bond_cost'];
    }

    /**
     * Sets bond_cost
     *
     * @param \ultracart\v2\models\Currency $bond_cost bond_cost
     *
     * @return $this
     */
    public function setBondCost($bond_cost)
    {
        $this->container['bond_cost'] = $bond_cost;

        return $this;
    }

    /**
     * Gets bond_free
     *
     * @return bool
     */
    public function getBondFree()
    {
        return $this->container['bond_free'];
    }

    /**
     * Sets bond_free
     *
     * @param bool $bond_free True if the bond is free (merchant paying for it)
     *
     * @return $this
     */
    public function setBondFree($bond_free)
    {
        $this->container['bond_free'] = $bond_free;

        return $this;
    }

    /**
     * Gets bond_wanted
     *
     * @return bool
     */
    public function getBondWanted()
    {
        return $this->container['bond_wanted'];
    }

    /**
     * Sets bond_wanted
     *
     * @param bool $bond_wanted True if the customer wants the bond
     *
     * @return $this
     */
    public function setBondWanted($bond_wanted)
    {
        $this->container['bond_wanted'] = $bond_wanted;

        return $this;
    }

    /**
     * Gets cart_display_text
     *
     * @return string
     */
    public function getCartDisplayText()
    {
        return $this->container['cart_display_text'];
    }

    /**
     * Sets cart_display_text
     *
     * @param string $cart_display_text Recommend text to display to the customer
     *
     * @return $this
     */
    public function setCartDisplayText($cart_display_text)
    {
        $this->container['cart_display_text'] = $cart_display_text;

        return $this;
    }

    /**
     * Gets cart_display_url
     *
     * @return string
     */
    public function getCartDisplayUrl()
    {
        return $this->container['cart_display_url'];
    }

    /**
     * Sets cart_display_url
     *
     * @param string $cart_display_url URL associated with the recommended text
     *
     * @return $this
     */
    public function setCartDisplayUrl($cart_display_url)
    {
        $this->container['cart_display_url'] = $cart_display_url;

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


