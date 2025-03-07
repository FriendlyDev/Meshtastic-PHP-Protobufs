<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config\DeviceConfig;

use UnexpectedValueException;

/**
 * Defines the device's behavior for how messages are rebroadcast
 *
 * Protobuf type <code>meshtastic.Config.DeviceConfig.RebroadcastMode</code>
 */
class RebroadcastMode
{
    /**
     * Default behavior.
     * Rebroadcast any observed message, if it was on our private channel or from another mesh with the same lora params.
     *
     * Generated from protobuf enum <code>ALL = 0;</code>
     */
    const ALL = 0;
    /**
     * Same as behavior as ALL but skips packet decoding and simply rebroadcasts them.
     * Only available in Repeater role. Setting this on any other roles will result in ALL behavior.
     *
     * Generated from protobuf enum <code>ALL_SKIP_DECODING = 1;</code>
     */
    const ALL_SKIP_DECODING = 1;
    /**
     * Ignores observed messages from foreign meshes that are open or those which it cannot decrypt.
     * Only rebroadcasts message on the nodes local primary / secondary channels.
     *
     * Generated from protobuf enum <code>LOCAL_ONLY = 2;</code>
     */
    const LOCAL_ONLY = 2;
    /**
     * Ignores observed messages from foreign meshes like LOCAL_ONLY,
     * but takes it step further by also ignoring messages from nodenums not in the node's known list (NodeDB)
     *
     * Generated from protobuf enum <code>KNOWN_ONLY = 3;</code>
     */
    const KNOWN_ONLY = 3;
    /**
     * Only permitted for SENSOR, TRACKER and TAK_TRACKER roles, this will inhibit all rebroadcasts, not unlike CLIENT_MUTE role.
     *
     * Generated from protobuf enum <code>NONE = 4;</code>
     */
    const NONE = 4;
    /**
     * Ignores packets from non-standard portnums such as: TAK, RangeTest, PaxCounter, etc.
     * Only rebroadcasts packets with standard portnums: NodeInfo, Text, Position, Telemetry, and Routing.
     *
     * Generated from protobuf enum <code>CORE_PORTNUMS_ONLY = 5;</code>
     */
    const CORE_PORTNUMS_ONLY = 5;

    private static $valueToName = [
        self::ALL => 'ALL',
        self::ALL_SKIP_DECODING => 'ALL_SKIP_DECODING',
        self::LOCAL_ONLY => 'LOCAL_ONLY',
        self::KNOWN_ONLY => 'KNOWN_ONLY',
        self::NONE => 'NONE',
        self::CORE_PORTNUMS_ONLY => 'CORE_PORTNUMS_ONLY',
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
class_alias(RebroadcastMode::class, \Meshtastic\Config_DeviceConfig_RebroadcastMode::class);

