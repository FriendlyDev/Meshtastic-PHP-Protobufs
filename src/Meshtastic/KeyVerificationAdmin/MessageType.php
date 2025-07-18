<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/admin.proto

namespace Meshtastic\KeyVerificationAdmin;

use UnexpectedValueException;

/**
 * Three stages of this request.
 *
 * Protobuf type <code>meshtastic.KeyVerificationAdmin.MessageType</code>
 */
class MessageType
{
    /**
     * This is the first stage, where a client initiates
     *
     * Generated from protobuf enum <code>INITIATE_VERIFICATION = 0;</code>
     */
    const INITIATE_VERIFICATION = 0;
    /**
     * After the nonce has been returned over the mesh, the client prompts for the security number
     * And uses this message to provide it to the node.
     *
     * Generated from protobuf enum <code>PROVIDE_SECURITY_NUMBER = 1;</code>
     */
    const PROVIDE_SECURITY_NUMBER = 1;
    /**
     * Once the user has compared the verification message, this message notifies the node.
     *
     * Generated from protobuf enum <code>DO_VERIFY = 2;</code>
     */
    const DO_VERIFY = 2;
    /**
     * This is the cancel path, can be taken at any point
     *
     * Generated from protobuf enum <code>DO_NOT_VERIFY = 3;</code>
     */
    const DO_NOT_VERIFY = 3;

    private static $valueToName = [
        self::INITIATE_VERIFICATION => 'INITIATE_VERIFICATION',
        self::PROVIDE_SECURITY_NUMBER => 'PROVIDE_SECURITY_NUMBER',
        self::DO_VERIFY => 'DO_VERIFY',
        self::DO_NOT_VERIFY => 'DO_NOT_VERIFY',
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
class_alias(MessageType::class, \Meshtastic\KeyVerificationAdmin_MessageType::class);

