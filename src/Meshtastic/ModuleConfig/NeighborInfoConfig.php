<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/module_config.proto

namespace Meshtastic\ModuleConfig;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * NeighborInfoModule Config
 *
 * Generated from protobuf message <code>meshtastic.ModuleConfig.NeighborInfoConfig</code>
 */
class NeighborInfoConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Whether the Module is enabled
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     */
    protected $enabled = false;
    /**
     * Interval in seconds of how often we should try to send our
     * Neighbor Info (minimum is 14400, i.e., 4 hours)
     *
     * Generated from protobuf field <code>uint32 update_interval = 2;</code>
     */
    protected $update_interval = 0;
    /**
     * Whether in addition to sending it to MQTT and the PhoneAPI, our NeighborInfo should be transmitted over LoRa.
     * Note that this is not available on a channel with default key and name.
     *
     * Generated from protobuf field <code>bool transmit_over_lora = 3;</code>
     */
    protected $transmit_over_lora = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $enabled
     *           Whether the Module is enabled
     *     @type int $update_interval
     *           Interval in seconds of how often we should try to send our
     *           Neighbor Info (minimum is 14400, i.e., 4 hours)
     *     @type bool $transmit_over_lora
     *           Whether in addition to sending it to MQTT and the PhoneAPI, our NeighborInfo should be transmitted over LoRa.
     *           Note that this is not available on a channel with default key and name.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\ModuleConfig::initOnce();
        parent::__construct($data);
    }

    /**
     * Whether the Module is enabled
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @return bool
     */
    public function getEnabled()
    {
        return $this->enabled;
    }

    /**
     * Whether the Module is enabled
     *
     * Generated from protobuf field <code>bool enabled = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setEnabled($var)
    {
        GPBUtil::checkBool($var);
        $this->enabled = $var;

        return $this;
    }

    /**
     * Interval in seconds of how often we should try to send our
     * Neighbor Info (minimum is 14400, i.e., 4 hours)
     *
     * Generated from protobuf field <code>uint32 update_interval = 2;</code>
     * @return int
     */
    public function getUpdateInterval()
    {
        return $this->update_interval;
    }

    /**
     * Interval in seconds of how often we should try to send our
     * Neighbor Info (minimum is 14400, i.e., 4 hours)
     *
     * Generated from protobuf field <code>uint32 update_interval = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setUpdateInterval($var)
    {
        GPBUtil::checkUint32($var);
        $this->update_interval = $var;

        return $this;
    }

    /**
     * Whether in addition to sending it to MQTT and the PhoneAPI, our NeighborInfo should be transmitted over LoRa.
     * Note that this is not available on a channel with default key and name.
     *
     * Generated from protobuf field <code>bool transmit_over_lora = 3;</code>
     * @return bool
     */
    public function getTransmitOverLora()
    {
        return $this->transmit_over_lora;
    }

    /**
     * Whether in addition to sending it to MQTT and the PhoneAPI, our NeighborInfo should be transmitted over LoRa.
     * Note that this is not available on a channel with default key and name.
     *
     * Generated from protobuf field <code>bool transmit_over_lora = 3;</code>
     * @param bool $var
     * @return $this
     */
    public function setTransmitOverLora($var)
    {
        GPBUtil::checkBool($var);
        $this->transmit_over_lora = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(NeighborInfoConfig::class, \Meshtastic\ModuleConfig_NeighborInfoConfig::class);

