<?php
/**
 * ItemAutoOrderStep
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
 * ItemAutoOrderStep Class Doc Comment
 *
 * @category Class
 * @package  ultracart\v2
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class ItemAutoOrderStep implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'ItemAutoOrderStep';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'arbitrary_schedule_days' => 'int',
        'arbitrary_unit_cost' => 'float',
        'arbitrary_unit_cost_schedules' => '\ultracart\v2\models\ItemAutoOrderStepArbitraryUnitCostSchedule[]',
        'grandfather_pricing' => '\ultracart\v2\models\ItemAutoOrderStepGrandfatherPricing[]',
        'managed_by' => 'string',
        'pause_days' => 'int',
        'pause_until_date' => 'string',
        'preshipment_notice_days' => 'int',
        'recurring_merchant_item_id' => 'string',
        'recurring_merchant_item_oid' => 'int',
        'repeat_count' => 'int',
        'schedule' => 'string',
        'subscribe_email_list_name' => 'string',
        'subscribe_email_list_oid' => 'int',
        'type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'arbitrary_schedule_days' => 'int32',
        'arbitrary_unit_cost' => null,
        'arbitrary_unit_cost_schedules' => null,
        'grandfather_pricing' => null,
        'managed_by' => null,
        'pause_days' => 'int32',
        'pause_until_date' => 'dateTime',
        'preshipment_notice_days' => 'int32',
        'recurring_merchant_item_id' => null,
        'recurring_merchant_item_oid' => 'int32',
        'repeat_count' => 'int32',
        'schedule' => null,
        'subscribe_email_list_name' => null,
        'subscribe_email_list_oid' => 'int32',
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
        'arbitrary_schedule_days' => 'arbitrary_schedule_days',
        'arbitrary_unit_cost' => 'arbitrary_unit_cost',
        'arbitrary_unit_cost_schedules' => 'arbitrary_unit_cost_schedules',
        'grandfather_pricing' => 'grandfather_pricing',
        'managed_by' => 'managed_by',
        'pause_days' => 'pause_days',
        'pause_until_date' => 'pause_until_date',
        'preshipment_notice_days' => 'preshipment_notice_days',
        'recurring_merchant_item_id' => 'recurring_merchant_item_id',
        'recurring_merchant_item_oid' => 'recurring_merchant_item_oid',
        'repeat_count' => 'repeat_count',
        'schedule' => 'schedule',
        'subscribe_email_list_name' => 'subscribe_email_list_name',
        'subscribe_email_list_oid' => 'subscribe_email_list_oid',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'arbitrary_schedule_days' => 'setArbitraryScheduleDays',
        'arbitrary_unit_cost' => 'setArbitraryUnitCost',
        'arbitrary_unit_cost_schedules' => 'setArbitraryUnitCostSchedules',
        'grandfather_pricing' => 'setGrandfatherPricing',
        'managed_by' => 'setManagedBy',
        'pause_days' => 'setPauseDays',
        'pause_until_date' => 'setPauseUntilDate',
        'preshipment_notice_days' => 'setPreshipmentNoticeDays',
        'recurring_merchant_item_id' => 'setRecurringMerchantItemId',
        'recurring_merchant_item_oid' => 'setRecurringMerchantItemOid',
        'repeat_count' => 'setRepeatCount',
        'schedule' => 'setSchedule',
        'subscribe_email_list_name' => 'setSubscribeEmailListName',
        'subscribe_email_list_oid' => 'setSubscribeEmailListOid',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'arbitrary_schedule_days' => 'getArbitraryScheduleDays',
        'arbitrary_unit_cost' => 'getArbitraryUnitCost',
        'arbitrary_unit_cost_schedules' => 'getArbitraryUnitCostSchedules',
        'grandfather_pricing' => 'getGrandfatherPricing',
        'managed_by' => 'getManagedBy',
        'pause_days' => 'getPauseDays',
        'pause_until_date' => 'getPauseUntilDate',
        'preshipment_notice_days' => 'getPreshipmentNoticeDays',
        'recurring_merchant_item_id' => 'getRecurringMerchantItemId',
        'recurring_merchant_item_oid' => 'getRecurringMerchantItemOid',
        'repeat_count' => 'getRepeatCount',
        'schedule' => 'getSchedule',
        'subscribe_email_list_name' => 'getSubscribeEmailListName',
        'subscribe_email_list_oid' => 'getSubscribeEmailListOid',
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

    const TYPE_ITEM = 'item';
    const TYPE_PAUSE = 'pause';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_ITEM,
            self::TYPE_PAUSE,
        ];
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
        $this->container['arbitrary_schedule_days'] = isset($data['arbitrary_schedule_days']) ? $data['arbitrary_schedule_days'] : null;
        $this->container['arbitrary_unit_cost'] = isset($data['arbitrary_unit_cost']) ? $data['arbitrary_unit_cost'] : null;
        $this->container['arbitrary_unit_cost_schedules'] = isset($data['arbitrary_unit_cost_schedules']) ? $data['arbitrary_unit_cost_schedules'] : null;
        $this->container['grandfather_pricing'] = isset($data['grandfather_pricing']) ? $data['grandfather_pricing'] : null;
        $this->container['managed_by'] = isset($data['managed_by']) ? $data['managed_by'] : null;
        $this->container['pause_days'] = isset($data['pause_days']) ? $data['pause_days'] : null;
        $this->container['pause_until_date'] = isset($data['pause_until_date']) ? $data['pause_until_date'] : null;
        $this->container['preshipment_notice_days'] = isset($data['preshipment_notice_days']) ? $data['preshipment_notice_days'] : null;
        $this->container['recurring_merchant_item_id'] = isset($data['recurring_merchant_item_id']) ? $data['recurring_merchant_item_id'] : null;
        $this->container['recurring_merchant_item_oid'] = isset($data['recurring_merchant_item_oid']) ? $data['recurring_merchant_item_oid'] : null;
        $this->container['repeat_count'] = isset($data['repeat_count']) ? $data['repeat_count'] : null;
        $this->container['schedule'] = isset($data['schedule']) ? $data['schedule'] : null;
        $this->container['subscribe_email_list_name'] = isset($data['subscribe_email_list_name']) ? $data['subscribe_email_list_name'] : null;
        $this->container['subscribe_email_list_oid'] = isset($data['subscribe_email_list_oid']) ? $data['subscribe_email_list_oid'] : null;
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

        if (!is_null($this->container['recurring_merchant_item_id']) && (mb_strlen($this->container['recurring_merchant_item_id']) > 20)) {
            $invalidProperties[] = "invalid value for 'recurring_merchant_item_id', the character length must be smaller than or equal to 20.";
        }

        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if (mb_strlen($this->container['recurring_merchant_item_id']) > 20) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /**
     * Gets arbitrary_schedule_days
     *
     * @return int
     */
    public function getArbitraryScheduleDays()
    {
        return $this->container['arbitrary_schedule_days'];
    }

    /**
     * Sets arbitrary_schedule_days
     *
     * @param int $arbitrary_schedule_days If the schedule is arbitrary, then this is the number of days
     *
     * @return $this
     */
    public function setArbitraryScheduleDays($arbitrary_schedule_days)
    {
        $this->container['arbitrary_schedule_days'] = $arbitrary_schedule_days;

        return $this;
    }

    /**
     * Gets arbitrary_unit_cost
     *
     * @return float
     */
    public function getArbitraryUnitCost()
    {
        return $this->container['arbitrary_unit_cost'];
    }

    /**
     * Sets arbitrary_unit_cost
     *
     * @param float $arbitrary_unit_cost Arbitrary unit cost used to override the regular item cost
     *
     * @return $this
     */
    public function setArbitraryUnitCost($arbitrary_unit_cost)
    {
        $this->container['arbitrary_unit_cost'] = $arbitrary_unit_cost;

        return $this;
    }

    /**
     * Gets arbitrary_unit_cost_schedules
     *
     * @return \ultracart\v2\models\ItemAutoOrderStepArbitraryUnitCostSchedule[]
     */
    public function getArbitraryUnitCostSchedules()
    {
        return $this->container['arbitrary_unit_cost_schedules'];
    }

    /**
     * Sets arbitrary_unit_cost_schedules
     *
     * @param \ultracart\v2\models\ItemAutoOrderStepArbitraryUnitCostSchedule[] $arbitrary_unit_cost_schedules Arbitrary unit costs schedules for more advanced discounting by rebill attempt
     *
     * @return $this
     */
    public function setArbitraryUnitCostSchedules($arbitrary_unit_cost_schedules)
    {
        $this->container['arbitrary_unit_cost_schedules'] = $arbitrary_unit_cost_schedules;

        return $this;
    }

    /**
     * Gets grandfather_pricing
     *
     * @return \ultracart\v2\models\ItemAutoOrderStepGrandfatherPricing[]
     */
    public function getGrandfatherPricing()
    {
        return $this->container['grandfather_pricing'];
    }

    /**
     * Sets grandfather_pricing
     *
     * @param \ultracart\v2\models\ItemAutoOrderStepGrandfatherPricing[] $grandfather_pricing Grand-father pricing configuration if the rebill schedule has changed over time
     *
     * @return $this
     */
    public function setGrandfatherPricing($grandfather_pricing)
    {
        $this->container['grandfather_pricing'] = $grandfather_pricing;

        return $this;
    }

    /**
     * Gets managed_by
     *
     * @return string
     */
    public function getManagedBy()
    {
        return $this->container['managed_by'];
    }

    /**
     * Sets managed_by
     *
     * @param string $managed_by Managed by (defaults to UltraCart)
     *
     * @return $this
     */
    public function setManagedBy($managed_by)
    {
        $this->container['managed_by'] = $managed_by;

        return $this;
    }

    /**
     * Gets pause_days
     *
     * @return int
     */
    public function getPauseDays()
    {
        return $this->container['pause_days'];
    }

    /**
     * Sets pause_days
     *
     * @param int $pause_days Number of days to pause
     *
     * @return $this
     */
    public function setPauseDays($pause_days)
    {
        $this->container['pause_days'] = $pause_days;

        return $this;
    }

    /**
     * Gets pause_until_date
     *
     * @return string
     */
    public function getPauseUntilDate()
    {
        return $this->container['pause_until_date'];
    }

    /**
     * Sets pause_until_date
     *
     * @param string $pause_until_date Wait for this step to happen until the specified date
     *
     * @return $this
     */
    public function setPauseUntilDate($pause_until_date)
    {
        $this->container['pause_until_date'] = $pause_until_date;

        return $this;
    }

    /**
     * Gets preshipment_notice_days
     *
     * @return int
     */
    public function getPreshipmentNoticeDays()
    {
        return $this->container['preshipment_notice_days'];
    }

    /**
     * Sets preshipment_notice_days
     *
     * @param int $preshipment_notice_days If set, a pre-shipment notice is sent to the customer this many days in advance
     *
     * @return $this
     */
    public function setPreshipmentNoticeDays($preshipment_notice_days)
    {
        $this->container['preshipment_notice_days'] = $preshipment_notice_days;

        return $this;
    }

    /**
     * Gets recurring_merchant_item_id
     *
     * @return string
     */
    public function getRecurringMerchantItemId()
    {
        return $this->container['recurring_merchant_item_id'];
    }

    /**
     * Sets recurring_merchant_item_id
     *
     * @param string $recurring_merchant_item_id Item id to rebill
     *
     * @return $this
     */
    public function setRecurringMerchantItemId($recurring_merchant_item_id)
    {
        if (!is_null($recurring_merchant_item_id) && (mb_strlen($recurring_merchant_item_id) > 20)) {
            throw new \InvalidArgumentException('invalid length for $recurring_merchant_item_id when calling ItemAutoOrderStep., must be smaller than or equal to 20.');
        }

        $this->container['recurring_merchant_item_id'] = $recurring_merchant_item_id;

        return $this;
    }

    /**
     * Gets recurring_merchant_item_oid
     *
     * @return int
     */
    public function getRecurringMerchantItemOid()
    {
        return $this->container['recurring_merchant_item_oid'];
    }

    /**
     * Sets recurring_merchant_item_oid
     *
     * @param int $recurring_merchant_item_oid Item object identifier to rebill
     *
     * @return $this
     */
    public function setRecurringMerchantItemOid($recurring_merchant_item_oid)
    {
        $this->container['recurring_merchant_item_oid'] = $recurring_merchant_item_oid;

        return $this;
    }

    /**
     * Gets repeat_count
     *
     * @return int
     */
    public function getRepeatCount()
    {
        return $this->container['repeat_count'];
    }

    /**
     * Sets repeat_count
     *
     * @param int $repeat_count Number of times to rebill.  Last step can be null for infinite
     *
     * @return $this
     */
    public function setRepeatCount($repeat_count)
    {
        $this->container['repeat_count'] = $repeat_count;

        return $this;
    }

    /**
     * Gets schedule
     *
     * @return string
     */
    public function getSchedule()
    {
        return $this->container['schedule'];
    }

    /**
     * Sets schedule
     *
     * @param string $schedule Frequency of the rebill
     *
     * @return $this
     */
    public function setSchedule($schedule)
    {
        $this->container['schedule'] = $schedule;

        return $this;
    }

    /**
     * Gets subscribe_email_list_name
     *
     * @return string
     */
    public function getSubscribeEmailListName()
    {
        return $this->container['subscribe_email_list_name'];
    }

    /**
     * Sets subscribe_email_list_name
     *
     * @param string $subscribe_email_list_name Email list name to subscribe the customer to when the rebill occurs
     *
     * @return $this
     */
    public function setSubscribeEmailListName($subscribe_email_list_name)
    {
        $this->container['subscribe_email_list_name'] = $subscribe_email_list_name;

        return $this;
    }

    /**
     * Gets subscribe_email_list_oid
     *
     * @return int
     */
    public function getSubscribeEmailListOid()
    {
        return $this->container['subscribe_email_list_oid'];
    }

    /**
     * Sets subscribe_email_list_oid
     *
     * @param int $subscribe_email_list_oid Email list identifier to subscribe the customer to when this rebill occurs
     *
     * @return $this
     */
    public function setSubscribeEmailListOid($subscribe_email_list_oid)
    {
        $this->container['subscribe_email_list_oid'] = $subscribe_email_list_oid;

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
     * @param string $type Type of step (item or pause)
     *
     * @return $this
     */
    public function setType($type)
    {
        $allowedValues = $this->getTypeAllowableValues();
        if (!is_null($type) && !in_array($type, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'type', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
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


