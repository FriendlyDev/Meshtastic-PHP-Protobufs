<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/telemetry.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Health telemetry metrics
 *
 * Generated from protobuf message <code>meshtastic.HealthMetrics</code>
 */
class HealthMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Heart rate (beats per minute)
     *
     * Generated from protobuf field <code>optional uint32 heart_bpm = 1;</code>
     */
    protected $heart_bpm = null;
    /**
     * SpO2 (blood oxygen saturation) level
     *
     * Generated from protobuf field <code>optional uint32 spO2 = 2;</code>
     */
    protected $spO2 = null;
    /**
     * Body temperature in degrees Celsius
     *
     * Generated from protobuf field <code>optional float temperature = 3;</code>
     */
    protected $temperature = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $heart_bpm
     *           Heart rate (beats per minute)
     *     @type int $spO2
     *           SpO2 (blood oxygen saturation) level
     *     @type float $temperature
     *           Body temperature in degrees Celsius
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Heart rate (beats per minute)
     *
     * Generated from protobuf field <code>optional uint32 heart_bpm = 1;</code>
     * @return int
     */
    public function getHeartBpm()
    {
        return isset($this->heart_bpm) ? $this->heart_bpm : 0;
    }

    public function hasHeartBpm()
    {
        return isset($this->heart_bpm);
    }

    public function clearHeartBpm()
    {
        unset($this->heart_bpm);
    }

    /**
     * Heart rate (beats per minute)
     *
     * Generated from protobuf field <code>optional uint32 heart_bpm = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setHeartBpm($var)
    {
        GPBUtil::checkUint32($var);
        $this->heart_bpm = $var;

        return $this;
    }

    /**
     * SpO2 (blood oxygen saturation) level
     *
     * Generated from protobuf field <code>optional uint32 spO2 = 2;</code>
     * @return int
     */
    public function getSpO2()
    {
        return isset($this->spO2) ? $this->spO2 : 0;
    }

    public function hasSpO2()
    {
        return isset($this->spO2);
    }

    public function clearSpO2()
    {
        unset($this->spO2);
    }

    /**
     * SpO2 (blood oxygen saturation) level
     *
     * Generated from protobuf field <code>optional uint32 spO2 = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setSpO2($var)
    {
        GPBUtil::checkUint32($var);
        $this->spO2 = $var;

        return $this;
    }

    /**
     * Body temperature in degrees Celsius
     *
     * Generated from protobuf field <code>optional float temperature = 3;</code>
     * @return float
     */
    public function getTemperature()
    {
        return isset($this->temperature) ? $this->temperature : 0.0;
    }

    public function hasTemperature()
    {
        return isset($this->temperature);
    }

    public function clearTemperature()
    {
        unset($this->temperature);
    }

    /**
     * Body temperature in degrees Celsius
     *
     * Generated from protobuf field <code>optional float temperature = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setTemperature($var)
    {
        GPBUtil::checkFloat($var);
        $this->temperature = $var;

        return $this;
    }

}

