<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/telemetry.proto

namespace GPBMetadata\Meshtastic;

class Telemetry
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�
meshtastic/telemetry.proto
meshtastic"�
DeviceMetrics
battery_level (
voltage (
channel_utilization (
air_util_tx (
uptime_seconds ("�
EnvironmentMetrics
temperature (
relative_humidity (
barometric_pressure (
gas_resistance (
voltage (
current (
iaq (
distance ("�
PowerMetrics
ch1_voltage (
ch1_current (
ch2_voltage (
ch2_current (
ch3_voltage (
ch3_current ("�
AirQualityMetrics
pm10_standard (
pm25_standard (
pm100_standard (
pm10_environmental (
pm25_environmental (
pm100_environmental (
particles_03um (
particles_05um (
particles_10um	 (
particles_25um
 (
particles_50um (
particles_100um ("�
	Telemetry
time (3
device_metrics (2.meshtastic.DeviceMetricsH =
environment_metrics (2.meshtastic.EnvironmentMetricsH <
air_quality_metrics (2.meshtastic.AirQualityMetricsH 1
power_metrics (2.meshtastic.PowerMetricsH B	
variant*�
TelemetrySensorType
SENSOR_UNSET 

BME280

BME680
MCP9808

INA260

INA219

BMP280	
SHTC3	
LPS22
QMC6310	
QMI8658

QMC5883L	
SHT31
PMSA003I
INA3221

BMP085
RCWL9620	
SHT4XBd
com.geeksville.meshBTelemetryProtosZ"github.com/meshtastic/go/generated�Meshtastic.Protobufs� bproto3'
        , true);

        static::$is_initialized = true;
    }
}

