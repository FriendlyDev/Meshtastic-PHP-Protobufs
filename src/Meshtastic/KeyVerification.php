<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The actual over-the-mesh message doing KeyVerification
 *
 * Generated from protobuf message <code>meshtastic.KeyVerification</code>
 */
class KeyVerification extends \Google\Protobuf\Internal\Message
{
    /**
     * random value Selected by the requesting node
     *
     * Generated from protobuf field <code>uint64 nonce = 1;</code>
     */
    protected $nonce = 0;
    /**
     * The final authoritative hash, only to be sent by NodeA at the end of the handshake
     *
     * Generated from protobuf field <code>bytes hash1 = 2;</code>
     */
    protected $hash1 = '';
    /**
     * The intermediary hash (actually derived from hash1),
     * sent from NodeB to NodeA in response to the initial message.
     *
     * Generated from protobuf field <code>bytes hash2 = 3;</code>
     */
    protected $hash2 = '';

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int|string $nonce
     *           random value Selected by the requesting node
     *     @type string $hash1
     *           The final authoritative hash, only to be sent by NodeA at the end of the handshake
     *     @type string $hash2
     *           The intermediary hash (actually derived from hash1),
     *           sent from NodeB to NodeA in response to the initial message.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * random value Selected by the requesting node
     *
     * Generated from protobuf field <code>uint64 nonce = 1;</code>
     * @return int|string
     */
    public function getNonce()
    {
        return $this->nonce;
    }

    /**
     * random value Selected by the requesting node
     *
     * Generated from protobuf field <code>uint64 nonce = 1;</code>
     * @param int|string $var
     * @return $this
     */
    public function setNonce($var)
    {
        GPBUtil::checkUint64($var);
        $this->nonce = $var;

        return $this;
    }

    /**
     * The final authoritative hash, only to be sent by NodeA at the end of the handshake
     *
     * Generated from protobuf field <code>bytes hash1 = 2;</code>
     * @return string
     */
    public function getHash1()
    {
        return $this->hash1;
    }

    /**
     * The final authoritative hash, only to be sent by NodeA at the end of the handshake
     *
     * Generated from protobuf field <code>bytes hash1 = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setHash1($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash1 = $var;

        return $this;
    }

    /**
     * The intermediary hash (actually derived from hash1),
     * sent from NodeB to NodeA in response to the initial message.
     *
     * Generated from protobuf field <code>bytes hash2 = 3;</code>
     * @return string
     */
    public function getHash2()
    {
        return $this->hash2;
    }

    /**
     * The intermediary hash (actually derived from hash1),
     * sent from NodeB to NodeA in response to the initial message.
     *
     * Generated from protobuf field <code>bytes hash2 = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setHash2($var)
    {
        GPBUtil::checkString($var, False);
        $this->hash2 = $var;

        return $this;
    }

}

