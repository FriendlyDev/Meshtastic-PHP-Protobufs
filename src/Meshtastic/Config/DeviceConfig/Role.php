<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config\DeviceConfig;

use UnexpectedValueException;

/**
 * Defines the device's role on the Mesh network
 *
 * Protobuf type <code>meshtastic.Config.DeviceConfig.Role</code>
 */
class Role
{
    /**
     * Description: App connected or stand alone messaging device.
     * Technical Details: Default Role
     *
     * Generated from protobuf enum <code>CLIENT = 0;</code>
     */
    const CLIENT = 0;
    /**
     *  Description: Device that does not forward packets from other devices.
     *
     * Generated from protobuf enum <code>CLIENT_MUTE = 1;</code>
     */
    const CLIENT_MUTE = 1;
    /**
     * Description: Infrastructure node for extending network coverage by relaying messages. Visible in Nodes list.
     * Technical Details: Mesh packets will prefer to be routed over this node. This node will not be used by client apps.
     *   The wifi radio and the oled screen will be put to sleep.
     *   This mode may still potentially have higher power usage due to it's preference in message rebroadcasting on the mesh.
     *
     * Generated from protobuf enum <code>ROUTER = 2;</code>
     */
    const ROUTER = 2;
    /**
     * Generated from protobuf enum <code>ROUTER_CLIENT = 3 [deprecated = true];</code>
     */
    const ROUTER_CLIENT = 3;
    /**
     * Description: Infrastructure node for extending network coverage by relaying messages with minimal overhead. Not visible in Nodes list.
     * Technical Details: Mesh packets will simply be rebroadcasted over this node. Nodes configured with this role will not originate NodeInfo, Position, Telemetry
     *   or any other packet type. They will simply rebroadcast any mesh packets on the same frequency, channel num, spread factor, and coding rate.
     *
     * Generated from protobuf enum <code>REPEATER = 4;</code>
     */
    const REPEATER = 4;
    /**
     * Description: Broadcasts GPS position packets as priority.
     * Technical Details: Position Mesh packets will be prioritized higher and sent more frequently by default.
     *   When used in conjunction with power.is_power_saving = true, nodes will wake up,
     *   send position, and then sleep for position.position_broadcast_secs seconds.
     *
     * Generated from protobuf enum <code>TRACKER = 5;</code>
     */
    const TRACKER = 5;
    /**
     * Description: Broadcasts telemetry packets as priority.
     * Technical Details: Telemetry Mesh packets will be prioritized higher and sent more frequently by default.
     *   When used in conjunction with power.is_power_saving = true, nodes will wake up,
     *   send environment telemetry, and then sleep for telemetry.environment_update_interval seconds.
     *
     * Generated from protobuf enum <code>SENSOR = 6;</code>
     */
    const SENSOR = 6;
    /**
     * Description: Optimized for ATAK system communication and reduces routine broadcasts.
     * Technical Details: Used for nodes dedicated for connection to an ATAK EUD.
     *    Turns off many of the routine broadcasts to favor CoT packet stream
     *    from the Meshtastic ATAK plugin -> IMeshService -> Node
     *
     * Generated from protobuf enum <code>TAK = 7;</code>
     */
    const TAK = 7;
    /**
     * Description: Device that only broadcasts as needed for stealth or power savings.
     * Technical Details: Used for nodes that "only speak when spoken to"
     *    Turns all of the routine broadcasts but allows for ad-hoc communication
     *    Still rebroadcasts, but with local only rebroadcast mode (known meshes only)
     *    Can be used for clandestine operation or to dramatically reduce airtime / power consumption
     *
     * Generated from protobuf enum <code>CLIENT_HIDDEN = 8;</code>
     */
    const CLIENT_HIDDEN = 8;
    /**
     * Description: Broadcasts location as message to default channel regularly for to assist with device recovery.
     * Technical Details: Used to automatically send a text message to the mesh
     *    with the current position of the device on a frequent interval:
     *    "I'm lost! Position: lat / long"
     *
     * Generated from protobuf enum <code>LOST_AND_FOUND = 9;</code>
     */
    const LOST_AND_FOUND = 9;
    /**
     * Description: Enables automatic TAK PLI broadcasts and reduces routine broadcasts.
     * Technical Details: Turns off many of the routine broadcasts to favor ATAK CoT packet stream
     *    and automatic TAK PLI (position location information) broadcasts.
     *    Uses position module configuration to determine TAK PLI broadcast interval.
     *
     * Generated from protobuf enum <code>TAK_TRACKER = 10;</code>
     */
    const TAK_TRACKER = 10;
    /**
     * Description: Will always rebroadcast packets, but will do so after all other modes.
     * Technical Details: Used for router nodes that are intended to provide additional coverage
     *    in areas not already covered by other routers, or to bridge around problematic terrain,
     *    but should not be given priority over other routers in order to avoid unnecessaraily
     *    consuming hops.
     *
     * Generated from protobuf enum <code>ROUTER_LATE = 11;</code>
     */
    const ROUTER_LATE = 11;

    private static $valueToName = [
        self::CLIENT => 'CLIENT',
        self::CLIENT_MUTE => 'CLIENT_MUTE',
        self::ROUTER => 'ROUTER',
        self::ROUTER_CLIENT => 'ROUTER_CLIENT',
        self::REPEATER => 'REPEATER',
        self::TRACKER => 'TRACKER',
        self::SENSOR => 'SENSOR',
        self::TAK => 'TAK',
        self::CLIENT_HIDDEN => 'CLIENT_HIDDEN',
        self::LOST_AND_FOUND => 'LOST_AND_FOUND',
        self::TAK_TRACKER => 'TAK_TRACKER',
        self::ROUTER_LATE => 'ROUTER_LATE',
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
class_alias(Role::class, \Meshtastic\Config_DeviceConfig_Role::class);

