<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Power Config\
 * See [Power Config](/docs/settings/config/power) for additional power config details.
 *
 * Generated from protobuf message <code>meshtastic.Config.PowerConfig</code>
 */
class PowerConfig extends \Google\Protobuf\Internal\Message
{
    /**
     * Description: Will sleep everything as much as possible, for the tracker and sensor role this will also include the lora radio.
     * Don't use this setting if you want to use your device with the phone apps or are using a device without a user button.
     * Technical Details: Works for ESP32 devices and NRF52 devices in the Sensor or Tracker roles
     *
     * Generated from protobuf field <code>bool is_power_saving = 1;</code>
     */
    protected $is_power_saving = false;
    /**
     *  Description: If non-zero, the device will fully power off this many seconds after external power is removed.
     *
     * Generated from protobuf field <code>uint32 on_battery_shutdown_after_secs = 2;</code>
     */
    protected $on_battery_shutdown_after_secs = 0;
    /**
     * Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     * Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     * https://meshtastic.org/docs/configuration/radio/power/#adc-multiplier-override
     * Should be set to floating point value between 2 and 6
     *
     * Generated from protobuf field <code>float adc_multiplier_override = 3;</code>
     */
    protected $adc_multiplier_override = 0.0;
    /**
     *  Description: The number of seconds for to wait before turning off BLE in No Bluetooth states
     *  Technical Details: ESP32 Only 0 for default of 1 minute
     *
     * Generated from protobuf field <code>uint32 wait_bluetooth_secs = 4;</code>
     */
    protected $wait_bluetooth_secs = 0;
    /**
     * Super Deep Sleep Seconds
     * While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     * for this value (default 1 year) or a button press
     * 0 for default of one year
     *
     * Generated from protobuf field <code>uint32 sds_secs = 6;</code>
     */
    protected $sds_secs = 0;
    /**
     * Description: In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     * Technical Details: ESP32 Only 0 for default of 300
     *
     * Generated from protobuf field <code>uint32 ls_secs = 7;</code>
     */
    protected $ls_secs = 0;
    /**
     * Description: While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     * Technical Details: ESP32 Only 0 for default of 10 seconds
     *
     * Generated from protobuf field <code>uint32 min_wake_secs = 8;</code>
     */
    protected $min_wake_secs = 0;
    /**
     * I2C address of INA_2XX to use for reading device battery voltage
     *
     * Generated from protobuf field <code>uint32 device_battery_ina_address = 9;</code>
     */
    protected $device_battery_ina_address = 0;
    /**
     * If non-zero, we want powermon log outputs.  With the particular (bitfield) sources enabled.
     * Note: we picked an ID of 32 so that lower more efficient IDs can be used for more frequently used options.
     *
     * Generated from protobuf field <code>uint64 powermon_enables = 32;</code>
     */
    protected $powermon_enables = 0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type bool $is_power_saving
     *           Description: Will sleep everything as much as possible, for the tracker and sensor role this will also include the lora radio.
     *           Don't use this setting if you want to use your device with the phone apps or are using a device without a user button.
     *           Technical Details: Works for ESP32 devices and NRF52 devices in the Sensor or Tracker roles
     *     @type int $on_battery_shutdown_after_secs
     *            Description: If non-zero, the device will fully power off this many seconds after external power is removed.
     *     @type float $adc_multiplier_override
     *           Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     *           Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     *           https://meshtastic.org/docs/configuration/radio/power/#adc-multiplier-override
     *           Should be set to floating point value between 2 and 6
     *     @type int $wait_bluetooth_secs
     *            Description: The number of seconds for to wait before turning off BLE in No Bluetooth states
     *            Technical Details: ESP32 Only 0 for default of 1 minute
     *     @type int $sds_secs
     *           Super Deep Sleep Seconds
     *           While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     *           for this value (default 1 year) or a button press
     *           0 for default of one year
     *     @type int $ls_secs
     *           Description: In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     *           Technical Details: ESP32 Only 0 for default of 300
     *     @type int $min_wake_secs
     *           Description: While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     *           Technical Details: ESP32 Only 0 for default of 10 seconds
     *     @type int $device_battery_ina_address
     *           I2C address of INA_2XX to use for reading device battery voltage
     *     @type int|string $powermon_enables
     *           If non-zero, we want powermon log outputs.  With the particular (bitfield) sources enabled.
     *           Note: we picked an ID of 32 so that lower more efficient IDs can be used for more frequently used options.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Config::initOnce();
        parent::__construct($data);
    }

    /**
     * Description: Will sleep everything as much as possible, for the tracker and sensor role this will also include the lora radio.
     * Don't use this setting if you want to use your device with the phone apps or are using a device without a user button.
     * Technical Details: Works for ESP32 devices and NRF52 devices in the Sensor or Tracker roles
     *
     * Generated from protobuf field <code>bool is_power_saving = 1;</code>
     * @return bool
     */
    public function getIsPowerSaving()
    {
        return $this->is_power_saving;
    }

    /**
     * Description: Will sleep everything as much as possible, for the tracker and sensor role this will also include the lora radio.
     * Don't use this setting if you want to use your device with the phone apps or are using a device without a user button.
     * Technical Details: Works for ESP32 devices and NRF52 devices in the Sensor or Tracker roles
     *
     * Generated from protobuf field <code>bool is_power_saving = 1;</code>
     * @param bool $var
     * @return $this
     */
    public function setIsPowerSaving($var)
    {
        GPBUtil::checkBool($var);
        $this->is_power_saving = $var;

        return $this;
    }

    /**
     *  Description: If non-zero, the device will fully power off this many seconds after external power is removed.
     *
     * Generated from protobuf field <code>uint32 on_battery_shutdown_after_secs = 2;</code>
     * @return int
     */
    public function getOnBatteryShutdownAfterSecs()
    {
        return $this->on_battery_shutdown_after_secs;
    }

    /**
     *  Description: If non-zero, the device will fully power off this many seconds after external power is removed.
     *
     * Generated from protobuf field <code>uint32 on_battery_shutdown_after_secs = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOnBatteryShutdownAfterSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->on_battery_shutdown_after_secs = $var;

        return $this;
    }

    /**
     * Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     * Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     * https://meshtastic.org/docs/configuration/radio/power/#adc-multiplier-override
     * Should be set to floating point value between 2 and 6
     *
     * Generated from protobuf field <code>float adc_multiplier_override = 3;</code>
     * @return float
     */
    public function getAdcMultiplierOverride()
    {
        return $this->adc_multiplier_override;
    }

    /**
     * Ratio of voltage divider for battery pin eg. 3.20 (R1=100k, R2=220k)
     * Overrides the ADC_MULTIPLIER defined in variant for battery voltage calculation.
     * https://meshtastic.org/docs/configuration/radio/power/#adc-multiplier-override
     * Should be set to floating point value between 2 and 6
     *
     * Generated from protobuf field <code>float adc_multiplier_override = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setAdcMultiplierOverride($var)
    {
        GPBUtil::checkFloat($var);
        $this->adc_multiplier_override = $var;

        return $this;
    }

    /**
     *  Description: The number of seconds for to wait before turning off BLE in No Bluetooth states
     *  Technical Details: ESP32 Only 0 for default of 1 minute
     *
     * Generated from protobuf field <code>uint32 wait_bluetooth_secs = 4;</code>
     * @return int
     */
    public function getWaitBluetoothSecs()
    {
        return $this->wait_bluetooth_secs;
    }

    /**
     *  Description: The number of seconds for to wait before turning off BLE in No Bluetooth states
     *  Technical Details: ESP32 Only 0 for default of 1 minute
     *
     * Generated from protobuf field <code>uint32 wait_bluetooth_secs = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setWaitBluetoothSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->wait_bluetooth_secs = $var;

        return $this;
    }

    /**
     * Super Deep Sleep Seconds
     * While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     * for this value (default 1 year) or a button press
     * 0 for default of one year
     *
     * Generated from protobuf field <code>uint32 sds_secs = 6;</code>
     * @return int
     */
    public function getSdsSecs()
    {
        return $this->sds_secs;
    }

    /**
     * Super Deep Sleep Seconds
     * While in Light Sleep if mesh_sds_timeout_secs is exceeded we will lower into super deep sleep
     * for this value (default 1 year) or a button press
     * 0 for default of one year
     *
     * Generated from protobuf field <code>uint32 sds_secs = 6;</code>
     * @param int $var
     * @return $this
     */
    public function setSdsSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->sds_secs = $var;

        return $this;
    }

    /**
     * Description: In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     * Technical Details: ESP32 Only 0 for default of 300
     *
     * Generated from protobuf field <code>uint32 ls_secs = 7;</code>
     * @return int
     */
    public function getLsSecs()
    {
        return $this->ls_secs;
    }

    /**
     * Description: In light sleep the CPU is suspended, LoRa radio is on, BLE is off an GPS is on
     * Technical Details: ESP32 Only 0 for default of 300
     *
     * Generated from protobuf field <code>uint32 ls_secs = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setLsSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->ls_secs = $var;

        return $this;
    }

    /**
     * Description: While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     * Technical Details: ESP32 Only 0 for default of 10 seconds
     *
     * Generated from protobuf field <code>uint32 min_wake_secs = 8;</code>
     * @return int
     */
    public function getMinWakeSecs()
    {
        return $this->min_wake_secs;
    }

    /**
     * Description: While in light sleep when we receive packets on the LoRa radio we will wake and handle them and stay awake in no BLE mode for this value
     * Technical Details: ESP32 Only 0 for default of 10 seconds
     *
     * Generated from protobuf field <code>uint32 min_wake_secs = 8;</code>
     * @param int $var
     * @return $this
     */
    public function setMinWakeSecs($var)
    {
        GPBUtil::checkUint32($var);
        $this->min_wake_secs = $var;

        return $this;
    }

    /**
     * I2C address of INA_2XX to use for reading device battery voltage
     *
     * Generated from protobuf field <code>uint32 device_battery_ina_address = 9;</code>
     * @return int
     */
    public function getDeviceBatteryInaAddress()
    {
        return $this->device_battery_ina_address;
    }

    /**
     * I2C address of INA_2XX to use for reading device battery voltage
     *
     * Generated from protobuf field <code>uint32 device_battery_ina_address = 9;</code>
     * @param int $var
     * @return $this
     */
    public function setDeviceBatteryInaAddress($var)
    {
        GPBUtil::checkUint32($var);
        $this->device_battery_ina_address = $var;

        return $this;
    }

    /**
     * If non-zero, we want powermon log outputs.  With the particular (bitfield) sources enabled.
     * Note: we picked an ID of 32 so that lower more efficient IDs can be used for more frequently used options.
     *
     * Generated from protobuf field <code>uint64 powermon_enables = 32;</code>
     * @return int|string
     */
    public function getPowermonEnables()
    {
        return $this->powermon_enables;
    }

    /**
     * If non-zero, we want powermon log outputs.  With the particular (bitfield) sources enabled.
     * Note: we picked an ID of 32 so that lower more efficient IDs can be used for more frequently used options.
     *
     * Generated from protobuf field <code>uint64 powermon_enables = 32;</code>
     * @param int|string $var
     * @return $this
     */
    public function setPowermonEnables($var)
    {
        GPBUtil::checkUint64($var);
        $this->powermon_enables = $var;

        return $this;
    }

}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(PowerConfig::class, \Meshtastic\Config_PowerConfig::class);

