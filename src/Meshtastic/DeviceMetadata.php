<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Device metadata response
 *
 * Generated from protobuf message <code>meshtastic.DeviceMetadata</code>
 */
class DeviceMetadata extends \Google\Protobuf\Internal\Message
{
    /**
     * Device firmware version string
     *
     * Generated from protobuf field <code>string firmware_version = 1;</code>
     */
    protected $firmware_version = '';
    /**
     * Device state version
     *
     * Generated from protobuf field <code>uint32 device_state_version = 2;</code>
     */
    protected $device_state_version = 0;
    /**
     * Indicates whether the device can shutdown CPU natively or via power management chip
     *
     * Generated from protobuf field <code>bool canShutdown = 3;</code>
     */
    protected $canShutdown = false;
    /**
     * Indicates that the device has native wifi capability
     *
     * Generated from protobuf field <code>bool hasWifi = 4;</code>
     */
    protected $hasWifi = false;
    /**
     * Indicates that the device has native bluetooth capability
     *
     * Generated from protobuf field <code>bool hasBluetooth = 5;</code>
     */
    protected $hasBluetooth = false;
    /**
     * Indicates that the device has an ethernet peripheral
     *
     * Generated from protobuf field <code>bool hasEthernet = 6;</code>
     */
    protected $hasEthernet = false;
    /**
     * Indicates that the device's role in the mesh
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 7;</code>
     */
    protected $role = 0;
    /**
     * Indicates the device's current enabled position flags
     *
     * Generated from protobuf field <code>uint32 position_flags = 8;</code>
     */
    protected $position_flags = 0;
    /**
     * Device hardware model
     *
     * Generated from protobuf field <code>.meshtastic.HardwareModel hw_model = 9;</code>
     */
    protected $hw_model = 0;
    /**
     * Has Remote Hardware enabled
     *
     * Generated from protobuf field <code>bool hasRemoteHardware = 10;</code>
     */
    protected $hasRemoteHardware = false;
    /**
     * Has PKC capabilities
     *
     * Generated from protobuf field <code>bool hasPKC = 11;</code>
     */
    protected $hasPKC = false;
    /**
     * Bit field of boolean for excluded modules
     * (bitwise OR of ExcludedModules)
     *
     * Generated from protobuf field <code>uint32 excluded_modules = 12;</code>
     */
    protected $excluded_modules = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $firmware_version
     *           Device firmware version string
     *     @type int $device_state_version
     *           Device state version
     *     @type bool $canShutdown
     *           Indicates whether the device can shutdown CPU natively or via power management chip
     *     @type bool $hasWifi
     *           Indicates that the device has native wifi capability
     *     @type bool $hasBluetooth
     *           Indicates that the device has native bluetooth capability
     *     @type bool $hasEthernet
     *           Indicates that the device has an ethernet peripheral
     *     @type int $role
     *           Indicates that the device's role in the mesh
     *     @type int $position_flags
     *           Indicates the device's current enabled position flags
     *     @type int $hw_model
     *           Device hardware model
     *     @type bool $hasRemoteHardware
     *           Has Remote Hardware enabled
     *     @type bool $hasPKC
     *           Has PKC capabilities
     *     @type int $excluded_modules
     *           Bit field of boolean for excluded modules
     *           (bitwise OR of ExcludedModules)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * Device firmware version string
     *
     * Generated from protobuf field <code>string firmware_version = 1;</code>
     * @return string
     */
    public function getFirmwareVersion()
    {
        return $this->firmware_version;
    }

    /**
     * Device firmware version string
     *
     * Generated from protobuf field <code>string firmware_version = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setFirmwareVersion($var)
    {
        GPBUtil::checkString($var, True);
        $this->firmware_version = $var;

        return $this;
    }

    /**
     * Device state version
     *
     * Generated from protobuf field <code>uint32 device_state_version = 2;</code>
     * @return int
     */
    public function getDeviceStateVersion()
    {
        return $this->device_state_version;
    }

    /**
     * Device state version
     *
     * Generated from protobuf field <code>uint32 device_state_version = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setDeviceStateVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->device_state_version = $var;

        return $this;
    }

    /**
     * Indicates whether the device can shutdown CPU natively or via power management chip
     *
     * Generated from protobuf field <code>bool canShutdown = 3;</code>
     * @return bool
     */
    public function getCanShutdown()
    {
        return $this->canShutdown;
    }

