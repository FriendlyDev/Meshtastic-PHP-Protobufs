<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use UnexpectedValueException;

/**
 * Shared constants between device and phone
 *
 * Protobuf type <code>meshtastic.Constants</code>
 */
class Constants
{
    /**
     * First enum must be zero, and we are just using this enum to
     * pass int constants between two very different environments
     *
     * Generated from protobuf enum <code>ZERO = 0;</code>
     */
    const ZERO = 0;
    /**
     * From mesh.options
     * note: this payload length is ONLY the bytes that are sent inside of the Data protobuf (excluding protobuf overhead). The 16 byte header is
     * outside of this envelope
     *
     * Generated from protobuf enum <code>DATA_PAYLOAD_LEN = 233;</code>
     */
    const DATA_PAYLOAD_LEN = 233;

    private static $valueToName = [
        self::ZERO => 'ZERO',
        self::DATA_PAYLOAD_LEN => 'DATA_PAYLOAD_LEN',
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

