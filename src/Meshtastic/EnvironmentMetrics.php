<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/telemetry.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * Weather station or other environmental metrics
 *
 * Generated from protobuf message <code>meshtastic.EnvironmentMetrics</code>
 */
class EnvironmentMetrics extends \Google\Protobuf\Internal\Message
{
    /**
     * Temperature measured
     *
     * Generated from protobuf field <code>float temperature = 1;</code>
     */
    protected $temperature = 0.0;
    /**
     * Relative humidity percent measured
     *
     * Generated from protobuf field <code>float relative_humidity = 2;</code>
     */
    protected $relative_humidity = 0.0;
    /**
     * Barometric pressure in hPA measured
     *
     * Generated from protobuf field <code>float barometric_pressure = 3;</code>
     */
    protected $barometric_pressure = 0.0;
    /**
     * Gas resistance in MOhm measured
     *
     * Generated from protobuf field <code>float gas_resistance = 4;</code>
     */
    protected $gas_resistance = 0.0;
    /**
     * Voltage measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *
     * Generated from protobuf field <code>float voltage = 5;</code>
     */
    protected $voltage = 0.0;
    /**
     * Current measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *
     * Generated from protobuf field <code>float current = 6;</code>
     */
    protected $current = 0.0;
    /**
     * 
     * relative scale IAQ value as measured by Bosch BME680 . value 0-500.
     * Belongs to Air Quality but is not particle but VOC measurement. Other VOC values can also be put in here.
     *
     * Generated from protobuf field <code>uint32 iaq = 7;</code>
     */
    protected $iaq = 0;
    /**
     * RCWL9620 Doppler Radar Distance Sensor, used for water level detection. Float value in mm.
     *
     * Generated from protobuf field <code>float distance = 8;</code>
     */
    protected $distance = 0.0;
    /**
     * VEML7700 high accuracy ambient light(Lux) digital 16-bit resolution sensor.
     *
     * Generated from protobuf field <code>float lux = 9;</code>
     */
    protected $lux = 0.0;
    /**
     * VEML7700 high accuracy white light(irradiance) not calibrated digital 16-bit resolution sensor.
     *
     * Generated from protobuf field <code>float white_lux = 10;</code>
     */
    protected $white_lux = 0.0;
    /**
     * Infrared lux
     *
     * Generated from protobuf field <code>float ir_lux = 11;</code>
     */
    protected $ir_lux = 0.0;
    /**
     * Ultraviolet lux
     *
     * Generated from protobuf field <code>float uv_lux = 12;</code>
     */
    protected $uv_lux = 0.0;
    /**
     * Wind direction in degrees
     * 0 degrees = North, 90 = East, etc...
     *
     * Generated from protobuf field <code>uint32 wind_direction = 13;</code>
     */
    protected $wind_direction = 0;
    /**
     * Wind speed in m/s
     *
     * Generated from protobuf field <code>float wind_speed = 14;</code>
     */
    protected $wind_speed = 0.0;
    /**
     * Weight in KG
     *
     * Generated from protobuf field <code>float weight = 15;</code>
     */
    protected $weight = 0.0;
    /**
     * Wind gust in m/s
     *
     * Generated from protobuf field <code>float wind_gust = 16;</code>
     */
    protected $wind_gust = 0.0;
    /**
     * Wind lull in m/s
     *
     * Generated from protobuf field <code>float wind_lull = 17;</code>
     */
    protected $wind_lull = 0.0;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type float $temperature
     *           Temperature measured
     *     @type float $relative_humidity
     *           Relative humidity percent measured
     *     @type float $barometric_pressure
     *           Barometric pressure in hPA measured
     *     @type float $gas_resistance
     *           Gas resistance in MOhm measured
     *     @type float $voltage
     *           Voltage measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *     @type float $current
     *           Current measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *     @type int $iaq
     *           
     *           relative scale IAQ value as measured by Bosch BME680 . value 0-500.
     *           Belongs to Air Quality but is not particle but VOC measurement. Other VOC values can also be put in here.
     *     @type float $distance
     *           RCWL9620 Doppler Radar Distance Sensor, used for water level detection. Float value in mm.
     *     @type float $lux
     *           VEML7700 high accuracy ambient light(Lux) digital 16-bit resolution sensor.
     *     @type float $white_lux
     *           VEML7700 high accuracy white light(irradiance) not calibrated digital 16-bit resolution sensor.
     *     @type float $ir_lux
     *           Infrared lux
     *     @type float $uv_lux
     *           Ultraviolet lux
     *     @type int $wind_direction
     *           Wind direction in degrees
     *           0 degrees = North, 90 = East, etc...
     *     @type float $wind_speed
     *           Wind speed in m/s
     *     @type float $weight
     *           Weight in KG
     *     @type float $wind_gust
     *           Wind gust in m/s
     *     @type float $wind_lull
     *           Wind lull in m/s
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Telemetry::initOnce();
        parent::__construct($data);
    }

    /**
     * Temperature measured
     *
     * Generated from protobuf field <code>float temperature = 1;</code>
     * @return float
     */
    public function getTemperature()
    {
        return $this->temperature;
    }

    /**
     * Temperature measured
     *
     * Generated from protobuf field <code>float temperature = 1;</code>
     * @param float $var
     * @return $this
     */
    public function setTemperature($var)
    {
        GPBUtil::checkFloat($var);
        $this->temperature = $var;

        return $this;
    }

    /**
     * Relative humidity percent measured
     *
     * Generated from protobuf field <code>float relative_humidity = 2;</code>
     * @return float
     */
    public function getRelativeHumidity()
    {
        return $this->relative_humidity;
    }

    /**
     * Relative humidity percent measured
     *
     * Generated from protobuf field <code>float relative_humidity = 2;</code>
     * @param float $var
     * @return $this
     */
    public function setRelativeHumidity($var)
    {
        GPBUtil::checkFloat($var);
        $this->relative_humidity = $var;

        return $this;
    }

    /**
     * Barometric pressure in hPA measured
     *
     * Generated from protobuf field <code>float barometric_pressure = 3;</code>
     * @return float
     */
    public function getBarometricPressure()
    {
        return $this->barometric_pressure;
    }

    /**
     * Barometric pressure in hPA measured
     *
     * Generated from protobuf field <code>float barometric_pressure = 3;</code>
     * @param float $var
     * @return $this
     */
    public function setBarometricPressure($var)
    {
        GPBUtil::checkFloat($var);
        $this->barometric_pressure = $var;

        return $this;
    }

    /**
     * Gas resistance in MOhm measured
     *
     * Generated from protobuf field <code>float gas_resistance = 4;</code>
     * @return float
     */
    public function getGasResistance()
    {
        return $this->gas_resistance;
    }

    /**
     * Gas resistance in MOhm measured
     *
     * Generated from protobuf field <code>float gas_resistance = 4;</code>
     * @param float $var
     * @return $this
     */
    public function setGasResistance($var)
    {
        GPBUtil::checkFloat($var);
        $this->gas_resistance = $var;

        return $this;
    }

    /**
     * Voltage measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *
     * Generated from protobuf field <code>float voltage = 5;</code>
     * @return float
     */
    public function getVoltage()
    {
        return $this->voltage;
    }

    /**
     * Voltage measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *
     * Generated from protobuf field <code>float voltage = 5;</code>
     * @param float $var
     * @return $this
     */
    public function setVoltage($var)
    {
        GPBUtil::checkFloat($var);
        $this->voltage = $var;

        return $this;
    }

    /**
     * Current measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *
     * Generated from protobuf field <code>float current = 6;</code>
     * @return float
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Current measured (To be depreciated in favor of PowerMetrics in Meshtastic 3.x)
     *
     * Generated from protobuf field <code>float current = 6;</code>
     * @param float $var
     * @return $this
     */
    public function setCurrent($var)
    {
        GPBUtil::checkFloat($var);
        $this->current = $var;

        return $this;
    }

    /**
     * 
     * relative scale IAQ value as measured by Bosch BME680 . value 0-500.
     * Belongs to Air Quality but is not particle but VOC measurement. Other VOC values can also be put in here.
     *
     * Generated from protobuf field <code>uint32 iaq = 7;</code>
     * @return int
     */
    public function getIaq()
    {
        return $this->iaq;
    }

    /**
     * 
     * relative scale IAQ value as measured by Bosch BME680 . value 0-500.
     * Belongs to Air Quality but is not particle but VOC measurement. Other VOC values can also be put in here.
     *
     * Generated from protobuf field <code>uint32 iaq = 7;</code>
     * @param int $var
     * @return $this
     */
    public function setIaq($var)
    {
        GPBUtil::checkUint32($var);
        $this->iaq = $var;

        return $this;
    }

    /**
     * RCWL9620 Doppler Radar Distance Sensor, used for water level detection. Float value in mm.
     *
     * Generated from protobuf field <code>float distance = 8;</code>
     * @return float
     */
    public function getDistance()
    {
        return $this->distance;
    }

    /**
     * RCWL9620 Doppler Radar Distance Sensor, used for water level detection. Float value in mm.
     *
     * Generated from protobuf field <code>float distance = 8;</code>
     * @param float $var
     * @return $this
     */
    public function setDistance($var)
    {
        GPBUtil::checkFloat($var);
        $this->distance = $var;

        return $this;
    }

    /**
     * VEML7700 high accuracy ambient light(Lux) digital 16-bit resolution sensor.
     *
     * Generated from protobuf field <code>float lux = 9;</code>
     * @return float
     */
    public function getLux()
    {
        return $this->lux;
    }

    /**
     * VEML7700 high accuracy ambient light(Lux) digital 16-bit resolution sensor.
     *
     * Generated from protobuf field <code>float lux = 9;</code>
     * @param float $var
     * @return $this
     */
    public function setLux($var)
    {
        GPBUtil::checkFloat($var);
        $this->lux = $var;

        return $this;
    }

    /**
     * VEML7700 high accuracy white light(irradiance) not calibrated digital 16-bit resolution sensor.
     *
     * Generated from protobuf field <code>float white_lux = 10;</code>
     * @return float
     */
    public function getWhiteLux()
    {
        return $this->white_lux;
    }

    /**
     * VEML7700 high accuracy white light(irradiance) not calibrated digital 16-bit resolution sensor.
     *
     * Generated from protobuf field <code>float white_lux = 10;</code>
     * @param float $var
     * @return $this
     */
    public function setWhiteLux($var)
    {
        GPBUtil::checkFloat($var);
        $this->white_lux = $var;

        return $this;
    }

    /**
     * Infrared lux
     *
     * Generated from protobuf field <code>float ir_lux = 11;</code>
     * @return float
     */
    public function getIrLux()
    {
        return $this->ir_lux;
    }

    /**
     * Infrared lux
     *
     * Generated from protobuf field <code>float ir_lux = 11;</code>
     * @param float $var
     * @return $this
     */
    public function setIrLux($var)
    {
        GPBUtil::checkFloat($var);
        $this->ir_lux = $var;

        return $this;
    }

    /**
     * Ultraviolet lux
     *
     * Generated from protobuf field <code>float uv_lux = 12;</code>
     * @return float
     */
    public function getUvLux()
    {
        return $this->uv_lux;
    }

    /**
     * Ultraviolet lux
     *
     * Generated from protobuf field <code>float uv_lux = 12;</code>
     * @param float $var
     * @return $this
     */
    public function setUvLux($var)
    {
        GPBUtil::checkFloat($var);
        $this->uv_lux = $var;

        return $this;
    }

    /**
     * Wind direction in degrees
     * 0 degrees = North, 90 = East, etc...
     *
     * Generated from protobuf field <code>uint32 wind_direction = 13;</code>
     * @return int
     */
    public function getWindDirection()
    {
        return $this->wind_direction;
    }

    /**
     * Wind direction in degrees
     * 0 degrees = North, 90 = East, etc...
     *
     * Generated from protobuf field <code>uint32 wind_direction = 13;</code>
     * @param int $var
     * @return $this
     */
    public function setWindDirection($var)
    {
        GPBUtil::checkUint32($var);
        $this->wind_direction = $var;

        return $this;
    }

    /**
     * Wind speed in m/s
     *
     * Generated from protobuf field <code>float wind_speed = 14;</code>
     * @return float
     */
    public function getWindSpeed()
    {
        return $this->wind_speed;
    }

    /**
     * Wind speed in m/s
     *
     * Generated from protobuf field <code>float wind_speed = 14;</code>
     * @param float $var
     * @return $this
     */
    public function setWindSpeed($var)
    {
        GPBUtil::checkFloat($var);
        $this->wind_speed = $var;

        return $this;
    }

    /**
     * Weight in KG
     *
     * Generated from protobuf field <code>float weight = 15;</code>
     * @return float
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Weight in KG
     *
     * Generated from protobuf field <code>float weight = 15;</code>
     * @param float $var
     * @return $this
     */
    public function setWeight($var)
    {
        GPBUtil::checkFloat($var);
        $this->weight = $var;

        return $this;
    }

    /**
     * Wind gust in m/s
     *
     * Generated from protobuf field <code>float wind_gust = 16;</code>
     * @return float
     */
    public function getWindGust()
    {
        return $this->wind_gust;
    }

    /**
     * Wind gust in m/s
     *
     * Generated from protobuf field <code>float wind_gust = 16;</code>
     * @param float $var
     * @return $this
     */
    public function setWindGust($var)
    {
        GPBUtil::checkFloat($var);
        $this->wind_gust = $var;

        return $this;
    }

    /**
     * Wind lull in m/s
     *
     * Generated from protobuf field <code>float wind_lull = 17;</code>
     * @return float
     */
    public function getWindLull()
    {
        return $this->wind_lull;
    }

    /**
     * Wind lull in m/s
     *
     * Generated from protobuf field <code>float wind_lull = 17;</code>
     * @param float $var
     * @return $this
     */
    public function setWindLull($var)
    {
        GPBUtil::checkFloat($var);
        $this->wind_lull = $var;

        return $this;
    }

}

