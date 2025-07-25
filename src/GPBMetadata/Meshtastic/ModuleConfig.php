<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/module_config.proto

namespace GPBMetadata\Meshtastic;

class ModuleConfig
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        $pool->internalAddGeneratedFile(
            '
�(
meshtastic/module_config.proto
meshtastic"�%
ModuleConfig3
mqtt (2#.meshtastic.ModuleConfig.MQTTConfigH 7
serial (2%.meshtastic.ModuleConfig.SerialConfigH T
external_notification (23.meshtastic.ModuleConfig.ExternalNotificationConfigH D
store_forward (2+.meshtastic.ModuleConfig.StoreForwardConfigH >

range_test (2(.meshtastic.ModuleConfig.RangeTestConfigH =
	telemetry (2(.meshtastic.ModuleConfig.TelemetryConfigH F
canned_message (2,.meshtastic.ModuleConfig.CannedMessageConfigH 5
audio (2$.meshtastic.ModuleConfig.AudioConfigH H
remote_hardware	 (2-.meshtastic.ModuleConfig.RemoteHardwareConfigH D
neighbor_info
 (2+.meshtastic.ModuleConfig.NeighborInfoConfigH J
ambient_lighting (2..meshtastic.ModuleConfig.AmbientLightingConfigH J
detection_sensor (2..meshtastic.ModuleConfig.DetectionSensorConfigH ?

paxcounter (2).meshtastic.ModuleConfig.PaxcounterConfigH �

MQTTConfig
enabled (
address (	
username (	
password (	
encryption_enabled (
json_enabled (
tls_enabled (
root (	
proxy_to_client_enabled	 (
map_reporting_enabled
 (G
map_report_settings (2*.meshtastic.ModuleConfig.MapReportSettingsn
MapReportSettings
publish_interval_secs (
position_precision (
should_report_location (�
RemoteHardwareConfig
enabled ("
allow_undefined_pin_access (5
available_pins (2.meshtastic.RemoteHardwarePinZ
NeighborInfoConfig
enabled (
update_interval (
transmit_over_lora (�
DetectionSensorConfig
enabled (
minimum_broadcast_secs (
state_broadcast_secs (
	send_bell (
name (	
monitor_pin (Z
detection_trigger_type (2:.meshtastic.ModuleConfig.DetectionSensorConfig.TriggerType

use_pullup ("�
TriggerType
	LOGIC_LOW 

LOGIC_HIGH
FALLING_EDGE
RISING_EDGE
EITHER_EDGE_ACTIVE_LOW
EITHER_EDGE_ACTIVE_HIGH�
AudioConfig
codec2_enabled (
ptt_pin (@
bitrate (2/.meshtastic.ModuleConfig.AudioConfig.Audio_Baud
i2s_ws (
i2s_sd (
i2s_din (
i2s_sck ("�

Audio_Baud
CODEC2_DEFAULT 
CODEC2_3200
CODEC2_2400
CODEC2_1600
CODEC2_1400
CODEC2_1300
CODEC2_1200

CODEC2_700
CODEC2_700Bv
PaxcounterConfig
enabled ("
paxcounter_update_interval (
wifi_threshold (
ble_threshold (�
SerialConfig
enabled (
echo (
rxd (
txd (?
baud (21.meshtastic.ModuleConfig.SerialConfig.Serial_Baud
timeout (?
mode (21.meshtastic.ModuleConfig.SerialConfig.Serial_Mode$
override_console_serial_port ("�
Serial_Baud
BAUD_DEFAULT 
BAUD_110
BAUD_300
BAUD_600
	BAUD_1200
	BAUD_2400
	BAUD_4800
	BAUD_9600

BAUD_19200

BAUD_38400	

BAUD_57600

BAUD_115200
BAUD_230400
BAUD_460800
BAUD_576000
BAUD_921600"n
Serial_Mode
DEFAULT 

SIMPLE	
PROTO
TEXTMSG
NMEA
CALTOPO
WS85
	VE_DIRECT�
ExternalNotificationConfig
enabled (
	output_ms (
output (
output_vibra (
output_buzzer	 (
active (
alert_message (
alert_message_vibra
 (
alert_message_buzzer (

alert_bell (
alert_bell_vibra (
alert_bell_buzzer (
use_pwm (
nag_timeout (
use_i2s_as_buzzer (�
StoreForwardConfig
enabled (
	heartbeat (
records (
history_return_max (
history_return_window (
	is_server (@
RangeTestConfig
enabled (
sender (
save (�
TelemetryConfig
device_update_interval (#
environment_update_interval (\'
environment_measurement_enabled ("
environment_screen_enabled (&
environment_display_fahrenheit (
air_quality_enabled (
air_quality_interval (!
power_measurement_enabled (
power_update_interval	 (
power_screen_enabled
 ("
health_measurement_enabled (
health_update_interval (
health_screen_enabled (�
CannedMessageConfig
rotary1_enabled (
inputbroker_pin_a (
inputbroker_pin_b (
inputbroker_pin_press (Y
inputbroker_event_cw (2;.meshtastic.ModuleConfig.CannedMessageConfig.InputEventCharZ
inputbroker_event_ccw (2;.meshtastic.ModuleConfig.CannedMessageConfig.InputEventChar\\
inputbroker_event_press (2;.meshtastic.ModuleConfig.CannedMessageConfig.InputEventChar
updown1_enabled (
enabled	 (
allow_input_source
 (	
	send_bell ("c
InputEventChar
NONE 
UP
DOWN
LEFT	
RIGHT

SELECT

BACK

CANCELe
AmbientLightingConfig
	led_state (
current (
red (
green (
blue (B
payload_variant"d
RemoteHardwarePin
gpio_pin (
name (	/
type (2!.meshtastic.RemoteHardwarePinType*I
RemoteHardwarePinType
UNKNOWN 
DIGITAL_READ
DIGITAL_WRITEBg
com.geeksville.meshBModuleConfigProtosZ"github.com/meshtastic/go/generated�Meshtastic.Protobufs� bproto3'
        , true);

        static::$is_initialized = true;
    }
}

