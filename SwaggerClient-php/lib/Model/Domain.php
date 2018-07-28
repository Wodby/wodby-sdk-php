<?php
/**
 * Domain
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wodby API
 *
 * No description provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 3.0.12
 * 
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.3.1
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Wodby\Api\Model;

use \ArrayAccess;
use \Wodby\Api\ObjectSerializer;

/**
 * Domain Class Doc Comment
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Domain implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Domain';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'id' => 'string',
        'name' => 'string',
        'org_id' => 'string',
        'instance_id' => 'string',
        'enabled' => 'bool',
        'primary' => 'bool',
        'protected' => 'bool',
        'indexed' => 'bool',
        'ssl' => 'bool',
        'ssl_required' => 'bool',
        'ssl_custom' => 'bool',
        'hsts' => 'bool',
        'hsts_subdomains' => 'bool',
        'redirect_to_www' => 'bool',
        'redirect_to_non_www' => 'bool',
        'status' => 'string',
        'type' => 'string',
        'created' => 'int',
        'updated' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'id' => null,
        'name' => null,
        'org_id' => null,
        'instance_id' => null,
        'enabled' => null,
        'primary' => null,
        'protected' => null,
        'indexed' => null,
        'ssl' => null,
        'ssl_required' => null,
        'ssl_custom' => null,
        'hsts' => null,
        'hsts_subdomains' => null,
        'redirect_to_www' => null,
        'redirect_to_non_www' => null,
        'status' => null,
        'type' => null,
        'created' => null,
        'updated' => null
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
        'id' => 'id',
        'name' => 'name',
        'org_id' => 'org_id',
        'instance_id' => 'instance_id',
        'enabled' => 'enabled',
        'primary' => 'primary',
        'protected' => 'protected',
        'indexed' => 'indexed',
        'ssl' => 'ssl',
        'ssl_required' => 'ssl_required',
        'ssl_custom' => 'ssl_custom',
        'hsts' => 'hsts',
        'hsts_subdomains' => 'hsts_subdomains',
        'redirect_to_www' => 'redirect_to_www',
        'redirect_to_non_www' => 'redirect_to_non_www',
        'status' => 'status',
        'type' => 'type',
        'created' => 'created',
        'updated' => 'updated'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'id' => 'setId',
        'name' => 'setName',
        'org_id' => 'setOrgId',
        'instance_id' => 'setInstanceId',
        'enabled' => 'setEnabled',
        'primary' => 'setPrimary',
        'protected' => 'setProtected',
        'indexed' => 'setIndexed',
        'ssl' => 'setSsl',
        'ssl_required' => 'setSslRequired',
        'ssl_custom' => 'setSslCustom',
        'hsts' => 'setHsts',
        'hsts_subdomains' => 'setHstsSubdomains',
        'redirect_to_www' => 'setRedirectToWww',
        'redirect_to_non_www' => 'setRedirectToNonWww',
        'status' => 'setStatus',
        'type' => 'setType',
        'created' => 'setCreated',
        'updated' => 'setUpdated'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'id' => 'getId',
        'name' => 'getName',
        'org_id' => 'getOrgId',
        'instance_id' => 'getInstanceId',
        'enabled' => 'getEnabled',
        'primary' => 'getPrimary',
        'protected' => 'getProtected',
        'indexed' => 'getIndexed',
        'ssl' => 'getSsl',
        'ssl_required' => 'getSslRequired',
        'ssl_custom' => 'getSslCustom',
        'hsts' => 'getHsts',
        'hsts_subdomains' => 'getHstsSubdomains',
        'redirect_to_www' => 'getRedirectToWww',
        'redirect_to_non_www' => 'getRedirectToNonWww',
        'status' => 'getStatus',
        'type' => 'getType',
        'created' => 'getCreated',
        'updated' => 'getUpdated'
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

    const STATUS_OK = 'ok';
    const STATUS_ERROR = 'error';
    const STATUS_CREATING = 'creating';
    const STATUS_DELETING = 'deleting';
    const STATUS_UPDATING = 'updating';
    const STATUS_DISABLED = 'disabled';
    const TYPE_TECHNICAL = 'technical';
    const TYPE_USER = 'user';
    

    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStatusAllowableValues()
    {
        return [
            self::STATUS_OK,
            self::STATUS_ERROR,
            self::STATUS_CREATING,
            self::STATUS_DELETING,
            self::STATUS_UPDATING,
            self::STATUS_DISABLED,
        ];
    }
    
    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTypeAllowableValues()
    {
        return [
            self::TYPE_TECHNICAL,
            self::TYPE_USER,
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
        $this->container['id'] = isset($data['id']) ? $data['id'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['org_id'] = isset($data['org_id']) ? $data['org_id'] : null;
        $this->container['instance_id'] = isset($data['instance_id']) ? $data['instance_id'] : null;
        $this->container['enabled'] = isset($data['enabled']) ? $data['enabled'] : null;
        $this->container['primary'] = isset($data['primary']) ? $data['primary'] : null;
        $this->container['protected'] = isset($data['protected']) ? $data['protected'] : null;
        $this->container['indexed'] = isset($data['indexed']) ? $data['indexed'] : null;
        $this->container['ssl'] = isset($data['ssl']) ? $data['ssl'] : null;
        $this->container['ssl_required'] = isset($data['ssl_required']) ? $data['ssl_required'] : null;
        $this->container['ssl_custom'] = isset($data['ssl_custom']) ? $data['ssl_custom'] : null;
        $this->container['hsts'] = isset($data['hsts']) ? $data['hsts'] : null;
        $this->container['hsts_subdomains'] = isset($data['hsts_subdomains']) ? $data['hsts_subdomains'] : null;
        $this->container['redirect_to_www'] = isset($data['redirect_to_www']) ? $data['redirect_to_www'] : null;
        $this->container['redirect_to_non_www'] = isset($data['redirect_to_non_www']) ? $data['redirect_to_non_www'] : null;
        $this->container['status'] = isset($data['status']) ? $data['status'] : null;
        $this->container['type'] = isset($data['type']) ? $data['type'] : null;
        $this->container['created'] = isset($data['created']) ? $data['created'] : null;
        $this->container['updated'] = isset($data['updated']) ? $data['updated'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['org_id'] === null) {
            $invalidProperties[] = "'org_id' can't be null";
        }
        if ($this->container['instance_id'] === null) {
            $invalidProperties[] = "'instance_id' can't be null";
        }
        if ($this->container['status'] === null) {
            $invalidProperties[] = "'status' can't be null";
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'status', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'type', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['created'] === null) {
            $invalidProperties[] = "'created' can't be null";
        }
        if ($this->container['updated'] === null) {
            $invalidProperties[] = "'updated' can't be null";
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

        if ($this->container['id'] === null) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if ($this->container['org_id'] === null) {
            return false;
        }
        if ($this->container['instance_id'] === null) {
            return false;
        }
        if ($this->container['status'] === null) {
            return false;
        }
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($this->container['status'], $allowedValues)) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($this->container['type'], $allowedValues)) {
            return false;
        }
        if ($this->container['created'] === null) {
            return false;
        }
        if ($this->container['updated'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id id
     *
     * @return $this
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

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
     * Gets org_id
     *
     * @return string
     */
    public function getOrgId()
    {
        return $this->container['org_id'];
    }

    /**
     * Sets org_id
     *
     * @param string $org_id org_id
     *
     * @return $this
     */
    public function setOrgId($org_id)
    {
        $this->container['org_id'] = $org_id;

        return $this;
    }

    /**
     * Gets instance_id
     *
     * @return string
     */
    public function getInstanceId()
    {
        return $this->container['instance_id'];
    }

    /**
     * Sets instance_id
     *
     * @param string $instance_id instance_id
     *
     * @return $this
     */
    public function setInstanceId($instance_id)
    {
        $this->container['instance_id'] = $instance_id;

        return $this;
    }

    /**
     * Gets enabled
     *
     * @return bool
     */
    public function getEnabled()
    {
        return $this->container['enabled'];
    }

    /**
     * Sets enabled
     *
     * @param bool $enabled enabled
     *
     * @return $this
     */
    public function setEnabled($enabled)
    {
        $this->container['enabled'] = $enabled;

        return $this;
    }

    /**
     * Gets primary
     *
     * @return bool
     */
    public function getPrimary()
    {
        return $this->container['primary'];
    }

    /**
     * Sets primary
     *
     * @param bool $primary primary
     *
     * @return $this
     */
    public function setPrimary($primary)
    {
        $this->container['primary'] = $primary;

        return $this;
    }

    /**
     * Gets protected
     *
     * @return bool
     */
    public function getProtected()
    {
        return $this->container['protected'];
    }

    /**
     * Sets protected
     *
     * @param bool $protected protected
     *
     * @return $this
     */
    public function setProtected($protected)
    {
        $this->container['protected'] = $protected;

        return $this;
    }

    /**
     * Gets indexed
     *
     * @return bool
     */
    public function getIndexed()
    {
        return $this->container['indexed'];
    }

    /**
     * Sets indexed
     *
     * @param bool $indexed indexed
     *
     * @return $this
     */
    public function setIndexed($indexed)
    {
        $this->container['indexed'] = $indexed;

        return $this;
    }

    /**
     * Gets ssl
     *
     * @return bool
     */
    public function getSsl()
    {
        return $this->container['ssl'];
    }

    /**
     * Sets ssl
     *
     * @param bool $ssl ssl
     *
     * @return $this
     */
    public function setSsl($ssl)
    {
        $this->container['ssl'] = $ssl;

        return $this;
    }

    /**
     * Gets ssl_required
     *
     * @return bool
     */
    public function getSslRequired()
    {
        return $this->container['ssl_required'];
    }

    /**
     * Sets ssl_required
     *
     * @param bool $ssl_required ssl_required
     *
     * @return $this
     */
    public function setSslRequired($ssl_required)
    {
        $this->container['ssl_required'] = $ssl_required;

        return $this;
    }

    /**
     * Gets ssl_custom
     *
     * @return bool
     */
    public function getSslCustom()
    {
        return $this->container['ssl_custom'];
    }

    /**
     * Sets ssl_custom
     *
     * @param bool $ssl_custom ssl_custom
     *
     * @return $this
     */
    public function setSslCustom($ssl_custom)
    {
        $this->container['ssl_custom'] = $ssl_custom;

        return $this;
    }

    /**
     * Gets hsts
     *
     * @return bool
     */
    public function getHsts()
    {
        return $this->container['hsts'];
    }

    /**
     * Sets hsts
     *
     * @param bool $hsts hsts
     *
     * @return $this
     */
    public function setHsts($hsts)
    {
        $this->container['hsts'] = $hsts;

        return $this;
    }

    /**
     * Gets hsts_subdomains
     *
     * @return bool
     */
    public function getHstsSubdomains()
    {
        return $this->container['hsts_subdomains'];
    }

    /**
     * Sets hsts_subdomains
     *
     * @param bool $hsts_subdomains hsts_subdomains
     *
     * @return $this
     */
    public function setHstsSubdomains($hsts_subdomains)
    {
        $this->container['hsts_subdomains'] = $hsts_subdomains;

        return $this;
    }

    /**
     * Gets redirect_to_www
     *
     * @return bool
     */
    public function getRedirectToWww()
    {
        return $this->container['redirect_to_www'];
    }

    /**
     * Sets redirect_to_www
     *
     * @param bool $redirect_to_www redirect_to_www
     *
     * @return $this
     */
    public function setRedirectToWww($redirect_to_www)
    {
        $this->container['redirect_to_www'] = $redirect_to_www;

        return $this;
    }

    /**
     * Gets redirect_to_non_www
     *
     * @return bool
     */
    public function getRedirectToNonWww()
    {
        return $this->container['redirect_to_non_www'];
    }

    /**
     * Sets redirect_to_non_www
     *
     * @param bool $redirect_to_non_www redirect_to_non_www
     *
     * @return $this
     */
    public function setRedirectToNonWww($redirect_to_non_www)
    {
        $this->container['redirect_to_non_www'] = $redirect_to_non_www;

        return $this;
    }

    /**
     * Gets status
     *
     * @return string
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param string $status status
     *
     * @return $this
     */
    public function setStatus($status)
    {
        $allowedValues = $this->getStatusAllowableValues();
        if (!in_array($status, $allowedValues)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value for 'status', must be one of '%s'",
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['status'] = $status;

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
        $allowedValues = $this->getTypeAllowableValues();
        if (!in_array($type, $allowedValues)) {
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
     * Gets created
     *
     * @return int
     */
    public function getCreated()
    {
        return $this->container['created'];
    }

    /**
     * Sets created
     *
     * @param int $created created
     *
     * @return $this
     */
    public function setCreated($created)
    {
        $this->container['created'] = $created;

        return $this;
    }

    /**
     * Gets updated
     *
     * @return int
     */
    public function getUpdated()
    {
        return $this->container['updated'];
    }

    /**
     * Sets updated
     *
     * @param int $updated updated
     *
     * @return $this
     */
    public function setUpdated($updated)
    {
        $this->container['updated'] = $updated;

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


