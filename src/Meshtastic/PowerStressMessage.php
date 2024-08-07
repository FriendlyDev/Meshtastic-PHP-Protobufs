<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/powermon.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * PowerStress testing support via the C++ PowerStress module
 *
 * Generated from protobuf message <code>meshtastic.PowerStressMessage</code>
 */
class PowerStressMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * What type of HardwareMessage is this?
     *
     * Generated from protobuf field <code>.meshtastic.PowerStressMessage.Opcode cmd = 1;</code>
     */
    protected $cmd = 0;
    /**
     * Generated from protobuf field <code>float num_seconds = 2;</code>
     */
    protected $num_seconds = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $cmd
     *           What type of HardwareMessage is this?
     *     @type float $num_seconds
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Powermon::initOnce();
        parent::__construct($data);
    }

    /**
     * What type of HardwareMessage is this?
     *
     * Generated from protobuf field <code>.meshtastic.PowerStressMessage.Opcode cmd = 1;</code>
     * @return int
     */
    public function getCmd()
    {
        return $this->cmd;
    }

    /**
     * What type of HardwareMessage is this?
     *
     * Generated from protobuf field <code>.meshtastic.PowerStressMessage.Opcode cmd = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setCmd($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\PowerStressMessage\Opcode::class);
        $this->cmd = $var;

        return $this;
    }

    /**
     * Generated from protobuf field <code>float num_seconds = 2;</code>
     * @return float
     */
    public function getNumSeconds()
    {
        return $this->num_seconds;
    }

    /**
     * Generated from protobuf field <code>float num_seconds = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setNumSeconds($var)
    {
        GPBUtil::checkFloat($var);
        $this->num_seconds = $var;

        return $this;
    }

}

