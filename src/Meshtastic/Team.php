<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/atak.proto

namespace Meshtastic;

use UnexpectedValueException;

/**
 * Protobuf type <code>meshtastic.Team</code>
 */
class Team
{
    /**
     * Unspecifed
     *
     * Generated from protobuf enum <code>Unspecifed_Color = 0;</code>
     */
    const Unspecifed_Color = 0;
    /**
     * White
     *
     * Generated from protobuf enum <code>White = 1;</code>
     */
    const White = 1;
    /**
     * Yellow
     *
     * Generated from protobuf enum <code>Yellow = 2;</code>
     */
    const Yellow = 2;
    /**
     * Orange
     *
     * Generated from protobuf enum <code>Orange = 3;</code>
     */
    const Orange = 3;
    /**
     * Magenta
     *
     * Generated from protobuf enum <code>Magenta = 4;</code>
     */
    const Magenta = 4;
    /**
     * Red
     *
     * Generated from protobuf enum <code>Red = 5;</code>
     */
    const Red = 5;
    /**
     * Maroon
     *
     * Generated from protobuf enum <code>Maroon = 6;</code>
     */
    const Maroon = 6;
    /**
     * Purple
     *
     * Generated from protobuf enum <code>Purple = 7;</code>
     */
    const Purple = 7;
    /**
     * Dark Blue
     *
     * Generated from protobuf enum <code>Dark_Blue = 8;</code>
     */
    const Dark_Blue = 8;
    /**
     * Blue
     *
     * Generated from protobuf enum <code>Blue = 9;</code>
     */
    const Blue = 9;
    /**
     * Cyan
     *
     * Generated from protobuf enum <code>Cyan = 10;</code>
     */
    const Cyan = 10;
    /**
     * Teal
     *
     * Generated from protobuf enum <code>Teal = 11;</code>
     */
    const Teal = 11;
    /**
     * Green
     *
     * Generated from protobuf enum <code>Green = 12;</code>
     */
    const Green = 12;
    /**
     * Dark Green
     *
     * Generated from protobuf enum <code>Dark_Green = 13;</code>
     */
    const Dark_Green = 13;
    /**
     * Brown
     *
     * Generated from protobuf enum <code>Brown = 14;</code>
     */
    const Brown = 14;

    private static $valueToName = [
        self::Unspecifed_Color => 'Unspecifed_Color',
        self::White => 'White',
        self::Yellow => 'Yellow',
        self::Orange => 'Orange',
        self::Magenta => 'Magenta',
        self::Red => 'Red',
        self::Maroon => 'Maroon',
        self::Purple => 'Purple',
        self::Dark_Blue => 'Dark_Blue',
        self::Blue => 'Blue',
        self::Cyan => 'Cyan',
        self::Teal => 'Teal',
        self::Green => 'Green',
        self::Dark_Green => 'Dark_Green',
        self::Brown => 'Brown',
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