    /**
     * Indicates whether the device can shutdown CPU natively or via power management chip
     *
     * Generated from protobuf field <code>bool canShutdown = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setCanShutdown($var)
    {
        GPBUtil::checkBool($var);
        $this->canShutdown = $var;

        return $this;
    }

    /**
     * Indicates that the device has native wifi capability
     *
     * Generated from protobuf field <code>bool hasWifi = 4;</code>
     * @return bool
     */
    public function getHasWifi()
    {
        return $this->hasWifi;
    }

    /**
     * Indicates that the device has native wifi capability
     *
     * Generated from protobuf field <code>bool hasWifi = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasWifi($var)
    {
        GPBUtil::checkBool($var);
        $this->hasWifi = $var;

        return $this;
    }

    /**
     * Indicates that the device has native bluetooth capability
     *
     * Generated from protobuf field <code>bool hasBluetooth = 5;</code>
     * @return bool
     */
    public function getHasBluetooth()
    {
        return $this->hasBluetooth;
    }

    /**
     * Indicates that the device has native bluetooth capability
     *
     * Generated from protobuf field <code>bool hasBluetooth = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasBluetooth($var)
    {
        GPBUtil::checkBool($var);
        $this->hasBluetooth = $var;

        return $this;
    }

    /**
     * Indicates that the device has an ethernet peripheral
     *
     * Generated from protobuf field <code>bool hasEthernet = 6;</code>
     * @return bool
     */
    public function getHasEthernet()
    {
        return $this->hasEthernet;
    }

    /**
     * Indicates that the device has an ethernet peripheral
     *
     * Generated from protobuf field <code>bool hasEthernet = 6;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasEthernet($var)
    {
        GPBUtil::checkBool($var);
        $this->hasEthernet = $var;

        return $this;
    }

    /**
     * Indicates that the device's role in the mesh
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 7;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Indicates that the device's role in the mesh
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 7;</code>
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
     * Indicates the device's current enabled position flags
     *
     * Generated from protobuf field <code>uint32 position_flags = 8;</code>
     * @return int
     */
    public function getPositionFlags()
    {
        return $this->position_flags;
    }

    /**
     * Indicates the device's current enabled position flags
     *
     * Generated from protobuf field <code>uint32 position_flags = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setPositionFlags($var)
    {
        GPBUtil::checkUint32($var);
        $this->position_flags = $var;

        return $this;
    }

    /**
     * Device hardware model
     *
     * Generated from protobuf field <code>.meshtastic.HardwareModel hw_model = 9;</code>
     * @return int
     */
    public function getHwModel()
    {
        return $this->hw_model;
    }

    /**
     * Device hardware model
     *
     * Generated from protobuf field <code>.meshtastic.HardwareModel hw_model = 9;</code>
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
     * Has Remote Hardware enabled
     *
     * Generated from protobuf field <code>bool hasRemoteHardware = 10;</code>
     * @return bool
     */
    public function getHasRemoteHardware()
    {
        return $this->hasRemoteHardware;
    }

    /**
     * Has Remote Hardware enabled
     *
     * Generated from protobuf field <code>bool hasRemoteHardware = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasRemoteHardware($var)
    {
        GPBUtil::checkBool($var);
        $this->hasRemoteHardware = $var;

        return $this;
    }

    /**
     * Has PKC capabilities
     *
     * Generated from protobuf field <code>bool hasPKC = 11;</code>
     * @return bool
     */
    public function getHasPKC()
    {
        return $this->hasPKC;
    }

    /**
     * Has PKC capabilities
     *
     * Generated from protobuf field <code>bool hasPKC = 11;</code>
     * @param bool $var
     * @return $this
     */
    public function setHasPKC($var)
    {
        GPBUtil::checkBool($var);
        $this->hasPKC = $var;

        return $this;
    }

    /**
     * Bit field of boolean for excluded modules
     * (bitwise OR of ExcludedModules)
     *
     * Generated from protobuf field <code>uint32 excluded_modules = 12;</code>
     * @return int
     */
    public function getExcludedModules()
    {
        return $this->excluded_modules;
    }

    /**
     * Bit field of boolean for excluded modules
     * (bitwise OR of ExcludedModules)
     *
     * Generated from protobuf field <code>uint32 excluded_modules = 12;</code>
     * @param int $var
     * @return $this
     */
    public function setExcludedModules($var)
    {
        GPBUtil::checkUint32($var);
        $this->excluded_modules = $var;

        return $this;
    }

}

