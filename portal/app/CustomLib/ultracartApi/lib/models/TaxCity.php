<?php
/**
 * TaxCity
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
 * TaxCity Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class TaxCity implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'TaxCity';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'accounting_code' => 'string',
        'city' => 'string',
        'city_oid' => 'int',
        'county_oid' => 'int',
        'dont_collect_city' => 'bool',
        'dont_collect_postal_code' => 'bool',
        'postal_codes' => '\ultracart\v2\models\TaxPostalCode[]',
        'tax_rate' => 'float',
        'tax_rate_formatted' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'accounting_code' => null,
        'city' => null,
        'city_oid' => 'int32',
        'county_oid' => 'int32',
        'dont_collect_city' => null,
        'dont_collect_postal_code' => null,
        'postal_codes' => null,
        'tax_rate' => null,
        'tax_rate_formatted' => null
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
        'accounting_code' => 'accounting_code',
        'city' => 'city',
        'city_oid' => 'city_oid',
        'county_oid' => 'county_oid',
        'dont_collect_city' => 'dont_collect_city',
        'dont_collect_postal_code' => 'dont_collect_postal_code',
        'postal_codes' => 'postal_codes',
        'tax_rate' => 'tax_rate',
        'tax_rate_formatted' => 'tax_rate_formatted'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'accounting_code' => 'setAccountingCode',
        'city' => 'setCity',
        'city_oid' => 'setCityOid',
        'county_oid' => 'setCountyOid',
        'dont_collect_city' => 'setDontCollectCity',
        'dont_collect_postal_code' => 'setDontCollectPostalCode',
        'postal_codes' => 'setPostalCodes',
        'tax_rate' => 'setTaxRate',
        'tax_rate_formatted' => 'setTaxRateFormatted'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'accounting_code' => 'getAccountingCode',
        'city' => 'getCity',
        'city_oid' => 'getCityOid',
        'county_oid' => 'getCountyOid',
        'dont_collect_city' => 'getDontCollectCity',
        'dont_collect_postal_code' => 'getDontCollectPostalCode',
        'postal_codes' => 'getPostalCodes',
        'tax_rate' => 'getTaxRate',
        'tax_rate_formatted' => 'getTaxRateFormatted'
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
        $this->container['accounting_code'] = isset($data['accounting_code']) ? $data['accounting_code'] : null;
        $this->container['city'] = isset($data['city']) ? $data['city'] : null;
        $this->container['city_oid'] = isset($data['city_oid']) ? $data['city_oid'] : null;
        $this->container['county_oid'] = isset($data['county_oid']) ? $data['county_oid'] : null;
        $this->container['dont_collect_city'] = isset($data['dont_collect_city']) ? $data['dont_collect_city'] : null;
        $this->container['dont_collect_postal_code'] = isset($data['dont_collect_postal_code']) ? $data['dont_collect_postal_code'] : null;
        $this->container['postal_codes'] = isset($data['postal_codes']) ? $data['postal_codes'] : null;
        $this->container['tax_rate'] = isset($data['tax_rate']) ? $data['tax_rate'] : null;
        $this->container['tax_rate_formatted'] = isset($data['tax_rate_formatted']) ? $data['tax_rate_formatted'] : null;
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
     * Gets accounting_code
     *
     * @return string
     */
    public function getAccountingCode()
    {
        return $this->container['accounting_code'];
    }

    /**
     * Sets accounting_code
     *
     * @param string $accounting_code Accounting code for programs such as QuickBooks
     *
     * @return $this
     */
    public function setAccountingCode($accounting_code)
    {
        $this->container['accounting_code'] = $accounting_code;

        return $this;
    }

    /**
     * Gets city
     *
     * @return string
     */
    public function getCity()
    {
        return $this->container['city'];
    }

    /**
     * Sets city
     *
     * @param string $city City
     *
     * @return $this
     */
    public function setCity($city)
    {
        $this->container['city'] = $city;

        return $this;
    }

    /**
     * Gets city_oid
     *
     * @return int
     */
    public function getCityOid()
    {
        return $this->container['city_oid'];
    }

    /**
     * Sets city_oid
     *
     * @param int $city_oid Tax record object identifier used internally by database
     *
     * @return $this
     */
    public function setCityOid($city_oid)
    {
        $this->container['city_oid'] = $city_oid;

        return $this;
    }

    /**
     * Gets county_oid
     *
     * @return int
     */
    public function getCountyOid()
    {
        return $this->container['county_oid'];
    }

    /**
     * Sets county_oid
     *
     * @param int $county_oid Tax record object identifier used internally by database
     *
     * @return $this
     */
    public function setCountyOid($county_oid)
    {
        $this->container['county_oid'] = $county_oid;

        return $this;
    }

    /**
     * Gets dont_collect_city
     *
     * @return bool
     */
    public function getDontCollectCity()
    {
        return $this->container['dont_collect_city'];
    }

    /**
     * Sets dont_collect_city
     *
     * @param bool $dont_collect_city Flag instructing engine to not collect city tax for this city
     *
     * @return $this
     */
    public function setDontCollectCity($dont_collect_city)
    {
        $this->container['dont_collect_city'] = $dont_collect_city;

        return $this;
    }

    /**
     * Gets dont_collect_postal_code
     *
     * @return bool
     */
    public function getDontCollectPostalCode()
    {
        return $this->container['dont_collect_postal_code'];
    }

    /**
     * Sets dont_collect_postal_code
     *
     * @param bool $dont_collect_postal_code Flag instructing engine to not collect postal code tax for this city
     *
     * @return $this
     */
    public function setDontCollectPostalCode($dont_collect_postal_code)
    {
        $this->container['dont_collect_postal_code'] = $dont_collect_postal_code;

        return $this;
    }

    /**
     * Gets postal_codes
     *
     * @return \ultracart\v2\models\TaxPostalCode[]
     */
    public function getPostalCodes()
    {
        return $this->container['postal_codes'];
    }

    /**
     * Sets postal_codes
     *
     * @param \ultracart\v2\models\TaxPostalCode[] $postal_codes Postal Codes within this city
     *
     * @return $this
     */
    public function setPostalCodes($postal_codes)
    {
        $this->container['postal_codes'] = $postal_codes;

        return $this;
    }

    /**
     * Gets tax_rate
     *
     * @return float
     */
    public function getTaxRate()
    {
        return $this->container['tax_rate'];
    }

    /**
     * Sets tax_rate
     *
     * @param float $tax_rate Tax Rate
     *
     * @return $this
     */
    public function setTaxRate($tax_rate)
    {
        $this->container['tax_rate'] = $tax_rate;

        return $this;
    }

    /**
     * Gets tax_rate_formatted
     *
     * @return string
     */
    public function getTaxRateFormatted()
    {
        return $this->container['tax_rate_formatted'];
    }

    /**
     * Sets tax_rate_formatted
     *
     * @param string $tax_rate_formatted Tax rate formatted
     *
     * @return $this
     */
    public function setTaxRateFormatted($tax_rate_formatted)
    {
        $this->container['tax_rate_formatted'] = $tax_rate_formatted;

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


