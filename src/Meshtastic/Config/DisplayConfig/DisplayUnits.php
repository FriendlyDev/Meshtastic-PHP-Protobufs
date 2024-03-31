<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config\DisplayConfig;

use UnexpectedValueException;

/**
 * Unit display preference
 *
 * Protobuf type <code>meshtastic.Config.DisplayConfig.DisplayUnits</code>
 */
class DisplayUnits
{
    /**
     * Metric (Default)
     *
     * Generated from protobuf enum <code>METRIC = 0;</code>
     */
    const METRIC = 0;
    /**
     * Imperial
     *
     * Generated from protobuf enum <code>IMPERIAL = 1;</code>
     */
    const IMPERIAL = 1;

    private static $valueToName = [
        self::METRIC => 'METRIC',
        self::IMPERIAL => 'IMPERIAL',
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
class_alias(DisplayUnits::class, \Meshtastic\Config_DisplayConfig_DisplayUnits::class);

