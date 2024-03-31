<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * RemoteHardwarePins associated with a node
 *
 * Generated from protobuf message <code>meshtastic.NodeRemoteHardwarePin</code>
 */
class NodeRemoteHardwarePin extends \Google\Protobuf\Internal\Message
{
    /**
     * The node_num exposing the available gpio pin
     *
     * Generated from protobuf field <code>uint32 node_num = 1;</code>
     */
    protected $node_num = 0;
    /**
     * The the available gpio pin for usage with RemoteHardware module
     *
     * Generated from protobuf field <code>.meshtastic.RemoteHardwarePin pin = 2;</code>
     */
    protected $pin = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $node_num
     *           The node_num exposing the available gpio pin
     *     @type \Meshtastic\RemoteHardwarePin $pin
     *           The the available gpio pin for usage with RemoteHardware module
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * The node_num exposing the available gpio pin
     *
     * Generated from protobuf field <code>uint32 node_num = 1;</code>
     * @return int
     */
    public function getNodeNum()
    {
        return $this->node_num;
    }

    /**
     * The node_num exposing the available gpio pin
     *
     * Generated from protobuf field <code>uint32 node_num = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeNum($var)
    {
        GPBUtil::checkUint32($var);
        $this->node_num = $var;

        return $this;
    }

    /**
     * The the available gpio pin for usage with RemoteHardware module
     *
     * Generated from protobuf field <code>.meshtastic.RemoteHardwarePin pin = 2;</code>
     * @return \Meshtastic\RemoteHardwarePin|null
     */
    public function getPin()
    {
        return $this->pin;
    }

    public function hasPin()
    {
        return isset($this->pin);
    }

    public function clearPin()
    {
        unset($this->pin);
    }

    /**
     * The the available gpio pin for usage with RemoteHardware module
     *
     * Generated from protobuf field <code>.meshtastic.RemoteHardwarePin pin = 2;</code>
     * @param \Meshtastic\RemoteHardwarePin $var
     * @return $this
     */
    public function setPin($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\RemoteHardwarePin::class);
        $this->pin = $var;

        return $this;
    }

}

