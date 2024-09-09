<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Configuration
 *
 * Generated from protobuf message <code>meshtastic.Config.DeviceConfig</code>
 */
class DeviceConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Sets the role of node
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 1;</code>
     */
    protected $role = 0;
    /**
     * Disabling this will disable the SerialConsole by not initilizing the StreamAPI
     * Moved to SecurityConfig
     *
     * Generated from protobuf field <code>bool serial_enabled = 2 [deprecated = true];</code>
     * @deprecated
     */
    protected $serial_enabled = false;
    /**
     * For boards without a hard wired button, this is the pin number that will be used
     * Boards that have more than one button can swap the function with this one. defaults to BUTTON_PIN if defined.
     *
     * Generated from protobuf field <code>uint32 button_gpio = 4;</code>
     */
    protected $button_gpio = 0;
    /**
     * For boards without a PWM buzzer, this is the pin number that will be used
     * Defaults to PIN_BUZZER if defined.
     *
     * Generated from protobuf field <code>uint32 buzzer_gpio = 5;</code>
     */
    protected $buzzer_gpio = 0;
    /**
     * Sets the role of node
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.RebroadcastMode rebroadcast_mode = 6;</code>
     */
    protected $rebroadcast_mode = 0;
    /**
     * Send our nodeinfo this often
     * Defaults to 900 Seconds (15 minutes)
     *
     * Generated from protobuf field <code>uint32 node_info_broadcast_secs = 7;</code>
     */
    protected $node_info_broadcast_secs = 0;
    /**
     * Treat double tap interrupt on supported accelerometers as a button press if set to true
     *
     * Generated from protobuf field <code>bool double_tap_as_button_press = 8;</code>
     */
    protected $double_tap_as_button_press = false;
    /**
     * If true, device is considered to be "managed" by a mesh administrator
     * Clients should then limit available configuration and administrative options inside the user interface
     * Moved to SecurityConfig
     *
     * Generated from protobuf field <code>bool is_managed = 9 [deprecated = true];</code>
     * @deprecated
     */
    protected $is_managed = false;
    /**
     * Disables the triple-press of user button to enable or disable GPS
     *
     * Generated from protobuf field <code>bool disable_triple_click = 10;</code>
     */
    protected $disable_triple_click = false;
    /**
     * POSIX Timezone definition string from https://github.com/nayarsystems/posix_tz_db/blob/master/zones.csv.
     *
     * Generated from protobuf field <code>string tzdef = 11;</code>
     */
    protected $tzdef = '';
    /**
     * If true, disable the default blinking LED (LED_PIN) behavior on the device 
     *
     * Generated from protobuf field <code>bool led_heartbeat_disabled = 12;</code>
     */
    protected $led_heartbeat_disabled = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $role
     *           Sets the role of node
     *     @type bool $serial_enabled
     *           Disabling this will disable the SerialConsole by not initilizing the StreamAPI
     *           Moved to SecurityConfig
     *     @type int $button_gpio
     *           For boards without a hard wired button, this is the pin number that will be used
     *           Boards that have more than one button can swap the function with this one. defaults to BUTTON_PIN if defined.
     *     @type int $buzzer_gpio
     *           For boards without a PWM buzzer, this is the pin number that will be used
     *           Defaults to PIN_BUZZER if defined.
     *     @type int $rebroadcast_mode
     *           Sets the role of node
     *     @type int $node_info_broadcast_secs
     *           Send our nodeinfo this often
     *           Defaults to 900 Seconds (15 minutes)
     *     @type bool $double_tap_as_button_press
     *           Treat double tap interrupt on supported accelerometers as a button press if set to true
     *     @type bool $is_managed
     *           If true, device is considered to be "managed" by a mesh administrator
     *           Clients should then limit available configuration and administrative options inside the user interface
     *           Moved to SecurityConfig
     *     @type bool $disable_triple_click
     *           Disables the triple-press of user button to enable or disable GPS
     *     @type string $tzdef
     *           POSIX Timezone definition string from https://github.com/nayarsystems/posix_tz_db/blob/master/zones.csv.
     *     @type bool $led_heartbeat_disabled
     *           If true, disable the default blinking LED (LED_PIN) behavior on the device 
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Sets the role of node
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 1;</code>
     * @return int
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets the role of node
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.Role role = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setRole($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DeviceConfig\Role::class);
        $this->role = $var;

        return $this;
    }

    /**
     * Disabling this will disable the SerialConsole by not initilizing the StreamAPI
     * Moved to SecurityConfig
     *
     * Generated from protobuf field <code>bool serial_enabled = 2 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getSerialEnabled()
    {
        @trigger_error('serial_enabled is deprecated.', E_USER_DEPRECATED);
        return $this->serial_enabled;
    }

    /**
     * Disabling this will disable the SerialConsole by not initilizing the StreamAPI
     * Moved to SecurityConfig
     *
     * Generated from protobuf field <code>bool serial_enabled = 2 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setSerialEnabled($var)
    {
        @trigger_error('serial_enabled is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->serial_enabled = $var;

        return $this;
    }

    /**
     * For boards without a hard wired button, this is the pin number that will be used
     * Boards that have more than one button can swap the function with this one. defaults to BUTTON_PIN if defined.
     *
     * Generated from protobuf field <code>uint32 button_gpio = 4;</code>
     * @return int
     */
    public function getButtonGpio()
    {
        return $this->button_gpio;
    }

    /**
     * For boards without a hard wired button, this is the pin number that will be used
     * Boards that have more than one button can swap the function with this one. defaults to BUTTON_PIN if defined.
     *
     * Generated from protobuf field <code>uint32 button_gpio = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setButtonGpio($var)
    {
        GPBUtil::checkUint32($var);
        $this->button_gpio = $var;

        return $this;
    }

    /**
     * For boards without a PWM buzzer, this is the pin number that will be used
     * Defaults to PIN_BUZZER if defined.
     *
     * Generated from protobuf field <code>uint32 buzzer_gpio = 5;</code>
     * @return int
     */
    public function getBuzzerGpio()
    {
        return $this->buzzer_gpio;
    }

    /**
     * For boards without a PWM buzzer, this is the pin number that will be used
     * Defaults to PIN_BUZZER if defined.
     *
     * Generated from protobuf field <code>uint32 buzzer_gpio = 5;</code>
     * @param int $var
     * @return $this
     */
    public function setBuzzerGpio($var)
    {
        GPBUtil::checkUint32($var);
        $this->buzzer_gpio = $var;

        return $this;
    }

    /**
     * Sets the role of node
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.RebroadcastMode rebroadcast_mode = 6;</code>
     * @return int
     */
    public function getRebroadcastMode()
    {
        return $this->rebroadcast_mode;
    }

    /**
     * Sets the role of node
     *
     * Generated from protobuf field <code>.meshtastic.Config.DeviceConfig.RebroadcastMode rebroadcast_mode = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setRebroadcastMode($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DeviceConfig\RebroadcastMode::class);
        $this->rebroadcast_mode = $var;

        return $this;
    }

    /**
     * Send our nodeinfo this often
     * Defaults to 900 Seconds (15 minutes)
     *
     * Generated from protobuf field <code>uint32 node_info_broadcast_secs = 7;</code>
     * @return int
     */
    public function getNodeInfoBroadcastSecs()
    {
        return $this->node_info_broadcast_secs;
    }

    /**
     * Send our nodeinfo this often
     * Defaults to 900 Seconds (15 minutes)
     *
     * Generated from protobuf field <code>uint32 node_info_broadcast_secs = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setNodeInfoBroadcastSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->node_info_broadcast_secs = $var;

        return $this;
    }

    /**
     * Treat double tap interrupt on supported accelerometers as a button press if set to true
     *
     * Generated from protobuf field <code>bool double_tap_as_button_press = 8;</code>
     * @return bool
     */
    public function getDoubleTapAsButtonPress()
    {
        return $this->double_tap_as_button_press;
    }

    /**
     * Treat double tap interrupt on supported accelerometers as a button press if set to true
     *
     * Generated from protobuf field <code>bool double_tap_as_button_press = 8;</code>
     * @param bool $var
     * @return $this
     */
    public function setDoubleTapAsButtonPress($var)
    {
        GPBUtil::checkBool($var);
        $this->double_tap_as_button_press = $var;

        return $this;
    }

    /**
     * If true, device is considered to be "managed" by a mesh administrator
     * Clients should then limit available configuration and administrative options inside the user interface
     * Moved to SecurityConfig
     *
     * Generated from protobuf field <code>bool is_managed = 9 [deprecated = true];</code>
     * @return bool
     * @deprecated
     */
    public function getIsManaged()
    {
        @trigger_error('is_managed is deprecated.', E_USER_DEPRECATED);
        return $this->is_managed;
    }

    /**
     * If true, device is considered to be "managed" by a mesh administrator
     * Clients should then limit available configuration and administrative options inside the user interface
     * Moved to SecurityConfig
     *
     * Generated from protobuf field <code>bool is_managed = 9 [deprecated = true];</code>
     * @param bool $var
     * @return $this
     * @deprecated
     */
    public function setIsManaged($var)
    {
        @trigger_error('is_managed is deprecated.', E_USER_DEPRECATED);
        GPBUtil::checkBool($var);
        $this->is_managed = $var;

        return $this;
    }

    /**
     * Disables the triple-press of user button to enable or disable GPS
     *
     * Generated from protobuf field <code>bool disable_triple_click = 10;</code>
     * @return bool
     */
    public function getDisableTripleClick()
    {
        return $this->disable_triple_click;
    }

    /**
     * Disables the triple-press of user button to enable or disable GPS
     *
     * Generated from protobuf field <code>bool disable_triple_click = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setDisableTripleClick($var)
    {
        GPBUtil::checkBool($var);
        $this->disable_triple_click = $var;

        return $this;
    }

    /**
     * POSIX Timezone definition string from https://github.com/nayarsystems/posix_tz_db/blob/master/zones.csv.
     *
     * Generated from protobuf field <code>string tzdef = 11;</code>
     * @return string
     */
    public function getTzdef()
    {
        return $this->tzdef;
    }

    /**
     * POSIX Timezone definition string from https://github.com/nayarsystems/posix_tz_db/blob/master/zones.csv.
     *
     * Generated from protobuf field <code>string tzdef = 11;</code>
     * @param string $var
     * @return $this
     */
    public function setTzdef($var)
    {
        GPBUtil::checkString($var, True);
        $this->tzdef = $var;

        return $this;
    }

    /**
     * If true, disable the default blinking LED (LED_PIN) behavior on the device 
     *
     * Generated from protobuf field <code>bool led_heartbeat_disabled = 12;</code>
     * @return bool
     */
    public function getLedHeartbeatDisabled()
    {
        return $this->led_heartbeat_disabled;
    }

    /**
     * If true, disable the default blinking LED (LED_PIN) behavior on the device 
     *
     * Generated from protobuf field <code>bool led_heartbeat_disabled = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setLedHeartbeatDisabled($var)
    {
        GPBUtil::checkBool($var);
        $this->led_heartbeat_disabled = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DeviceConfig::class, \Meshtastic\Config_DeviceConfig::class);

