<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/admin.proto

namespace Meshtastic\AdminMessage;

use UnexpectedValueException;

/**
 * TODO: REPLACE
 *
 * Protobuf type <code>meshtastic.AdminMessage.ConfigType</code>
 */
class ConfigType
{
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>DEVICE_CONFIG = 0;</code>
     */
    const DEVICE_CONFIG = 0;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>POSITION_CONFIG = 1;</code>
     */
    const POSITION_CONFIG = 1;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>POWER_CONFIG = 2;</code>
     */
    const POWER_CONFIG = 2;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>NETWORK_CONFIG = 3;</code>
     */
    const NETWORK_CONFIG = 3;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>DISPLAY_CONFIG = 4;</code>
     */
    const DISPLAY_CONFIG = 4;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>LORA_CONFIG = 5;</code>
     */
    const LORA_CONFIG = 5;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>BLUETOOTH_CONFIG = 6;</code>
     */
    const BLUETOOTH_CONFIG = 6;

    private static $valueToName = [
        self::DEVICE_CONFIG => 'DEVICE_CONFIG',
        self::POSITION_CONFIG => 'POSITION_CONFIG',
        self::POWER_CONFIG => 'POWER_CONFIG',
        self::NETWORK_CONFIG => 'NETWORK_CONFIG',
        self::DISPLAY_CONFIG => 'DISPLAY_CONFIG',
        self::LORA_CONFIG => 'LORA_CONFIG',
        self::BLUETOOTH_CONFIG => 'BLUETOOTH_CONFIG',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(ConfigType::class, \Meshtastic\AdminMessage_ConfigType::class);

