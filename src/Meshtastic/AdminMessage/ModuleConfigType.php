<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/admin.proto

namespace Meshtastic\AdminMessage;

use UnexpectedValueException;

/**
 * TODO: REPLACE
 *
 * Protobuf type <code>meshtastic.AdminMessage.ModuleConfigType</code>
 */
class ModuleConfigType
{
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>MQTT_CONFIG = 0;</code>
     */
    const MQTT_CONFIG = 0;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>SERIAL_CONFIG = 1;</code>
     */
    const SERIAL_CONFIG = 1;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>EXTNOTIF_CONFIG = 2;</code>
     */
    const EXTNOTIF_CONFIG = 2;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>STOREFORWARD_CONFIG = 3;</code>
     */
    const STOREFORWARD_CONFIG = 3;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>RANGETEST_CONFIG = 4;</code>
     */
    const RANGETEST_CONFIG = 4;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TELEMETRY_CONFIG = 5;</code>
     */
    const TELEMETRY_CONFIG = 5;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>CANNEDMSG_CONFIG = 6;</code>
     */
    const CANNEDMSG_CONFIG = 6;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>AUDIO_CONFIG = 7;</code>
     */
    const AUDIO_CONFIG = 7;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>REMOTEHARDWARE_CONFIG = 8;</code>
     */
    const REMOTEHARDWARE_CONFIG = 8;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>NEIGHBORINFO_CONFIG = 9;</code>
     */
    const NEIGHBORINFO_CONFIG = 9;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>AMBIENTLIGHTING_CONFIG = 10;</code>
     */
    const AMBIENTLIGHTING_CONFIG = 10;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>DETECTIONSENSOR_CONFIG = 11;</code>
     */
    const DETECTIONSENSOR_CONFIG = 11;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>PAXCOUNTER_CONFIG = 12;</code>
     */
    const PAXCOUNTER_CONFIG = 12;

    private static $valueToName = [
        self::MQTT_CONFIG => 'MQTT_CONFIG',
        self::SERIAL_CONFIG => 'SERIAL_CONFIG',
        self::EXTNOTIF_CONFIG => 'EXTNOTIF_CONFIG',
        self::STOREFORWARD_CONFIG => 'STOREFORWARD_CONFIG',
        self::RANGETEST_CONFIG => 'RANGETEST_CONFIG',
        self::TELEMETRY_CONFIG => 'TELEMETRY_CONFIG',
        self::CANNEDMSG_CONFIG => 'CANNEDMSG_CONFIG',
        self::AUDIO_CONFIG => 'AUDIO_CONFIG',
        self::REMOTEHARDWARE_CONFIG => 'REMOTEHARDWARE_CONFIG',
        self::NEIGHBORINFO_CONFIG => 'NEIGHBORINFO_CONFIG',
        self::AMBIENTLIGHTING_CONFIG => 'AMBIENTLIGHTING_CONFIG',
        self::DETECTIONSENSOR_CONFIG => 'DETECTIONSENSOR_CONFIG',
        self::PAXCOUNTER_CONFIG => 'PAXCOUNTER_CONFIG',
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
class_alias(ModuleConfigType::class, \Meshtastic\AdminMessage_ModuleConfigType::class);

