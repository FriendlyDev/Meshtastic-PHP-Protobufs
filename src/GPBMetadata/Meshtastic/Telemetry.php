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

meshtastic/telemetry.proto
meshtastic"σ
DeviceMetrics
battery_level (H 
voltage (H 
channel_utilization (H
air_util_tx (H
uptime_seconds (HB
_battery_levelB

_voltageB
_channel_utilizationB
_air_util_txB
_uptime_seconds" 
EnvironmentMetrics
temperature (H 
relative_humidity (H 
barometric_pressure (H
gas_resistance (H
voltage (H
current (H
iaq (H
distance (H
lux	 (H
	white_lux
 (H	
ir_lux (H

uv_lux (H
wind_direction (H

wind_speed (H
weight (H
	wind_gust (H
	wind_lull (H
	radiation (H
rainfall_1h (H
rainfall_24h (HB
_temperatureB
_relative_humidityB
_barometric_pressureB
_gas_resistanceB

_voltageB

_currentB
_iaqB
	_distanceB
_luxB

_white_luxB	
_ir_luxB	
_uv_luxB
_wind_directionB
_wind_speedB	
_weightB

_wind_gustB

_wind_lullB

_radiationB
_rainfall_1hB
_rainfall_24h"
PowerMetrics
ch1_voltage (H 
ch1_current (H
ch2_voltage (H
ch2_current (H
ch3_voltage (H
ch3_current (HB
_ch1_voltageB
_ch1_currentB
_ch2_voltageB
_ch2_currentB
_ch3_voltageB
_ch3_current"
AirQualityMetrics
pm10_standard (H 
pm25_standard (H
pm100_standard (H
pm10_environmental (H
pm25_environmental (H 
pm100_environmental (H
particles_03um (H
particles_05um (H
particles_10um	 (H
particles_25um
 (H	
particles_50um (H

particles_100um (H
co2 (HB
_pm10_standardB
_pm25_standardB
_pm100_standardB
_pm10_environmentalB
_pm25_environmentalB
_pm100_environmentalB
_particles_03umB
_particles_05umB
_particles_10umB
_particles_25umB
_particles_50umB
_particles_100umB
_co2"

LocalStats
uptime_seconds (
channel_utilization (
air_util_tx (
num_packets_tx (
num_packets_rx (
num_packets_rx_bad (
num_online_nodes (
num_total_nodes (
num_rx_dupe	 (
num_tx_relay
 (
num_tx_relay_canceled ("{
HealthMetrics
	heart_bpm (H 
spO2 (H
temperature (HB

_heart_bpmB
_spO2B
_temperature"ν
	Telemetry
time (3
device_metrics (2.meshtastic.DeviceMetricsH =
environment_metrics (2.meshtastic.EnvironmentMetricsH <
air_quality_metrics (2.meshtastic.AirQualityMetricsH 1
power_metrics (2.meshtastic.PowerMetricsH -
local_stats (2.meshtastic.LocalStatsH 3
health_metrics (2.meshtastic.HealthMetricsH B	
variant">
Nau7802Config

zeroOffset (
calibrationFactor (*χ
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
SHT4X
VEML7700
MLX90632
OPT3001
LTR390UV

TSL25911FN	
AHT10
DFROBOT_LARK
NAU7802

BMP3XX
ICM20948
MAX17048
CUSTOM_SENSOR
MAX30102
MLX90614	
SCD4X 
RADSENS!

INA226"
DFROBOT_RAIN#Bd
com.geeksville.meshBTelemetryProtosZ"github.com/meshtastic/go/generatedͺMeshtastic.ProtobufsΊ bproto3'
        , true);

        static::$is_initialized = true;
    }
}

