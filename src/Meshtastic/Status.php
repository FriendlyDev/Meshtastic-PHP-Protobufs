<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/atak.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * ATAK EUD Status
 * <status battery='100' />
 *
 * Generated from protobuf message <code>meshtastic.Status</code>
 */
class Status extends \Google\Protobuf\Internal\Message
{
    /**
     * Battery level
     *
     * Generated from protobuf field <code>uint32 battery = 1;</code>
     */
    protected $battery = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $battery
     *           Battery level
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Atak::initOnce();
        parent::__construct($data);
    }

    /**
     * Battery level
     *
     * Generated from protobuf field <code>uint32 battery = 1;</code>
     * @return int
     */
    public function getBattery()
    {
        return $this->battery;
    }

    /**
     * Battery level
     *
     * Generated from protobuf field <code>uint32 battery = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setBattery($var)
    {
        GPBUtil::checkUint32($var);
        $this->battery = $var;

        return $this;
    }

}

