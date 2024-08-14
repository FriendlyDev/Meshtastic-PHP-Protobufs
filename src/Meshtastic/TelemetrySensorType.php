<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/telemetry.proto

namespace Meshtastic;

use UnexpectedValueException;

/**
 * Supported I2C Sensors for telemetry in Meshtastic
 *
 * Protobuf type <code>meshtastic.TelemetrySensorType</code>
 */
class TelemetrySensorType
{
    /**
     * No external telemetry sensor explicitly set
     *
     * Generated from protobuf enum <code>SENSOR_UNSET = 0;</code>
     */
    const SENSOR_UNSET = 0;
    /**
     * High accuracy temperature, pressure, humidity
     *
     * Generated from protobuf enum <code>BME280 = 1;</code>
     */
    const BME280 = 1;
    /**
     * High accuracy temperature, pressure, humidity, and air resistance
     *
     * Generated from protobuf enum <code>BME680 = 2;</code>
     */
    const BME680 = 2;
    /**
     * Very high accuracy temperature
     *
     * Generated from protobuf enum <code>MCP9808 = 3;</code>
     */
    const MCP9808 = 3;
    /**
     * Moderate accuracy current and voltage
     *
     * Generated from protobuf enum <code>INA260 = 4;</code>
     */
    const INA260 = 4;
    /**
     * Moderate accuracy current and voltage
     *
     * Generated from protobuf enum <code>INA219 = 5;</code>
     */
    const INA219 = 5;
    /**
     * High accuracy temperature and pressure
     *
     * Generated from protobuf enum <code>BMP280 = 6;</code>
     */
    const BMP280 = 6;
    /**
     * High accuracy temperature and humidity
     *
     * Generated from protobuf enum <code>SHTC3 = 7;</code>
     */
    const SHTC3 = 7;
    /**
     * High accuracy pressure
     *
     * Generated from protobuf enum <code>LPS22 = 8;</code>
     */
    const LPS22 = 8;
    /**
     * 3-Axis magnetic sensor
     *
     * Generated from protobuf enum <code>QMC6310 = 9;</code>
     */
    const QMC6310 = 9;
    /**
     * 6-Axis inertial measurement sensor
     *
     * Generated from protobuf enum <code>QMI8658 = 10;</code>
     */
    const QMI8658 = 10;
    /**
     * 3-Axis magnetic sensor
     *
     * Generated from protobuf enum <code>QMC5883L = 11;</code>
     */
    const QMC5883L = 11;
    /**
     * High accuracy temperature and humidity
     *
     * Generated from protobuf enum <code>SHT31 = 12;</code>
     */
    const SHT31 = 12;
    /**
     * PM2.5 air quality sensor
     *
     * Generated from protobuf enum <code>PMSA003I = 13;</code>
     */
    const PMSA003I = 13;
    /**
     * INA3221 3 Channel Voltage / Current Sensor
     *
     * Generated from protobuf enum <code>INA3221 = 14;</code>
     */
    const INA3221 = 14;
    /**
     * BMP085/BMP180 High accuracy temperature and pressure (older Version of BMP280)
     *
     * Generated from protobuf enum <code>BMP085 = 15;</code>
     */
    const BMP085 = 15;
    /**
     * RCWL-9620 Doppler Radar Distance Sensor, used for water level detection
     *
     * Generated from protobuf enum <code>RCWL9620 = 16;</code>
     */
    const RCWL9620 = 16;
    /**
     * Sensirion High accuracy temperature and humidity
     *
     * Generated from protobuf enum <code>SHT4X = 17;</code>
     */
    const SHT4X = 17;
    /**
     * VEML7700 high accuracy ambient light(Lux) digital 16-bit resolution sensor.
     *
     * Generated from protobuf enum <code>VEML7700 = 18;</code>
     */
    const VEML7700 = 18;
    /**
     * MLX90632 non-contact IR temperature sensor.
     *
     * Generated from protobuf enum <code>MLX90632 = 19;</code>
     */
    const MLX90632 = 19;
    /**
     * TI OPT3001 Ambient Light Sensor
     *
     * Generated from protobuf enum <code>OPT3001 = 20;</code>
     */
    const OPT3001 = 20;
    /**
     * Lite On LTR-390UV-01 UV Light Sensor
     *
     * Generated from protobuf enum <code>LTR390UV = 21;</code>
     */
    const LTR390UV = 21;
    /**
     * AMS TSL25911FN RGB Light Sensor
     *
     * Generated from protobuf enum <code>TSL25911FN = 22;</code>
     */
    const TSL25911FN = 22;
    /**
     * AHT10 Integrated temperature and humidity sensor
     *
     * Generated from protobuf enum <code>AHT10 = 23;</code>
     */
    const AHT10 = 23;
    /**
     * DFRobot Lark Weather station (temperature, humidity, pressure, wind speed and direction) 
     *
     * Generated from protobuf enum <code>DFROBOT_LARK = 24;</code>
     */
    const DFROBOT_LARK = 24;
    /**
     * NAU7802 Scale Chip or compatible
     *
     * Generated from protobuf enum <code>NAU7802 = 25;</code>
     */
    const NAU7802 = 25;
    /**
     * BMP3XX High accuracy temperature and pressure
     *
     * Generated from protobuf enum <code>BMP3XX = 26;</code>
     */
    const BMP3XX = 26;
    /**
     * ICM-20948 9-Axis digital motion processor
     *
     * Generated from protobuf enum <code>ICM20948 = 27;</code>
     */
    const ICM20948 = 27;
    /**
     * MAX17048 1S lipo battery sensor (voltage, state of charge, time to go)
     *
     * Generated from protobuf enum <code>MAX17048 = 28;</code>
     */
    const MAX17048 = 28;

    private static $valueToName = [
        self::SENSOR_UNSET => 'SENSOR_UNSET',
        self::BME280 => 'BME280',
        self::BME680 => 'BME680',
        self::MCP9808 => 'MCP9808',
        self::INA260 => 'INA260',
        self::INA219 => 'INA219',
        self::BMP280 => 'BMP280',
        self::SHTC3 => 'SHTC3',
        self::LPS22 => 'LPS22',
        self::QMC6310 => 'QMC6310',
        self::QMI8658 => 'QMI8658',
        self::QMC5883L => 'QMC5883L',
        self::SHT31 => 'SHT31',
        self::PMSA003I => 'PMSA003I',
        self::INA3221 => 'INA3221',
        self::BMP085 => 'BMP085',
        self::RCWL9620 => 'RCWL9620',
        self::SHT4X => 'SHT4X',
        self::VEML7700 => 'VEML7700',
        self::MLX90632 => 'MLX90632',
        self::OPT3001 => 'OPT3001',
        self::LTR390UV => 'LTR390UV',
        self::TSL25911FN => 'TSL25911FN',
        self::AHT10 => 'AHT10',
        self::DFROBOT_LARK => 'DFROBOT_LARK',
        self::NAU7802 => 'NAU7802',
        self::BMP3XX => 'BMP3XX',
        self::ICM20948 => 'ICM20948',
        self::MAX17048 => 'MAX17048',
    ];

    public static function name($value)
    {
        if (!isset(self::$valueToName[$value])) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no name defined for value %s', __CLASS__, $value));
        }
        return self::$valueToName[$value];
    }


    public static function value($name)
    {
        $const = __CLASS__ . '::' . strtoupper($name);
        if (!defined($const)) {
            throw new UnexpectedValueException(sprintf(
                    'Enum %s has no value defined for name %s', __CLASS__, $name));
        }
        return constant($const);
    }
}

