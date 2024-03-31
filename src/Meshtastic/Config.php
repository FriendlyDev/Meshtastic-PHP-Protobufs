<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>meshtastic.Config</code>
 */
class Config extends \Google\Protobuf\Internal\Message
{
    protected $payload_variant;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Meshtastic\Config\DeviceConfig $device
     *     @type \Meshtastic\Config\PositionConfig $position
     *     @type \Meshtastic\Config\PowerConfig $power
     *     @type \Meshtastic\Config\NetworkConfig $network
     *     @type \Meshtastic\Config\DisplayConfig $display
     *     @type \Meshtastic\Config\LoRaConfig $lora
     *     @type \Meshtastic\Config\BluetoothConfig $bluetooth
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig device = 1;</code>
     * @return \Meshtastic\Config\DeviceConfig|null
     */
    public function getDevice()
    {
        return $this->readOneof(1);
    }

    public function hasDevice()
    {
        return $this->hasOneof(1);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig device = 1;</code>
     * @param \Meshtastic\Config\DeviceConfig $var
     * @return $this
     */
    public function setDevice($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\DeviceConfig::class);
        $this->writeOneof(1, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.PositionConfig position = 2;</code>
     * @return \Meshtastic\Config\PositionConfig|null
     */
    public function getPosition()
    {
        return $this->readOneof(2);
    }

    public function hasPosition()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.PositionConfig position = 2;</code>
     * @param \Meshtastic\Config\PositionConfig $var
     * @return $this
     */
    public function setPosition($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\PositionConfig::class);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.PowerConfig power = 3;</code>
     * @return \Meshtastic\Config\PowerConfig|null
     */
    public function getPower()
    {
        return $this->readOneof(3);
    }

    public function hasPower()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.PowerConfig power = 3;</code>
     * @param \Meshtastic\Config\PowerConfig $var
     * @return $this
     */
    public function setPower($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\PowerConfig::class);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.NetworkConfig network = 4;</code>
     * @return \Meshtastic\Config\NetworkConfig|null
     */
    public function getNetwork()
    {
        return $this->readOneof(4);
    }

    public function hasNetwork()
    {
        return $this->hasOneof(4);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.NetworkConfig network = 4;</code>
     * @param \Meshtastic\Config\NetworkConfig $var
     * @return $this
     */
    public function setNetwork($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\NetworkConfig::class);
        $this->writeOneof(4, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig display = 5;</code>
     * @return \Meshtastic\Config\DisplayConfig|null
     */
    public function getDisplay()
    {
        return $this->readOneof(5);
    }

    public function hasDisplay()
    {
        return $this->hasOneof(5);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig display = 5;</code>
     * @param \Meshtastic\Config\DisplayConfig $var
     * @return $this
     */
    public function setDisplay($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\DisplayConfig::class);
        $this->writeOneof(5, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.LoRaConfig lora = 6;</code>
     * @return \Meshtastic\Config\LoRaConfig|null
     */
    public function getLora()
    {
        return $this->readOneof(6);
    }

    public function hasLora()
    {
        return $this->hasOneof(6);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.LoRaConfig lora = 6;</code>
     * @param \Meshtastic\Config\LoRaConfig $var
     * @return $this
     */
    public function setLora($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\LoRaConfig::class);
        $this->writeOneof(6, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.BluetoothConfig bluetooth = 7;</code>
     * @return \Meshtastic\Config\BluetoothConfig|null
     */
    public function getBluetooth()
    {
        return $this->readOneof(7);
    }

    public function hasBluetooth()
    {
        return $this->hasOneof(7);
    }

    /**
     * Generated from protobuf field <code>.meshtastic.Config.BluetoothConfig bluetooth = 7;</code>
     * @param \Meshtastic\Config\BluetoothConfig $var
     * @return $this
     */
    public function setBluetooth($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\Config\BluetoothConfig::class);
        $this->writeOneof(7, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getPayloadVariant()
    {
        return $this->whichOneof("payload_variant");
    }

}

