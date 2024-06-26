<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Compressed message payload
 *
 * Generated from protobuf message <code>meshtastic.Compressed</code>
 */
class Compressed extends \Google\Protobuf\Internal\Message
{
    /**
     * PortNum to determine the how to handle the compressed payload.
     *
     * Generated from protobuf field <code>.meshtastic.PortNum portnum = 1;</code>
     */
    protected $portnum = 0;
    /**
     * Compressed data.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     */
    protected $data = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $portnum
     *           PortNum to determine the how to handle the compressed payload.
     *     @type string $data
     *           Compressed data.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * PortNum to determine the how to handle the compressed payload.
     *
     * Generated from protobuf field <code>.meshtastic.PortNum portnum = 1;</code>
     * @return int
     */
    public function getPortnum()
    {
        return $this->portnum;
    }

    /**
     * PortNum to determine the how to handle the compressed payload.
     *
     * Generated from protobuf field <code>.meshtastic.PortNum portnum = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setPortnum($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\PortNum::class);
        $this->portnum = $var;

        return $this;
    }

    /**
     * Compressed data.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->data;
    }

    /**
     * Compressed data.
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->data = $var;

        return $this;
    }

}

