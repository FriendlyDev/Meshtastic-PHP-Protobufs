<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config\LoRaConfig;

use UnexpectedValueException;

/**
 * Standard predefined channel settings
 * Note: these mappings must match ModemPreset Choice in the device code.
 *
 * Protobuf type <code>meshtastic.Config.LoRaConfig.ModemPreset</code>
 */
class ModemPreset
{
    /**
     * Long Range - Fast
     *
     * Generated from protobuf enum <code>LONG_FAST = 0;</code>
     */
    const LONG_FAST = 0;
    /**
     * Long Range - Slow
     *
     * Generated from protobuf enum <code>LONG_SLOW = 1;</code>
     */
    const LONG_SLOW = 1;
    /**
     * Very Long Range - Slow
     * Deprecated in 2.5: Works only with txco and is unusably slow
     *
     * Generated from protobuf enum <code>VERY_LONG_SLOW = 2 [deprecated = true];</code>
     */
    const VERY_LONG_SLOW = 2;
    /**
     * Medium Range - Slow
     *
     * Generated from protobuf enum <code>MEDIUM_SLOW = 3;</code>
     */
    const MEDIUM_SLOW = 3;
    /**
     * Medium Range - Fast
     *
     * Generated from protobuf enum <code>MEDIUM_FAST = 4;</code>
     */
    const MEDIUM_FAST = 4;
    /**
     * Short Range - Slow
     *
     * Generated from protobuf enum <code>SHORT_SLOW = 5;</code>
     */
    const SHORT_SLOW = 5;
    /**
     * Short Range - Fast
     *
     * Generated from protobuf enum <code>SHORT_FAST = 6;</code>
     */
    const SHORT_FAST = 6;
    /**
     * Long Range - Moderately Fast
     *
     * Generated from protobuf enum <code>LONG_MODERATE = 7;</code>
     */
    const LONG_MODERATE = 7;
    /**
     * Short Range - Turbo
     * This is the fastest preset and the only one with 500kHz bandwidth.
     * It is not legal to use in all regions due to this wider bandwidth.
     *
     * Generated from protobuf enum <code>SHORT_TURBO = 8;</code>
     */
    const SHORT_TURBO = 8;

    private static $valueToName = [
        self::LONG_FAST => 'LONG_FAST',
        self::LONG_SLOW => 'LONG_SLOW',
        self::VERY_LONG_SLOW => 'VERY_LONG_SLOW',
        self::MEDIUM_SLOW => 'MEDIUM_SLOW',
        self::MEDIUM_FAST => 'MEDIUM_FAST',
        self::SHORT_SLOW => 'SHORT_SLOW',
        self::SHORT_FAST => 'SHORT_FAST',
        self::LONG_MODERATE => 'LONG_MODERATE',
        self::SHORT_TURBO => 'SHORT_TURBO',
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
class_alias(ModemPreset::class, \Meshtastic\Config_LoRaConfig_ModemPreset::class);

