<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace GPBMetadata\Meshtastic;

class Config
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�#
meshtastic/config.proto
meshtastic"�"
Config1
device (2.meshtastic.Config.DeviceConfigH 5
position (2!.meshtastic.Config.PositionConfigH /
power (2.meshtastic.Config.PowerConfigH 3
network (2 .meshtastic.Config.NetworkConfigH 3
display (2 .meshtastic.Config.DisplayConfigH -
lora (2.meshtastic.Config.LoRaConfigH 7
	bluetooth (2".meshtastic.Config.BluetoothConfigH �
DeviceConfig2
role (2$.meshtastic.Config.DeviceConfig.Role
serial_enabled (
debug_log_enabled (
button_gpio (
buzzer_gpio (I
rebroadcast_mode (2/.meshtastic.Config.DeviceConfig.RebroadcastMode 
node_info_broadcast_secs ("
double_tap_as_button_press (

is_managed	 (
disable_triple_click
 (
tzdef (	
led_heartbeat_disabled ("�
Role

CLIENT 
CLIENT_MUTE

ROUTER
ROUTER_CLIENT
REPEATER
TRACKER

SENSOR
TAK
CLIENT_HIDDEN
LOST_AND_FOUND	
TAK_TRACKER
"Q
RebroadcastMode
ALL 
ALL_SKIP_DECODING

LOCAL_ONLY

KNOWN_ONLY�
PositionConfig
position_broadcast_secs ((
 position_broadcast_smart_enabled (
fixed_position (
gps_enabled (B
gps_update_interval (
gps_attempt_time (B
position_flags (
rx_gpio (
tx_gpio	 ((
 broadcast_smart_minimum_distance
 (-
%broadcast_smart_minimum_interval_secs (
gps_en_gpio (;
gps_mode (2).meshtastic.Config.PositionConfig.GpsMode"�
PositionFlags	
UNSET 
ALTITUDE
ALTITUDE_MSL
GEOIDAL_SEPARATION
DOP	
HVDOP
	SATINVIEW 

SEQ_NO@
	TIMESTAMP�
HEADING�

SPEED�"5
GpsMode
DISABLED 
ENABLED
NOT_PRESENT�
PowerConfig
is_power_saving (&
on_battery_shutdown_after_secs (
adc_multiplier_override (
wait_bluetooth_secs (
sds_secs (
ls_secs (
min_wake_secs ("
device_battery_ina_address	 (
powermon_enables  (�
NetworkConfig
wifi_enabled (
	wifi_ssid (	
wifi_psk (	

ntp_server (	
eth_enabled (B
address_mode (2,.meshtastic.Config.NetworkConfig.AddressMode@
ipv4_config (2+.meshtastic.Config.NetworkConfig.IpV4Config
rsyslog_server	 (	F

IpV4Config

ip (
gateway (
subnet (
dns ("#
AddressMode
DHCP 

STATIC�
DisplayConfig
screen_on_secs (H

gps_format (24.meshtastic.Config.DisplayConfig.GpsCoordinateFormat!
auto_screen_carousel_secs (
compass_north_top (
flip_screen (<
units (2-.meshtastic.Config.DisplayConfig.DisplayUnits7
oled (2).meshtastic.Config.DisplayConfig.OledTypeA
displaymode (2,.meshtastic.Config.DisplayConfig.DisplayMode
heading_bold	 (
wake_on_tap_or_motion
 (P
compass_orientation (23.meshtastic.Config.DisplayConfig.CompassOrientation"M
GpsCoordinateFormat
DEC 
DMS
UTM
MGRS
OLC
OSGR"(
DisplayUnits

METRIC 
IMPERIAL"M
OledType
	OLED_AUTO 
OLED_SSD1306
OLED_SH1106
OLED_SH1107"A
DisplayMode
DEFAULT 
TWOCOLOR
INVERTED	
COLOR"�
CompassOrientation
	DEGREES_0 

DEGREES_90
DEGREES_180
DEGREES_270
DEGREES_0_INVERTED
DEGREES_90_INVERTED
DEGREES_180_INVERTED
DEGREES_270_INVERTED�

LoRaConfig

use_preset (?
modem_preset (2).meshtastic.Config.LoRaConfig.ModemPreset
	bandwidth (
spread_factor (
coding_rate (
frequency_offset (8
region (2(.meshtastic.Config.LoRaConfig.RegionCode
	hop_limit (

tx_enabled	 (
tx_power
 (
channel_num (
override_duty_cycle (
sx126x_rx_boosted_gain (
override_frequency (
ignore_incomingg (
ignore_mqtth ("�

RegionCode	
UNSET 
US

EU_433

EU_868
CN
JP
ANZ
KR
TW
RU	
IN


NZ_865
TH
LORA_24

UA_433

UA_868

MY_433

MY_919

SG_923"�
ModemPreset
	LONG_FAST 
	LONG_SLOW
VERY_LONG_SLOW
MEDIUM_SLOW
MEDIUM_FAST

SHORT_SLOW

SHORT_FAST
LONG_MODERATE�
BluetoothConfig
enabled (<
mode (2..meshtastic.Config.BluetoothConfig.PairingMode
	fixed_pin (
device_logging_enabled ("8
PairingMode

RANDOM_PIN 
	FIXED_PIN

NO_PINB
payload_variantBa
com.geeksville.meshBConfigProtosZ"github.com/meshtastic/go/generated�Meshtastic.Protobufs� bproto3'
        , true);

        static::$is_initialized = true;
    }
}

