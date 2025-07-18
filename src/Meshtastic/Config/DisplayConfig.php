<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Display Config
 *
 * Generated from protobuf message <code>meshtastic.Config.DisplayConfig</code>
 */
class DisplayConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Number of seconds the screen stays on after pressing the user button or receiving a message
     * 0 for default of one minute MAXUINT for always on
     *
     * Generated from protobuf field <code>uint32 screen_on_secs = 1;</code>
     */
    protected $screen_on_secs = 0;
    /**
     * How the GPS coordinates are formatted on the OLED screen.
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.GpsCoordinateFormat gps_format = 2;</code>
     */
    protected $gps_format = 0;
    /**
     * Automatically toggles to the next page on the screen like a carousel, based the specified interval in seconds.
     * Potentially useful for devices without user buttons.
     *
     * Generated from protobuf field <code>uint32 auto_screen_carousel_secs = 3;</code>
     */
    protected $auto_screen_carousel_secs = 0;
    /**
     * If this is set, the displayed compass will always point north. if unset, the old behaviour
     * (top of display is heading direction) is used.
     *
     * Generated from protobuf field <code>bool compass_north_top = 4;</code>
     */
    protected $compass_north_top = false;
    /**
     * Flip screen vertically, for cases that mount the screen upside down
     *
     * Generated from protobuf field <code>bool flip_screen = 5;</code>
     */
    protected $flip_screen = false;
    /**
     * Perferred display units
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.DisplayUnits units = 6;</code>
     */
    protected $units = 0;
    /**
     * Override auto-detect in screen
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.OledType oled = 7;</code>
     */
    protected $oled = 0;
    /**
     * Display Mode
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.DisplayMode displaymode = 8;</code>
     */
    protected $displaymode = 0;
    /**
     * Print first line in pseudo-bold? FALSE is original style, TRUE is bold
     *
     * Generated from protobuf field <code>bool heading_bold = 9;</code>
     */
    protected $heading_bold = false;
    /**
     * Should we wake the screen up on accelerometer detected motion or tap
     *
     * Generated from protobuf field <code>bool wake_on_tap_or_motion = 10;</code>
     */
    protected $wake_on_tap_or_motion = false;
    /**
     * Indicates how to rotate or invert the compass output to accurate display on the display.
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.CompassOrientation compass_orientation = 11;</code>
     */
    protected $compass_orientation = 0;
    /**
     * If false (default), the device will display the time in 24-hour format on screen.
     * If true, the device will display the time in 12-hour format on screen.
     *
     * Generated from protobuf field <code>bool use_12h_clock = 12;</code>
     */
    protected $use_12h_clock = false;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $screen_on_secs
     *           Number of seconds the screen stays on after pressing the user button or receiving a message
     *           0 for default of one minute MAXUINT for always on
     *     @type int $gps_format
     *           How the GPS coordinates are formatted on the OLED screen.
     *     @type int $auto_screen_carousel_secs
     *           Automatically toggles to the next page on the screen like a carousel, based the specified interval in seconds.
     *           Potentially useful for devices without user buttons.
     *     @type bool $compass_north_top
     *           If this is set, the displayed compass will always point north. if unset, the old behaviour
     *           (top of display is heading direction) is used.
     *     @type bool $flip_screen
     *           Flip screen vertically, for cases that mount the screen upside down
     *     @type int $units
     *           Perferred display units
     *     @type int $oled
     *           Override auto-detect in screen
     *     @type int $displaymode
     *           Display Mode
     *     @type bool $heading_bold
     *           Print first line in pseudo-bold? FALSE is original style, TRUE is bold
     *     @type bool $wake_on_tap_or_motion
     *           Should we wake the screen up on accelerometer detected motion or tap
     *     @type int $compass_orientation
     *           Indicates how to rotate or invert the compass output to accurate display on the display.
     *     @type bool $use_12h_clock
     *           If false (default), the device will display the time in 24-hour format on screen.
     *           If true, the device will display the time in 12-hour format on screen.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Number of seconds the screen stays on after pressing the user button or receiving a message
     * 0 for default of one minute MAXUINT for always on
     *
     * Generated from protobuf field <code>uint32 screen_on_secs = 1;</code>
     * @return int
     */
    public function getScreenOnSecs()
    {
        return $this->screen_on_secs;
    }

    /**
     * Number of seconds the screen stays on after pressing the user button or receiving a message
     * 0 for default of one minute MAXUINT for always on
     *
     * Generated from protobuf field <code>uint32 screen_on_secs = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setScreenOnSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->screen_on_secs = $var;

        return $this;
    }

    /**
     * How the GPS coordinates are formatted on the OLED screen.
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.GpsCoordinateFormat gps_format = 2;</code>
     * @return int
     */
    public function getGpsFormat()
    {
        return $this->gps_format;
    }

    /**
     * How the GPS coordinates are formatted on the OLED screen.
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.GpsCoordinateFormat gps_format = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setGpsFormat($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DisplayConfig\GpsCoordinateFormat::class);
        $this->gps_format = $var;

        return $this;
    }

    /**
     * Automatically toggles to the next page on the screen like a carousel, based the specified interval in seconds.
     * Potentially useful for devices without user buttons.
     *
     * Generated from protobuf field <code>uint32 auto_screen_carousel_secs = 3;</code>
     * @return int
     */
    public function getAutoScreenCarouselSecs()
    {
        return $this->auto_screen_carousel_secs;
    }

    /**
     * Automatically toggles to the next page on the screen like a carousel, based the specified interval in seconds.
     * Potentially useful for devices without user buttons.
     *
     * Generated from protobuf field <code>uint32 auto_screen_carousel_secs = 3;</code>
     * @param int $var
     * @return $this
     */
    public function setAutoScreenCarouselSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->auto_screen_carousel_secs = $var;

        return $this;
    }

    /**
     * If this is set, the displayed compass will always point north. if unset, the old behaviour
     * (top of display is heading direction) is used.
     *
     * Generated from protobuf field <code>bool compass_north_top = 4;</code>
     * @return bool
     */
    public function getCompassNorthTop()
    {
        return $this->compass_north_top;
    }

    /**
     * If this is set, the displayed compass will always point north. if unset, the old behaviour
     * (top of display is heading direction) is used.
     *
     * Generated from protobuf field <code>bool compass_north_top = 4;</code>
     * @param bool $var
     * @return $this
     */
    public function setCompassNorthTop($var)
    {
        GPBUtil::checkBool($var);
        $this->compass_north_top = $var;

        return $this;
    }

    /**
     * Flip screen vertically, for cases that mount the screen upside down
     *
     * Generated from protobuf field <code>bool flip_screen = 5;</code>
     * @return bool
     */
    public function getFlipScreen()
    {
        return $this->flip_screen;
    }

    /**
     * Flip screen vertically, for cases that mount the screen upside down
     *
     * Generated from protobuf field <code>bool flip_screen = 5;</code>
     * @param bool $var
     * @return $this
     */
    public function setFlipScreen($var)
    {
        GPBUtil::checkBool($var);
        $this->flip_screen = $var;

        return $this;
    }

    /**
     * Perferred display units
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.DisplayUnits units = 6;</code>
     * @return int
     */
    public function getUnits()
    {
        return $this->units;
    }

    /**
     * Perferred display units
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.DisplayUnits units = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setUnits($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DisplayConfig\DisplayUnits::class);
        $this->units = $var;

        return $this;
    }

    /**
     * Override auto-detect in screen
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.OledType oled = 7;</code>
     * @return int
     */
    public function getOled()
    {
        return $this->oled;
    }

    /**
     * Override auto-detect in screen
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.OledType oled = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setOled($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DisplayConfig\OledType::class);
        $this->oled = $var;

        return $this;
    }

    /**
     * Display Mode
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.DisplayMode displaymode = 8;</code>
     * @return int
     */
    public function getDisplaymode()
    {
        return $this->displaymode;
    }

    /**
     * Display Mode
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.DisplayMode displaymode = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setDisplaymode($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DisplayConfig\DisplayMode::class);
        $this->displaymode = $var;

        return $this;
    }

    /**
     * Print first line in pseudo-bold? FALSE is original style, TRUE is bold
     *
     * Generated from protobuf field <code>bool heading_bold = 9;</code>
     * @return bool
     */
    public function getHeadingBold()
    {
        return $this->heading_bold;
    }

    /**
     * Print first line in pseudo-bold? FALSE is original style, TRUE is bold
     *
     * Generated from protobuf field <code>bool heading_bold = 9;</code>
     * @param bool $var
     * @return $this
     */
    public function setHeadingBold($var)
    {
        GPBUtil::checkBool($var);
        $this->heading_bold = $var;

        return $this;
    }

    /**
     * Should we wake the screen up on accelerometer detected motion or tap
     *
     * Generated from protobuf field <code>bool wake_on_tap_or_motion = 10;</code>
     * @return bool
     */
    public function getWakeOnTapOrMotion()
    {
        return $this->wake_on_tap_or_motion;
    }

    /**
     * Should we wake the screen up on accelerometer detected motion or tap
     *
     * Generated from protobuf field <code>bool wake_on_tap_or_motion = 10;</code>
     * @param bool $var
     * @return $this
     */
    public function setWakeOnTapOrMotion($var)
    {
        GPBUtil::checkBool($var);
        $this->wake_on_tap_or_motion = $var;

        return $this;
    }

    /**
     * Indicates how to rotate or invert the compass output to accurate display on the display.
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.CompassOrientation compass_orientation = 11;</code>
     * @return int
     */
    public function getCompassOrientation()
    {
        return $this->compass_orientation;
    }

    /**
     * Indicates how to rotate or invert the compass output to accurate display on the display.
     *
     * Generated from protobuf field <code>.meshtastic.Config.DisplayConfig.CompassOrientation compass_orientation = 11;</code>
     * @param int $var
     * @return $this
     */
    public function setCompassOrientation($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\Config\DisplayConfig\CompassOrientation::class);
        $this->compass_orientation = $var;

        return $this;
    }

    /**
     * If false (default), the device will display the time in 24-hour format on screen.
     * If true, the device will display the time in 12-hour format on screen.
     *
     * Generated from protobuf field <code>bool use_12h_clock = 12;</code>
     * @return bool
     */
    public function getUse12HClock()
    {
        return $this->use_12h_clock;
    }

    /**
     * If false (default), the device will display the time in 24-hour format on screen.
     * If true, the device will display the time in 12-hour format on screen.
     *
     * Generated from protobuf field <code>bool use_12h_clock = 12;</code>
     * @param bool $var
     * @return $this
     */
    public function setUse12HClock($var)
    {
        GPBUtil::checkBool($var);
        $this->use_12h_clock = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(DisplayConfig::class, \Meshtastic\Config_DisplayConfig::class);

