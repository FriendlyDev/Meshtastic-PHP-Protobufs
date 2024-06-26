<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/localonly.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Generated from protobuf message <code>meshtastic.LocalModuleConfig</code>
 */
class LocalModuleConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * The part of the config that is specific to the MQTT module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.MQTTConfig mqtt = 1;</code>
     */
    protected $mqtt = null;
    /**
     * The part of the config that is specific to the Serial module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.SerialConfig serial = 2;</code>
     */
    protected $serial = null;
    /**
     * The part of the config that is specific to the ExternalNotification module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.ExternalNotificationConfig external_notification = 3;</code>
     */
    protected $external_notification = null;
    /**
     * The part of the config that is specific to the Store & Forward module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.StoreForwardConfig store_forward = 4;</code>
     */
    protected $store_forward = null;
    /**
     * The part of the config that is specific to the RangeTest module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.RangeTestConfig range_test = 5;</code>
     */
    protected $range_test = null;
    /**
     * The part of the config that is specific to the Telemetry module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.TelemetryConfig telemetry = 6;</code>
     */
    protected $telemetry = null;
    /**
     * The part of the config that is specific to the Canned Message module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.CannedMessageConfig canned_message = 7;</code>
     */
    protected $canned_message = null;
    /**
     * The part of the config that is specific to the Audio module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.AudioConfig audio = 9;</code>
     */
    protected $audio = null;
    /**
     * The part of the config that is specific to the Remote Hardware module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.RemoteHardwareConfig remote_hardware = 10;</code>
     */
    protected $remote_hardware = null;
    /**
     * The part of the config that is specific to the Neighbor Info module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.NeighborInfoConfig neighbor_info = 11;</code>
     */
    protected $neighbor_info = null;
    /**
     * The part of the config that is specific to the Ambient Lighting module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.AmbientLightingConfig ambient_lighting = 12;</code>
     */
    protected $ambient_lighting = null;
    /**
     * The part of the config that is specific to the Detection Sensor module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.DetectionSensorConfig detection_sensor = 13;</code>
     */
    protected $detection_sensor = null;
    /**
     * Paxcounter Config
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.PaxcounterConfig paxcounter = 14;</code>
     */
    protected $paxcounter = null;
    /**
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 8;</code>
     */
    protected $version = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Meshtastic\ModuleConfig\MQTTConfig $mqtt
     *           The part of the config that is specific to the MQTT module
     *     @type \Meshtastic\ModuleConfig\SerialConfig $serial
     *           The part of the config that is specific to the Serial module
     *     @type \Meshtastic\ModuleConfig\ExternalNotificationConfig $external_notification
     *           The part of the config that is specific to the ExternalNotification module
     *     @type \Meshtastic\ModuleConfig\StoreForwardConfig $store_forward
     *           The part of the config that is specific to the Store & Forward module
     *     @type \Meshtastic\ModuleConfig\RangeTestConfig $range_test
     *           The part of the config that is specific to the RangeTest module
     *     @type \Meshtastic\ModuleConfig\TelemetryConfig $telemetry
     *           The part of the config that is specific to the Telemetry module
     *     @type \Meshtastic\ModuleConfig\CannedMessageConfig $canned_message
     *           The part of the config that is specific to the Canned Message module
     *     @type \Meshtastic\ModuleConfig\AudioConfig $audio
     *           The part of the config that is specific to the Audio module
     *     @type \Meshtastic\ModuleConfig\RemoteHardwareConfig $remote_hardware
     *           The part of the config that is specific to the Remote Hardware module
     *     @type \Meshtastic\ModuleConfig\NeighborInfoConfig $neighbor_info
     *           The part of the config that is specific to the Neighbor Info module
     *     @type \Meshtastic\ModuleConfig\AmbientLightingConfig $ambient_lighting
     *           The part of the config that is specific to the Ambient Lighting module
     *     @type \Meshtastic\ModuleConfig\DetectionSensorConfig $detection_sensor
     *           The part of the config that is specific to the Detection Sensor module
     *     @type \Meshtastic\ModuleConfig\PaxcounterConfig $paxcounter
     *           Paxcounter Config
     *     @type int $version
     *           A version integer used to invalidate old save files when we make
     *           incompatible changes This integer is set at build time and is private to
     *           NodeDB.cpp in the device code.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Localonly::initOnce();
        parent::__construct($data);
    }

    /**
     * The part of the config that is specific to the MQTT module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.MQTTConfig mqtt = 1;</code>
     * @return \Meshtastic\ModuleConfig\MQTTConfig|null
     */
    public function getMqtt()
    {
        return $this->mqtt;
    }

    public function hasMqtt()
    {
        return isset($this->mqtt);
    }

    public function clearMqtt()
    {
        unset($this->mqtt);
    }

    /**
     * The part of the config that is specific to the MQTT module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.MQTTConfig mqtt = 1;</code>
     * @param \Meshtastic\ModuleConfig\MQTTConfig $var
     * @return $this
     */
    public function setMqtt($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\MQTTConfig::class);
        $this->mqtt = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Serial module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.SerialConfig serial = 2;</code>
     * @return \Meshtastic\ModuleConfig\SerialConfig|null
     */
    public function getSerial()
    {
        return $this->serial;
    }

    public function hasSerial()
    {
        return isset($this->serial);
    }

    public function clearSerial()
    {
        unset($this->serial);
    }

    /**
     * The part of the config that is specific to the Serial module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.SerialConfig serial = 2;</code>
     * @param \Meshtastic\ModuleConfig\SerialConfig $var
     * @return $this
     */
    public function setSerial($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\SerialConfig::class);
        $this->serial = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the ExternalNotification module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.ExternalNotificationConfig external_notification = 3;</code>
     * @return \Meshtastic\ModuleConfig\ExternalNotificationConfig|null
     */
    public function getExternalNotification()
    {
        return $this->external_notification;
    }

    public function hasExternalNotification()
    {
        return isset($this->external_notification);
    }

    public function clearExternalNotification()
    {
        unset($this->external_notification);
    }

    /**
     * The part of the config that is specific to the ExternalNotification module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.ExternalNotificationConfig external_notification = 3;</code>
     * @param \Meshtastic\ModuleConfig\ExternalNotificationConfig $var
     * @return $this
     */
    public function setExternalNotification($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\ExternalNotificationConfig::class);
        $this->external_notification = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Store & Forward module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.StoreForwardConfig store_forward = 4;</code>
     * @return \Meshtastic\ModuleConfig\StoreForwardConfig|null
     */
    public function getStoreForward()
    {
        return $this->store_forward;
    }

    public function hasStoreForward()
    {
        return isset($this->store_forward);
    }

    public function clearStoreForward()
    {
        unset($this->store_forward);
    }

    /**
     * The part of the config that is specific to the Store & Forward module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.StoreForwardConfig store_forward = 4;</code>
     * @param \Meshtastic\ModuleConfig\StoreForwardConfig $var
     * @return $this
     */
    public function setStoreForward($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\StoreForwardConfig::class);
        $this->store_forward = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the RangeTest module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.RangeTestConfig range_test = 5;</code>
     * @return \Meshtastic\ModuleConfig\RangeTestConfig|null
     */
    public function getRangeTest()
    {
        return $this->range_test;
    }

    public function hasRangeTest()
    {
        return isset($this->range_test);
    }

    public function clearRangeTest()
    {
        unset($this->range_test);
    }

    /**
     * The part of the config that is specific to the RangeTest module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.RangeTestConfig range_test = 5;</code>
     * @param \Meshtastic\ModuleConfig\RangeTestConfig $var
     * @return $this
     */
    public function setRangeTest($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\RangeTestConfig::class);
        $this->range_test = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Telemetry module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.TelemetryConfig telemetry = 6;</code>
     * @return \Meshtastic\ModuleConfig\TelemetryConfig|null
     */
    public function getTelemetry()
    {
        return $this->telemetry;
    }

    public function hasTelemetry()
    {
        return isset($this->telemetry);
    }

    public function clearTelemetry()
    {
        unset($this->telemetry);
    }

    /**
     * The part of the config that is specific to the Telemetry module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.TelemetryConfig telemetry = 6;</code>
     * @param \Meshtastic\ModuleConfig\TelemetryConfig $var
     * @return $this
     */
    public function setTelemetry($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\TelemetryConfig::class);
        $this->telemetry = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Canned Message module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.CannedMessageConfig canned_message = 7;</code>
     * @return \Meshtastic\ModuleConfig\CannedMessageConfig|null
     */
    public function getCannedMessage()
    {
        return $this->canned_message;
    }

    public function hasCannedMessage()
    {
        return isset($this->canned_message);
    }

    public function clearCannedMessage()
    {
        unset($this->canned_message);
    }

    /**
     * The part of the config that is specific to the Canned Message module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.CannedMessageConfig canned_message = 7;</code>
     * @param \Meshtastic\ModuleConfig\CannedMessageConfig $var
     * @return $this
     */
    public function setCannedMessage($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\CannedMessageConfig::class);
        $this->canned_message = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Audio module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.AudioConfig audio = 9;</code>
     * @return \Meshtastic\ModuleConfig\AudioConfig|null
     */
    public function getAudio()
    {
        return $this->audio;
    }

    public function hasAudio()
    {
        return isset($this->audio);
    }

    public function clearAudio()
    {
        unset($this->audio);
    }

    /**
     * The part of the config that is specific to the Audio module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.AudioConfig audio = 9;</code>
     * @param \Meshtastic\ModuleConfig\AudioConfig $var
     * @return $this
     */
    public function setAudio($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\AudioConfig::class);
        $this->audio = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Remote Hardware module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.RemoteHardwareConfig remote_hardware = 10;</code>
     * @return \Meshtastic\ModuleConfig\RemoteHardwareConfig|null
     */
    public function getRemoteHardware()
    {
        return $this->remote_hardware;
    }

    public function hasRemoteHardware()
    {
        return isset($this->remote_hardware);
    }

    public function clearRemoteHardware()
    {
        unset($this->remote_hardware);
    }

    /**
     * The part of the config that is specific to the Remote Hardware module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.RemoteHardwareConfig remote_hardware = 10;</code>
     * @param \Meshtastic\ModuleConfig\RemoteHardwareConfig $var
     * @return $this
     */
    public function setRemoteHardware($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\RemoteHardwareConfig::class);
        $this->remote_hardware = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Neighbor Info module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.NeighborInfoConfig neighbor_info = 11;</code>
     * @return \Meshtastic\ModuleConfig\NeighborInfoConfig|null
     */
    public function getNeighborInfo()
    {
        return $this->neighbor_info;
    }

    public function hasNeighborInfo()
    {
        return isset($this->neighbor_info);
    }

    public function clearNeighborInfo()
    {
        unset($this->neighbor_info);
    }

    /**
     * The part of the config that is specific to the Neighbor Info module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.NeighborInfoConfig neighbor_info = 11;</code>
     * @param \Meshtastic\ModuleConfig\NeighborInfoConfig $var
     * @return $this
     */
    public function setNeighborInfo($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\NeighborInfoConfig::class);
        $this->neighbor_info = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Ambient Lighting module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.AmbientLightingConfig ambient_lighting = 12;</code>
     * @return \Meshtastic\ModuleConfig\AmbientLightingConfig|null
     */
    public function getAmbientLighting()
    {
        return $this->ambient_lighting;
    }

    public function hasAmbientLighting()
    {
        return isset($this->ambient_lighting);
    }

    public function clearAmbientLighting()
    {
        unset($this->ambient_lighting);
    }

    /**
     * The part of the config that is specific to the Ambient Lighting module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.AmbientLightingConfig ambient_lighting = 12;</code>
     * @param \Meshtastic\ModuleConfig\AmbientLightingConfig $var
     * @return $this
     */
    public function setAmbientLighting($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\AmbientLightingConfig::class);
        $this->ambient_lighting = $var;

        return $this;
    }

    /**
     * The part of the config that is specific to the Detection Sensor module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.DetectionSensorConfig detection_sensor = 13;</code>
     * @return \Meshtastic\ModuleConfig\DetectionSensorConfig|null
     */
    public function getDetectionSensor()
    {
        return $this->detection_sensor;
    }

    public function hasDetectionSensor()
    {
        return isset($this->detection_sensor);
    }

    public function clearDetectionSensor()
    {
        unset($this->detection_sensor);
    }

    /**
     * The part of the config that is specific to the Detection Sensor module
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.DetectionSensorConfig detection_sensor = 13;</code>
     * @param \Meshtastic\ModuleConfig\DetectionSensorConfig $var
     * @return $this
     */
    public function setDetectionSensor($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\DetectionSensorConfig::class);
        $this->detection_sensor = $var;

        return $this;
    }

    /**
     * Paxcounter Config
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.PaxcounterConfig paxcounter = 14;</code>
     * @return \Meshtastic\ModuleConfig\PaxcounterConfig|null
     */
    public function getPaxcounter()
    {
        return $this->paxcounter;
    }

    public function hasPaxcounter()
    {
        return isset($this->paxcounter);
    }

    public function clearPaxcounter()
    {
        unset($this->paxcounter);
    }

    /**
     * Paxcounter Config
     *
     * Generated from protobuf field <code>.meshtastic.ModuleConfig.PaxcounterConfig paxcounter = 14;</code>
     * @param \Meshtastic\ModuleConfig\PaxcounterConfig $var
     * @return $this
     */
    public function setPaxcounter($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\ModuleConfig\PaxcounterConfig::class);
        $this->paxcounter = $var;

        return $this;
    }

    /**
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 8;</code>
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * A version integer used to invalidate old save files when we make
     * incompatible changes This integer is set at build time and is private to
     * NodeDB.cpp in the device code.
     *
     * Generated from protobuf field <code>uint32 version = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setVersion($var)
    {
        GPBUtil::checkUint32($var);
        $this->version = $var;

        return $this;
    }

}

