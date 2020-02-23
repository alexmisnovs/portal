<?php
/**
 * WebhookEventSubscription
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
 * WebhookEventSubscription Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class WebhookEventSubscription implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'WebhookEventSubscription';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'comments' => 'string',
        'deprecated_flag' => 'bool',
        'discontinued_flag' => 'bool',
        'event_description' => 'string',
        'event_name' => 'string',
        'expansion' => 'string',
        'subscribed' => 'bool',
        'supports_reflow' => 'bool',
        'webhook_event_oid' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'comments' => null,
        'deprecated_flag' => null,
        'discontinued_flag' => null,
        'event_description' => null,
        'event_name' => null,
        'expansion' => null,
        'subscribed' => null,
        'supports_reflow' => null,
        'webhook_event_oid' => 'int32'
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
        'comments' => 'comments',
        'deprecated_flag' => 'deprecated_flag',
        'discontinued_flag' => 'discontinued_flag',
        'event_description' => 'event_description',
        'event_name' => 'event_name',
        'expansion' => 'expansion',
        'subscribed' => 'subscribed',
        'supports_reflow' => 'supports_reflow',
        'webhook_event_oid' => 'webhook_event_oid'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'comments' => 'setComments',
        'deprecated_flag' => 'setDeprecatedFlag',
        'discontinued_flag' => 'setDiscontinuedFlag',
        'event_description' => 'setEventDescription',
        'event_name' => 'setEventName',
        'expansion' => 'setExpansion',
        'subscribed' => 'setSubscribed',
        'supports_reflow' => 'setSupportsReflow',
        'webhook_event_oid' => 'setWebhookEventOid'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'comments' => 'getComments',
        'deprecated_flag' => 'getDeprecatedFlag',
        'discontinued_flag' => 'getDiscontinuedFlag',
        'event_description' => 'getEventDescription',
        'event_name' => 'getEventName',
        'expansion' => 'getExpansion',
        'subscribed' => 'getSubscribed',
        'supports_reflow' => 'getSupportsReflow',
        'webhook_event_oid' => 'getWebhookEventOid'
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
        $this->container['comments'] = isset($data['comments']) ? $data['comments'] : null;
        $this->container['deprecated_flag'] = isset($data['deprecated_flag']) ? $data['deprecated_flag'] : null;
        $this->container['discontinued_flag'] = isset($data['discontinued_flag']) ? $data['discontinued_flag'] : null;
        $this->container['event_description'] = isset($data['event_description']) ? $data['event_description'] : null;
        $this->container['event_name'] = isset($data['event_name']) ? $data['event_name'] : null;
        $this->container['expansion'] = isset($data['expansion']) ? $data['expansion'] : null;
        $this->container['subscribed'] = isset($data['subscribed']) ? $data['subscribed'] : null;
        $this->container['supports_reflow'] = isset($data['supports_reflow']) ? $data['supports_reflow'] : null;
        $this->container['webhook_event_oid'] = isset($data['webhook_event_oid']) ? $data['webhook_event_oid'] : null;
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
     * Gets comments
     *
     * @return string
     */
    public function getComments()
    {
        return $this->container['comments'];
    }

    /**
     * Sets comments
     *
     * @param string $comments Comment about the event to provide further clarification to the end user
     *
     * @return $this
     */
    public function setComments($comments)
    {
        $this->container['comments'] = $comments;

        return $this;
    }

    /**
     * Gets deprecated_flag
     *
     * @return bool
     */
    public function getDeprecatedFlag()
    {
        return $this->container['deprecated_flag'];
    }

    /**
     * Sets deprecated_flag
     *
     * @param bool $deprecated_flag True if the event is deprecated.  See the API change log for details on when it will be discontinued.
     *
     * @return $this
     */
    public function setDeprecatedFlag($deprecated_flag)
    {
        $this->container['deprecated_flag'] = $deprecated_flag;

        return $this;
    }

    /**
     * Gets discontinued_flag
     *
     * @return bool
     */
    public function getDiscontinuedFlag()
    {
        return $this->container['discontinued_flag'];
    }

    /**
     * Sets discontinued_flag
     *
     * @param bool $discontinued_flag True if the event is discontinued.  See the API change log for details on migration details.
     *
     * @return $this
     */
    public function setDiscontinuedFlag($discontinued_flag)
    {
        $this->container['discontinued_flag'] = $discontinued_flag;

        return $this;
    }

    /**
     * Gets event_description
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->container['event_description'];
    }

    /**
     * Sets event_description
     *
     * @param string $event_description Description of the event
     *
     * @return $this
     */
    public function setEventDescription($event_description)
    {
        $this->container['event_description'] = $event_description;

        return $this;
    }

    /**
     * Gets event_name
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->container['event_name'];
    }

    /**
     * Sets event_name
     *
     * @param string $event_name Event name
     *
     * @return $this
     */
    public function setEventName($event_name)
    {
        $this->container['event_name'] = $event_name;

        return $this;
    }

    /**
     * Gets expansion
     *
     * @return string
     */
    public function getExpansion()
    {
        return $this->container['expansion'];
    }

    /**
     * Sets expansion
     *
     * @param string $expansion The expand string for the notification object.  See the individual resource _expand documentation for valid values.
     *
     * @return $this
     */
    public function setExpansion($expansion)
    {
        $this->container['expansion'] = $expansion;

        return $this;
    }

    /**
     * Gets subscribed
     *
     * @return bool
     */
    public function getSubscribed()
    {
        return $this->container['subscribed'];
    }

    /**
     * Sets subscribed
     *
     * @param bool $subscribed True if this is event is subscribed to
     *
     * @return $this
     */
    public function setSubscribed($subscribed)
    {
        $this->container['subscribed'] = $subscribed;

        return $this;
    }

    /**
     * Gets supports_reflow
     *
     * @return bool
     */
    public function getSupportsReflow()
    {
        return $this->container['supports_reflow'];
    }

    /**
     * Sets supports_reflow
     *
     * @param bool $supports_reflow True if the event can be triggered to reflow existing records
     *
     * @return $this
     */
    public function setSupportsReflow($supports_reflow)
    {
        $this->container['supports_reflow'] = $supports_reflow;

        return $this;
    }

    /**
     * Gets webhook_event_oid
     *
     * @return int
     */
    public function getWebhookEventOid()
    {
        return $this->container['webhook_event_oid'];
    }

    /**
     * Sets webhook_event_oid
     *
     * @param int $webhook_event_oid The webhook event object identifier
     *
     * @return $this
     */
    public function setWebhookEventOid($webhook_event_oid)
    {
        $this->container['webhook_event_oid'] = $webhook_event_oid;

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


