<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mqtt.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message wraps a MeshPacket with extra metadata about the sender and how it arrived.
 *
 * Generated from protobuf message <code>meshtastic.ServiceEnvelope</code>
 */
class ServiceEnvelope extends \Google\Protobuf\Internal\Message
{
    /**
     * The (probably encrypted) packet
     *
     * Generated from protobuf field <code>.meshtastic.MeshPacket packet = 1;</code>
     */
    protected $packet = null;
    /**
     * The global channel ID it was sent on
     *
     * Generated from protobuf field <code>string channel_id = 2;</code>
     */
    protected $channel_id = '';
    /**
     * The sending gateway node ID. Can we use this to authenticate/prevent fake
     * nodeid impersonation for senders? - i.e. use gateway/mesh id (which is authenticated) + local node id as
     * the globally trusted nodenum
     *
     * Generated from protobuf field <code>string gateway_id = 3;</code>
     */
    protected $gateway_id = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Meshtastic\MeshPacket $packet
     *           The (probably encrypted) packet
     *     @type string $channel_id
     *           The global channel ID it was sent on
     *     @type string $gateway_id
     *           The sending gateway node ID. Can we use this to authenticate/prevent fake
     *           nodeid impersonation for senders? - i.e. use gateway/mesh id (which is authenticated) + local node id as
     *           the globally trusted nodenum
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mqtt::initOnce();
        parent::__construct($data);
    }

    /**
     * The (probably encrypted) packet
     *
     * Generated from protobuf field <code>.meshtastic.MeshPacket packet = 1;</code>
     * @return \Meshtastic\MeshPacket|null
     */
    public function getPacket()
    {
        return $this->packet;
    }

    public function hasPacket()
    {
        return isset($this->packet);
    }

    public function clearPacket()
    {
        unset($this->packet);
    }

    /**
     * The (probably encrypted) packet
     *
     * Generated from protobuf field <code>.meshtastic.MeshPacket packet = 1;</code>
     * @param \Meshtastic\MeshPacket $var
     * @return $this
     */
    public function setPacket($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\MeshPacket::class);
        $this->packet = $var;

        return $this;
    }

    /**
     * The global channel ID it was sent on
     *
     * Generated from protobuf field <code>string channel_id = 2;</code>
     * @return string
     */
    public function getChannelId()
    {
        return $this->channel_id;
    }

    /**
     * The global channel ID it was sent on
     *
     * Generated from protobuf field <code>string channel_id = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setChannelId($var)
    {
        GPBUtil::checkString($var, True);
        $this->channel_id = $var;

        return $this;
    }

    /**
     * The sending gateway node ID. Can we use this to authenticate/prevent fake
     * nodeid impersonation for senders? - i.e. use gateway/mesh id (which is authenticated) + local node id as
     * the globally trusted nodenum
     *
     * Generated from protobuf field <code>string gateway_id = 3;</code>
     * @return string
     */
    public function getGatewayId()
    {
        return $this->gateway_id;
    }

    /**
     * The sending gateway node ID. Can we use this to authenticate/prevent fake
     * nodeid impersonation for senders? - i.e. use gateway/mesh id (which is authenticated) + local node id as
     * the globally trusted nodenum
     *
     * Generated from protobuf field <code>string gateway_id = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setGatewayId($var)
    {
        GPBUtil::checkString($var, True);
        $this->gateway_id = $var;

        return $this;
    }

}

