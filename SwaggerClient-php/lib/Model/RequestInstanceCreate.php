<?php
/**
 * RequestInstanceCreate
 *
 * PHP version 5
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wodby API Client
 *
 * Wodby Developer Documentation https://wodby.com/docs/dev
 *
 * OpenAPI spec version: 3.0.6
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
 * RequestInstanceCreate Class Doc Comment
 *
 * @category Class
 * @package  Wodby\Api
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class RequestInstanceCreate implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'RequestInstanceCreate';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'app_id' => 'string',
        'git' => '\Wodby\Api\Model\RequestInstanceCreateGit',
        'name' => 'string',
        'post_deployment' => 'bool',
        'server_id' => 'string',
        'title' => 'string',
        'type' => '\Wodby\Api\Model\InstanceType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'app_id' => null,
        'git' => null,
        'name' => null,
        'post_deployment' => null,
        'server_id' => null,
        'title' => null,
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
        'app_id' => 'app_id',
        'git' => 'git',
        'name' => 'name',
        'post_deployment' => 'post_deployment',
        'server_id' => 'server_id',
        'title' => 'title',
        'type' => 'type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'app_id' => 'setAppId',
        'git' => 'setGit',
        'name' => 'setName',
        'post_deployment' => 'setPostDeployment',
        'server_id' => 'setServerId',
        'title' => 'setTitle',
        'type' => 'setType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'app_id' => 'getAppId',
        'git' => 'getGit',
        'name' => 'getName',
        'post_deployment' => 'getPostDeployment',
        'server_id' => 'getServerId',
        'title' => 'getTitle',
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
        $this->container['app_id'] = isset($data['app_id']) ? $data['app_id'] : null;
        $this->container['git'] = isset($data['git']) ? $data['git'] : null;
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['post_deployment'] = isset($data['post_deployment']) ? $data['post_deployment'] : null;
        $this->container['server_id'] = isset($data['server_id']) ? $data['server_id'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
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

        if ($this->container['app_id'] === null) {
            $invalidProperties[] = "'app_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['app_id'])) {
            $invalidProperties[] = "invalid value for 'app_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
        }

        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if (!preg_match("/^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/", $this->container['name'])) {
            $invalidProperties[] = "invalid value for 'name', must be conform to the pattern /^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/.";
        }

        if ($this->container['server_id'] === null) {
            $invalidProperties[] = "'server_id' can't be null";
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['server_id'])) {
            $invalidProperties[] = "invalid value for 'server_id', must be conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.";
        }

        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
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

        if ($this->container['app_id'] === null) {
            return false;
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['app_id'])) {
            return false;
        }
        if ($this->container['name'] === null) {
            return false;
        }
        if (!preg_match("/^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/", $this->container['name'])) {
            return false;
        }
        if ($this->container['server_id'] === null) {
            return false;
        }
        if (!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $this->container['server_id'])) {
            return false;
        }
        if ($this->container['type'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets app_id
     *
     * @return string
     */
    public function getAppId()
    {
        return $this->container['app_id'];
    }

    /**
     * Sets app_id
     *
     * @param string $app_id app_id
     *
     * @return $this
     */
    public function setAppId($app_id)
    {

        if ((!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $app_id))) {
            throw new \InvalidArgumentException("invalid value for $app_id when calling RequestInstanceCreate., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.");
        }

        $this->container['app_id'] = $app_id;

        return $this;
    }

    /**
     * Gets git
     *
     * @return \Wodby\Api\Model\RequestInstanceCreateGit
     */
    public function getGit()
    {
        return $this->container['git'];
    }

    /**
     * Sets git
     *
     * @param \Wodby\Api\Model\RequestInstanceCreateGit $git git
     *
     * @return $this
     */
    public function setGit($git)
    {
        $this->container['git'] = $git;

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

        if ((!preg_match("/^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/", $name))) {
            throw new \InvalidArgumentException("invalid value for $name when calling RequestInstanceCreate., must conform to the pattern /^[a-z0-9][a-z0-9-]{0,18}[a-z0-9]$/.");
        }

        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets post_deployment
     *
     * @return bool
     */
    public function getPostDeployment()
    {
        return $this->container['post_deployment'];
    }

    /**
     * Sets post_deployment
     *
     * @param bool $post_deployment post_deployment
     *
     * @return $this
     */
    public function setPostDeployment($post_deployment)
    {
        $this->container['post_deployment'] = $post_deployment;

        return $this;
    }

    /**
     * Gets server_id
     *
     * @return string
     */
    public function getServerId()
    {
        return $this->container['server_id'];
    }

    /**
     * Sets server_id
     *
     * @param string $server_id server_id
     *
     * @return $this
     */
    public function setServerId($server_id)
    {

        if ((!preg_match("/^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/", $server_id))) {
            throw new \InvalidArgumentException("invalid value for $server_id when calling RequestInstanceCreate., must conform to the pattern /^[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}$/.");
        }

        $this->container['server_id'] = $server_id;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string $title title
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets type
     *
     * @return \Wodby\Api\Model\InstanceType
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param \Wodby\Api\Model\InstanceType $type type
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


