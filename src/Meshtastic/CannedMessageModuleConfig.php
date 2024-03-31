<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/cannedmessages.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Canned message module configuration.
 *
 * Generated from protobuf message <code>meshtastic.CannedMessageModuleConfig</code>
 */
class CannedMessageModuleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Predefined messages for canned message module separated by '|' characters.
     *
     * Generated from protobuf field <code>string messages = 1;</code>
     */
    protected $messages = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $messages
     *           Predefined messages for canned message module separated by '|' characters.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Cannedmessages::initOnce();
        parent::__construct($data);
    }

    /**
     * Predefined messages for canned message module separated by '|' characters.
     *
     * Generated from protobuf field <code>string messages = 1;</code>
     * @return string
     */
    public function getMessages()
    {
        return $this->messages;
    }

    /**
     * Predefined messages for canned message module separated by '|' characters.
     *
     * Generated from protobuf field <code>string messages = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessages($var)
    {
        GPBUtil::checkString($var, True);
        $this->messages = $var;

        return $this;
    }

}

