<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Debug output from the device.
 * To minimize the size of records inside the device code, if a time/source/level is not set
 * on the message it is assumed to be a continuation of the previously sent message.
 * This allows the device code to use fixed maxlen 64 byte strings for messages,
 * and then extend as needed by emitting multiple records.
 *
 * Generated from protobuf message <code>meshtastic.LogRecord</code>
 */
class LogRecord extends \Google\Protobuf\Internal\Message
{
    /**
     * Log levels, chosen to match python logging conventions.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     */
    protected $message = '';
    /**
     * Seconds since 1970 - or 0 for unknown/unset
     *
     * Generated from protobuf field <code>fixed32 time = 2;</code>
     */
    protected $time = 0;
    /**
     * Usually based on thread name - if known
     *
     * Generated from protobuf field <code>string source = 3;</code>
     */
    protected $source = '';
    /**
     * Not yet set
     *
     * Generated from protobuf field <code>.meshtastic.LogRecord.Level level = 4;</code>
     */
    protected $level = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type string $message
     *           Log levels, chosen to match python logging conventions.
     *     @type int $time
     *           Seconds since 1970 - or 0 for unknown/unset
     *     @type string $source
     *           Usually based on thread name - if known
     *     @type int $level
     *           Not yet set
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        parent::__construct($data);
    }

    /**
     * Log levels, chosen to match python logging conventions.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Log levels, chosen to match python logging conventions.
     *
     * Generated from protobuf field <code>string message = 1;</code>
     * @param string $var
     * @return $this
     */
    public function setMessage($var)
    {
        GPBUtil::checkString($var, True);
        $this->message = $var;

        return $this;
    }

    /**
     * Seconds since 1970 - or 0 for unknown/unset
     *
     * Generated from protobuf field <code>fixed32 time = 2;</code>
     * @return int
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Seconds since 1970 - or 0 for unknown/unset
     *
     * Generated from protobuf field <code>fixed32 time = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setTime($var)
    {
        GPBUtil::checkUint32($var);
        $this->time = $var;

        return $this;
    }

    /**
     * Usually based on thread name - if known
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @return string
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Usually based on thread name - if known
     *
     * Generated from protobuf field <code>string source = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setSource($var)
    {
        GPBUtil::checkString($var, True);
        $this->source = $var;

        return $this;
    }

    /**
     * Not yet set
     *
     * Generated from protobuf field <code>.meshtastic.LogRecord.Level level = 4;</code>
     * @return int
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Not yet set
     *
     * Generated from protobuf field <code>.meshtastic.LogRecord.Level level = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setLevel($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\LogRecord\Level::class);
        $this->level = $var;

        return $this;
    }

}

