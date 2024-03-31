<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/module_config.proto

namespace Meshtastic\ModuleConfig\AudioConfig;

use UnexpectedValueException;

/**
 * Baudrate for codec2 voice
 *
 * Protobuf type <code>meshtastic.ModuleConfig.AudioConfig.Audio_Baud</code>
 */
class Audio_Baud
{
    /**
     * Generated from protobuf enum <code>CODEC2_DEFAULT = 0;</code>
     */
    const CODEC2_DEFAULT = 0;
    /**
     * Generated from protobuf enum <code>CODEC2_3200 = 1;</code>
     */
    const CODEC2_3200 = 1;
    /**
     * Generated from protobuf enum <code>CODEC2_2400 = 2;</code>
     */
    const CODEC2_2400 = 2;
    /**
     * Generated from protobuf enum <code>CODEC2_1600 = 3;</code>
     */
    const CODEC2_1600 = 3;
    /**
     * Generated from protobuf enum <code>CODEC2_1400 = 4;</code>
     */
    const CODEC2_1400 = 4;
    /**
     * Generated from protobuf enum <code>CODEC2_1300 = 5;</code>
     */
    const CODEC2_1300 = 5;
    /**
     * Generated from protobuf enum <code>CODEC2_1200 = 6;</code>
     */
    const CODEC2_1200 = 6;
    /**
     * Generated from protobuf enum <code>CODEC2_700 = 7;</code>
     */
    const CODEC2_700 = 7;
    /**
     * Generated from protobuf enum <code>CODEC2_700B = 8;</code>
     */
    const CODEC2_700B = 8;

    private static $valueToName = [
        self::CODEC2_DEFAULT => 'CODEC2_DEFAULT',
        self::CODEC2_3200 => 'CODEC2_3200',
        self::CODEC2_2400 => 'CODEC2_2400',
        self::CODEC2_1600 => 'CODEC2_1600',
        self::CODEC2_1400 => 'CODEC2_1400',
        self::CODEC2_1300 => 'CODEC2_1300',
        self::CODEC2_1200 => 'CODEC2_1200',
        self::CODEC2_700 => 'CODEC2_700',
        self::CODEC2_700B => 'CODEC2_700B',
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
class_alias(Audio_Baud::class, \Meshtastic\ModuleConfig_AudioConfig_Audio_Baud::class);

