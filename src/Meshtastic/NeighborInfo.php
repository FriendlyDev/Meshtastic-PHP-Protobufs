<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Full info on edges for a single node
 *
 * Generated from protobuf message <code>meshtastic.NeighborInfo</code>
 */
class NeighborInfo extends \Google\Protobuf\Internal\Message
{
    /**
     * The node ID of the node sending info on its neighbors
     *
     * Generated from protobuf field <code>uint32 node_id = 1;</code>
     */
    protected $node_id = 0;
    /**
     * Field to pass neighbor info for the next sending cycle
     *
     * Generated from protobuf field <code>uint32 last_sent_by_id = 2;</code>
     */
    protected $last_sent_by_id = 0;
    /**
     * Broadcast interval of the represented node (in seconds)
     *
     * Generated from protobuf field <code>uint32 node_broadcast_interval_secs = 3;</code>
     */
    protected $node_broadcast_interval_secs = 0;
    /**
     * The list of out edges from this node
     *
     * Generated from protobuf field <code>repeated .meshtastic.Neighbor neighbors = 4;</code>
     */
    private $neighbors;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $node_id
     *           The node ID of the node sending info on its neighbors
     *     @type int $last_sent_by_id
     *           Field to pass neighbor info for the next sending cycle
     *     @type int $node_broadcast_interval_secs
     *           Broadcast interval of the represented node (in seconds)
     *     @type array<\Meshtastic\Neighbor>|\Google\Protobuf\Internal\RepeatedField $neighbors
     *           The list of out edges from this node
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * The node ID of the node sending info on its neighbors
     *
     * Generated from protobuf field <code>uint32 node_id = 1;</code>
     * @return int
     */
    public function getNodeId()
    {
        return $this->node_id;
    }

    /**
     * The node ID of the node sending info on its neighbors
     *
     * Generated from protobuf field <code>uint32 node_id = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeId($var)
    {
        GPBUtil::checkUint32($var);
        $this->node_id = $var;

        return $this;
    }

    /**
     * Field to pass neighbor info for the next sending cycle
     *
     * Generated from protobuf field <code>uint32 last_sent_by_id = 2;</code>
     * @return int
     */
    public function getLastSentById()
    {
        return $this->last_sent_by_id;
    }

    /**
     * Field to pass neighbor info for the next sending cycle
     *
     * Generated from protobuf field <code>uint32 last_sent_by_id = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setLastSentById($var)
    {
        GPBUtil::checkUint32($var);
        $this->last_sent_by_id = $var;

        return $this;
    }

    /**
     * Broadcast interval of the represented node (in seconds)
     *
     * Generated from protobuf field <code>uint32 node_broadcast_interval_secs = 3;</code>
     * @return int
     */
    public function getNodeBroadcastIntervalSecs()
    {
        return $this->node_broadcast_interval_secs;
    }

    /**
     * Broadcast interval of the represented node (in seconds)
     *
     * Generated from protobuf field <code>uint32 node_broadcast_interval_secs = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeBroadcastIntervalSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->node_broadcast_interval_secs = $var;

        return $this;
    }

    /**
     * The list of out edges from this node
     *
     * Generated from protobuf field <code>repeated .meshtastic.Neighbor neighbors = 4;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getNeighbors()
    {
        return $this->neighbors;
    }

    /**
     * The list of out edges from this node
     *
     * Generated from protobuf field <code>repeated .meshtastic.Neighbor neighbors = 4;</code>
     * @param array<\Meshtastic\Neighbor>|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setNeighbors($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Meshtastic\Neighbor::class);
        $this->neighbors = $arr;

        return $this;
    }

}

