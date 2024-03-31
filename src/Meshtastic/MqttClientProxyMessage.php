<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This message will be proxied over the PhoneAPI for the client to deliver to the MQTT server
 *
 * Generated from protobuf message <code>meshtastic.MqttClientProxyMessage</code>
 */
class MqttClientProxyMessage extends \Google\Protobuf\Internal\Message
{
    /**
     * The MQTT topic this message will be sent /received on
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     */
    protected $topic = '';
    /**
     * Whether the message should be retained (or not)
     *
     * Generated from protobuf field <code>bool retained = 4;</code>
     */
    protected $retained = false;
    protected $payload_variant;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $topic
     *           The MQTT topic this message will be sent /received on
     *     @type string $data
     *           Bytes
     *     @type string $text
     *           Text
     *     @type bool $retained
     *           Whether the message should be retained (or not)
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * The MQTT topic this message will be sent /received on
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @return string
     */
    public function getTopic()
    {
        return $this->topic;
    }

    /**
     * The MQTT topic this message will be sent /received on
     *
     * Generated from protobuf field <code>string topic = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setTopic($var)
    {
        GPBUtil::checkString($var, True);
        $this->topic = $var;

        return $this;
    }

    /**
     * Bytes
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @return string
     */
    public function getData()
    {
        return $this->readOneof(2);
    }

    public function hasData()
    {
        return $this->hasOneof(2);
    }

    /**
     * Bytes
     *
     * Generated from protobuf field <code>bytes data = 2;</code>
     * @param string $var
     * @return $this
     */
    public function setData($var)
    {
        GPBUtil::checkString($var, False);
        $this->writeOneof(2, $var);

        return $this;
    }

    /**
     * Text
     *
     * Generated from protobuf field <code>string text = 3;</code>
     * @return string
     */
    public function getText()
    {
        return $this->readOneof(3);
    }

    public function hasText()
    {
        return $this->hasOneof(3);
    }

    /**
     * Text
     *
     * Generated from protobuf field <code>string text = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setText($var)
    {
        GPBUtil::checkString($var, True);
        $this->writeOneof(3, $var);

        return $this;
    }

    /**
     * Whether the message should be retained (or not)
     *
     * Generated from protobuf field <code>bool retained = 4;</code>
     * @return bool
     */
    public function getRetained()
    {
        return $this->retained;
    }

    /**
     * Whether the message should be retained (or not)
     *
     * Generated from protobuf field <code>bool retained = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setRetained($var)
    {
        GPBUtil::checkBool($var);
        $this->retained = $var;

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

