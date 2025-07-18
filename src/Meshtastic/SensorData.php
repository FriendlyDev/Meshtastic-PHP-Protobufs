<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/interdevice.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>meshtastic.SensorData</code>
 */
class SensorData extends \Google\Protobuf\Internal\Message
{
    /**
     * The message type
     *
     * Generated from protobuf field <code>.meshtastic.MessageType type = 1;</code>
     */
    protected $type = 0;
    protected $data;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $type
     *           The message type
     *     @type float $float_value
     *     @type int $uint32_value
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Interdevice::initOnce();
        parent::__construct($data);
    }

    /**
     * The message type
     *
     * Generated from protobuf field <code>.meshtastic.MessageType type = 1;</code>
     * @return int
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * The message type
     *
     * Generated from protobuf field <code>.meshtastic.MessageType type = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setType($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\MessageType::class);
        $this->type = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float float_value = 2;</code>
     * @return float
     */
    public function getFloatValue()
    {
        return $this->readOneof(2);
    }

    public function hasFloatValue()
    {
        return $this->hasOneof(2);
    }

    /**
     * Generated from protobuf field <code>float float_value = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setFloatValue($var)
    {
        GPBUtil::checkFloat($var);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Generated from protobuf field <code>uint32 uint32_value = 3;</code>
     * @return int
     */
    public function getUint32Value()
    {
        return $this->readOneof(3);
    }

    public function hasUint32Value()
    {
        return $this->hasOneof(3);
    }

    /**
     * Generated from protobuf field <code>uint32 uint32_value = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setUint32Value($var)
    {
        GPBUtil::checkUint32($var);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * @return string
     */
    public function getData()
    {
        return $this->whichOneof("data");
    }

}

