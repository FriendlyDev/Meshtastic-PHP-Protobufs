<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/deviceonly.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>meshtastic.NodeInfoLite</code>
 */
class NodeInfoLite extends \Google\Protobuf\Internal\Message
{
    /**
     * The node number
     *
     * Generated from protobuf field <code>uint32 num = 1;</code>
     */
    protected $num = 0;
    /**
     * The user info for this node
     *
     * Generated from protobuf field <code>.meshtastic.User user = 2;</code>
     */
    protected $user = null;
    /**
     * This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     * Position.time now indicates the last time we received a POSITION from that node.
     *
     * Generated from protobuf field <code>.meshtastic.PositionLite position = 3;</code>
     */
    protected $position = null;
    /**
     * Returns the Signal-to-noise ratio (SNR) of the last received message,
     * as measured by the receiver. Return SNR of the last received message in dB
     *
     * Generated from protobuf field <code>float snr = 4;</code>
     */
    protected $snr = 0.0;
    /**
     * Set to indicate the last time we received a packet from this node
     *
     * Generated from protobuf field <code>fixed32 last_heard = 5;</code>
     */
    protected $last_heard = 0;
    /**
     * The latest device metrics for the node.
     *
     * Generated from protobuf field <code>.meshtastic.DeviceMetrics device_metrics = 6;</code>
     */
    protected $device_metrics = null;
    /**
     * local channel index we heard that node on. Only populated if its not the default channel.
     *
     * Generated from protobuf field <code>uint32 channel = 7;</code>
     */
    protected $channel = 0;
    /**
     * True if we witnessed the node over MQTT instead of LoRA transport
     *
     * Generated from protobuf field <code>bool via_mqtt = 8;</code>
     */
    protected $via_mqtt = false;
    /**
     * Number of hops away from us this node is (0 if adjacent)
     *
     * Generated from protobuf field <code>uint32 hops_away = 9;</code>
     */
    protected $hops_away = 0;
    /**
     * True if node is in our favorites list
     * Persists between NodeDB internal clean ups
     *
     * Generated from protobuf field <code>bool is_favorite = 10;</code>
     */
    protected $is_favorite = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $num
     *           The node number
     *     @type \Meshtastic\User $user
     *           The user info for this node
     *     @type \Meshtastic\PositionLite $position
     *           This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     *           Position.time now indicates the last time we received a POSITION from that node.
     *     @type float $snr
     *           Returns the Signal-to-noise ratio (SNR) of the last received message,
     *           as measured by the receiver. Return SNR of the last received message in dB
     *     @type int $last_heard
     *           Set to indicate the last time we received a packet from this node
     *     @type \Meshtastic\DeviceMetrics $device_metrics
     *           The latest device metrics for the node.
     *     @type int $channel
     *           local channel index we heard that node on. Only populated if its not the default channel.
     *     @type bool $via_mqtt
     *           True if we witnessed the node over MQTT instead of LoRA transport
     *     @type int $hops_away
     *           Number of hops away from us this node is (0 if adjacent)
     *     @type bool $is_favorite
     *           True if node is in our favorites list
     *           Persists between NodeDB internal clean ups
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Deviceonly::initOnce();
        parent::__construct($data);
    }

    /**
     * The node number
     *
     * Generated from protobuf field <code>uint32 num = 1;</code>
     * @return int
     */
    public function getNum()
    {
        return $this->num;
    }

    /**
     * The node number
     *
     * Generated from protobuf field <code>uint32 num = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->num = $var;

        return $this;
    }

    /**
     * The user info for this node
     *
     * Generated from protobuf field <code>.meshtastic.User user = 2;</code>
     * @return \Meshtastic\User|null
     */
    public function getUser()
    {
        return $this->user;
    }

    public function hasUser()
    {
        return isset($this->user);
    }

    public function clearUser()
    {
        unset($this->user);
    }

    /**
     * The user info for this node
     *
     * Generated from protobuf field <code>.meshtastic.User user = 2;</code>
     * @param \Meshtastic\User $var
     * @return $this
     */
    public function setUser($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\User::class);
        $this->user = $var;

        return $this;
    }

    /**
     * This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     * Position.time now indicates the last time we received a POSITION from that node.
     *
     * Generated from protobuf field <code>.meshtastic.PositionLite position = 3;</code>
     * @return \Meshtastic\PositionLite|null
     */
    public function getPosition()
    {
        return $this->position;
    }

    public function hasPosition()
    {
        return isset($this->position);
    }

    public function clearPosition()
    {
        unset($this->position);
    }

    /**
     * This position data. Note: before 1.2.14 we would also store the last time we've heard from this node in position.time, that is no longer true.
     * Position.time now indicates the last time we received a POSITION from that node.
     *
     * Generated from protobuf field <code>.meshtastic.PositionLite position = 3;</code>
     * @param \Meshtastic\PositionLite $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\PositionLite::class);
        $this->position = $var;

        return $this;
    }

    /**
     * Returns the Signal-to-noise ratio (SNR) of the last received message,
     * as measured by the receiver. Return SNR of the last received message in dB
     *
     * Generated from protobuf field <code>float snr = 4;</code>
     * @return float
     */
    public function getSnr()
    {
        return $this->snr;
    }

    /**
     * Returns the Signal-to-noise ratio (SNR) of the last received message,
     * as measured by the receiver. Return SNR of the last received message in dB
     *
     * Generated from protobuf field <code>float snr = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setSnr($var)
    {
        GPBUtil::checkFloat($var);
        $this->snr = $var;

        return $this;
    }

    /**
     * Set to indicate the last time we received a packet from this node
     *
     * Generated from protobuf field <code>fixed32 last_heard = 5;</code>
     * @return int
     */
    public function getLastHeard()
    {
        return $this->last_heard;
    }

    /**
     * Set to indicate the last time we received a packet from this node
     *
     * Generated from protobuf field <code>fixed32 last_heard = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setLastHeard($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_heard = $var;

        return $this;
    }

    /**
     * The latest device metrics for the node.
     *
     * Generated from protobuf field <code>.meshtastic.DeviceMetrics device_metrics = 6;</code>
     * @return \Meshtastic\DeviceMetrics|null
     */
    public function getDeviceMetrics()
    {
        return $this->device_metrics;
    }

    public function hasDeviceMetrics()
    {
        return isset($this->device_metrics);
    }

    public function clearDeviceMetrics()
    {
        unset($this->device_metrics);
    }

    /**
     * The latest device metrics for the node.
     *
     * Generated from protobuf field <code>.meshtastic.DeviceMetrics device_metrics = 6;</code>
     * @param \Meshtastic\DeviceMetrics $var
     * @return $this
     */
    public function setDeviceMetrics($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\DeviceMetrics::class);
        $this->device_metrics = $var;

        return $this;
    }

    /**
     * local channel index we heard that node on. Only populated if its not the default channel.
     *
     * Generated from protobuf field <code>uint32 channel = 7;</code>
     * @return int
     */
    public function getChannel()
    {
        return $this->channel;
    }

    /**
     * local channel index we heard that node on. Only populated if its not the default channel.
     *
     * Generated from protobuf field <code>uint32 channel = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setChannel($var)
    {
        GPBUtil::checkUint32($var);
        $this->channel = $var;

        return $this;
    }

    /**
     * True if we witnessed the node over MQTT instead of LoRA transport
     *
     * Generated from protobuf field <code>bool via_mqtt = 8;</code>
     * @return bool
     */
    public function getViaMqtt()
    {
        return $this->via_mqtt;
    }

    /**
     * True if we witnessed the node over MQTT instead of LoRA transport
     *
     * Generated from protobuf field <code>bool via_mqtt = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setViaMqtt($var)
    {
        GPBUtil::checkBool($var);
        $this->via_mqtt = $var;

        return $this;
    }

    /**
     * Number of hops away from us this node is (0 if adjacent)
     *
     * Generated from protobuf field <code>uint32 hops_away = 9;</code>
     * @return int
     */
    public function getHopsAway()
    {
        return $this->hops_away;
    }

    /**
     * Number of hops away from us this node is (0 if adjacent)
     *
     * Generated from protobuf field <code>uint32 hops_away = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setHopsAway($var)
    {
        GPBUtil::checkUint32($var);
        $this->hops_away = $var;

        return $this;
    }

    /**
     * True if node is in our favorites list
     * Persists between NodeDB internal clean ups
     *
     * Generated from protobuf field <code>bool is_favorite = 10;</code>
     * @return bool
     */
    public function getIsFavorite()
    {
        return $this->is_favorite;
    }

    /**
     * True if node is in our favorites list
     * Persists between NodeDB internal clean ups
     *
     * Generated from protobuf field <code>bool is_favorite = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsFavorite($var)
    {
        GPBUtil::checkBool($var);
        $this->is_favorite = $var;

        return $this;
    }

}

