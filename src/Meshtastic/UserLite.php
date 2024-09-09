<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/deviceonly.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>meshtastic.UserLite</code>
 */
class UserLite extends \Google\Protobuf\Internal\Message
{
    /**
     * This is the addr of the radio.
     *
     * Generated from protobuf field <code>bytes macaddr = 1 [deprecated = true];</code>
     * @deprecated
     */
    protected $macaddr = '';
    /**
     * A full name for this user, i.e. "Kevin Hester"
     *
     * Generated from protobuf field <code>string long_name = 2;</code>
     */
    protected $long_name = '';
    /**
     * A VERY short name, ideally two characters.
     * Suitable for a tiny OLED screen
     *
     * Generated from protobuf field <code>string short_name = 3;</code>
     */
    protected $short_name = '';
    /**
     * TBEAM, HELTEC, etc...
     * Starting in 1.2.11 moved to hw_model enum in the NodeInfo object.
     * Apps will still need the string here for older builds
     * (so OTA update can find the right image), but if the enum is available it will be used instead.
     *
     * Generated from protobuf field <code>.meshtastic.HardwareModel hw_model = 4;</code>
     */
    protected $hw_model = 0;
    /**
     * In some regions Ham radio operators have different bandwidth limitations than others.
     * If this user is a licensed operator, set this flag.
     * Also, "long_name" should be their licence number.
     *
     * Generated from protobuf field <code>bool is_licensed = 5;</code>
     */
    protected $is_licensed = false;
    /**
     * Indicates that the user's role in the mesh
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 6;</code>
     */
    protected $role = 0;
    /**
     * The public key of the user's device.
     * This is sent out to other nodes on the mesh to allow them to compute a shared secret key.
     *
     * Generated from protobuf field <code>bytes public_key = 7;</code>
     */
    protected $public_key = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $macaddr
     *           This is the addr of the radio.
     *     @type string $long_name
     *           A full name for this user, i.e. "Kevin Hester"
     *     @type string $short_name
     *           A VERY short name, ideally two characters.
     *           Suitable for a tiny OLED screen
     *     @type int $hw_model
     *           TBEAM, HELTEC, etc...
     *           Starting in 1.2.11 moved to hw_model enum in the NodeInfo object.
     *           Apps will still need the string here for older builds
     *           (so OTA update can find the right image), but if the enum is available it will be used instead.
     *     @type bool $is_licensed
     *           In some regions Ham radio operators have different bandwidth limitations than others.
     *           If this user is a licensed operator, set this flag.
     *           Also, "long_name" should be their licence number.
     *     @type int $role
     *           Indicates that the user's role in the mesh
     *     @type string $public_key
     *           The public key of the user's device.
     *           This is sent out to other nodes on the mesh to allow them to compute a shared secret key.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Deviceonly::initOnce();
        parent::__construct($data);
    }

    /**
     * This is the addr of the radio.
     *
     * Generated from protobuf field <code>bytes macaddr = 1 [deprecated = true];</code>
     * @return string
     * @deprecated
     */
    public function getMacaddr()
    {
        @trigger_error('macaddr is deprecated.', E_USER_DEPRECATED);
        return $this->macaddr;
    }

    /**
     * This is the addr of the radio.
     *
     * Generated from protobuf field <code>bytes macaddr = 1 [deprecated = true];</code>
     * @param string $var
     * @return $this
     * @deprecated
     */
    public function setMacaddr($var)
    {
        @trigger_error('macaddr is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkString($var, False);
        $this->macaddr = $var;

        return $this;
    }

    /**
     * A full name for this user, i.e. "Kevin Hester"
     *
     * Generated from protobuf field <code>string long_name = 2;</code>
     * @return string
     */
    public function getLongName()
    {
        return $this->long_name;
    }

    /**
     * A full name for this user, i.e. "Kevin Hester"
     *
     * Generated from protobuf field <code>string long_name = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setLongName($var)
    {
        GPBUtil::checkString($var, True);
        $this->long_name = $var;

        return $this;
    }

    /**
     * A VERY short name, ideally two characters.
     * Suitable for a tiny OLED screen
     *
     * Generated from protobuf field <code>string short_name = 3;</code>
     * @return string
     */
    public function getShortName()
    {
        return $this->short_name;
    }

    /**
     * A VERY short name, ideally two characters.
     * Suitable for a tiny OLED screen
     *
     * Generated from protobuf field <code>string short_name = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setShortName($var)
    {
        GPBUtil::checkString($var, True);
        $this->short_name = $var;

        return $this;
    }

    /**
     * TBEAM, HELTEC, etc...
     * Starting in 1.2.11 moved to hw_model enum in the NodeInfo object.
     * Apps will still need the string here for older builds
     * (so OTA update can find the right image), but if the enum is available it will be used instead.
     *
     * Generated from protobuf field <code>.meshtastic.HardwareModel hw_model = 4;</code>
     * @return int
     */
    public function getHwModel()
    {
        return $this->hw_model;
    }

    /**
     * TBEAM, HELTEC, etc...
     * Starting in 1.2.11 moved to hw_model enum in the NodeInfo object.
     * Apps will still need the string here for older builds
     * (so OTA update can find the right image), but if the enum is available it will be used instead.
     *
     * Generated from protobuf field <code>.meshtastic.HardwareModel hw_model = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setHwModel($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\HardwareModel::class);
        $this->hw_model = $var;

        return $this;
    }

    /**
     * In some regions Ham radio operators have different bandwidth limitations than others.
     * If this user is a licensed operator, set this flag.
     * Also, "long_name" should be their licence number.
     *
     * Generated from protobuf field <code>bool is_licensed = 5;</code>
     * @return bool
     */
    public function getIsLicensed()
    {
        return $this->is_licensed;
    }

    /**
     * In some regions Ham radio operators have different bandwidth limitations than others.
     * If this user is a licensed operator, set this flag.
     * Also, "long_name" should be their licence number.
     *
     * Generated from protobuf field <code>bool is_licensed = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsLicensed($var)
    {
        GPBUtil::checkBool($var);
        $this->is_licensed = $var;

        return $this;
    }

    /**
     * Indicates that the user's role in the mesh
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 6;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Indicates that the user's role in the mesh
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DeviceConfig\Role::class);
        $this->role = $var;

        return $this;
    }

    /**
     * The public key of the user's device.
     * This is sent out to other nodes on the mesh to allow them to compute a shared secret key.
     *
     * Generated from protobuf field <code>bytes public_key = 7;</code>
     * @return string
     */
    public function getPublicKey()
    {
        return $this->public_key;
    }

    /**
     * The public key of the user's device.
     * This is sent out to other nodes on the mesh to allow them to compute a shared secret key.
     *
     * Generated from protobuf field <code>bytes public_key = 7;</code>
     * @param string $var
     * @return $this
     */
    public function setPublicKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->public_key = $var;

        return $this;
    }

}

