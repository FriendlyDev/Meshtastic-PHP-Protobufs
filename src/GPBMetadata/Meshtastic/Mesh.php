<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace GPBMetadata\Meshtastic;

class Mesh
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Meshtastic\Channel::initOnce();
        \GPBMetadata\Meshtastic\Config::initOnce();
        \GPBMetadata\Meshtastic\ModuleConfig::initOnce();
        \GPBMetadata\Meshtastic\Portnums::initOnce();
        \GPBMetadata\Meshtastic\Telemetry::initOnce();
        \GPBMetadata\Meshtastic\Xmodem::initOnce();
        $pool->internalAddGeneratedFile(
            '
�3
meshtastic/mesh.proto
meshtasticmeshtastic/config.protomeshtastic/module_config.protomeshtastic/portnums.protomeshtastic/telemetry.protomeshtastic/xmodem.proto"�
Position

latitude_i (
longitude_i (
altitude (
time (7
location_source (2.meshtastic.Position.LocSource7
altitude_source (2.meshtastic.Position.AltSource
	timestamp (
timestamp_millis_adjust (
altitude_hae	 (#
altitude_geoidal_separation
 (
PDOP (
HDOP (
VDOP (
gps_accuracy (
ground_speed (
ground_track (
fix_quality (
fix_type (
sats_in_view (
	sensor_id (
next_update (

seq_number (
precision_bits ("N
	LocSource
	LOC_UNSET 

LOC_MANUAL
LOC_INTERNAL
LOC_EXTERNAL"b
	AltSource
	ALT_UNSET 

ALT_MANUAL
ALT_INTERNAL
ALT_EXTERNAL
ALT_BAROMETRIC"�
User

id (	
	long_name (	

short_name (	
macaddr (B+
hw_model (2.meshtastic.HardwareModel
is_licensed (2
role (2$.meshtastic.Config.DeviceConfig.Role"
RouteDiscovery
route ("�
Routing3
route_request (2.meshtastic.RouteDiscoveryH 1
route_reply (2.meshtastic.RouteDiscoveryH 1
error_reason (2.meshtastic.Routing.ErrorH "�
Error
NONE 
NO_ROUTE
GOT_NAK
TIMEOUT
NO_INTERFACE
MAX_RETRANSMIT

NO_CHANNEL
	TOO_LARGE
NO_RESPONSE
DUTY_CYCLE_LIMIT	
BAD_REQUEST 
NOT_AUTHORIZED!B	
variant"�
Data$
portnum (2.meshtastic.PortNum
payload (
want_response (
dest (
source (

request_id (
reply_id (
emoji ("�
Waypoint

id (

latitude_i (
longitude_i (
expire (
	locked_to (
name (	
description (	
icon ("l
MqttClientProxyMessage
topic (	
data (H 
text (	H 
retained (B
payload_variant"�

MeshPacket
from (

to (
channel (#
decoded (2.meshtastic.DataH 
	encrypted (H 

id (
rx_time (
rx_snr (
	hop_limit	 (
want_ack
 (1
priority (2.meshtastic.MeshPacket.Priority
rx_rssi (3
delayed (2.meshtastic.MeshPacket.DelayedB
via_mqtt (
	hop_start ("[
Priority	
UNSET 
MIN

BACKGROUND

DEFAULT@
RELIABLEF
ACKx
MAX"B
Delayed
NO_DELAY 
DELAYED_BROADCAST
DELAYED_DIRECTB
payload_variant"�
NodeInfo
num (
user (2.meshtastic.User&
position (2.meshtastic.Position
snr (

last_heard (1
device_metrics (2.meshtastic.DeviceMetrics
channel (
via_mqtt (
	hops_away	 (
is_favorite
 ("P

MyNodeInfo
my_node_num (
reboot_count (
min_app_version ("�
	LogRecord
message (	
time (
source (	*
level (2.meshtastic.LogRecord.Level"X
Level	
UNSET 
CRITICAL2	
ERROR(
WARNING
INFO	
DEBUG
	
TRACE"P
QueueStatus
res (
free (
maxlen (
mesh_packet_id ("�
	FromRadio

id ((
packet (2.meshtastic.MeshPacketH )
my_info (2.meshtastic.MyNodeInfoH )
	node_info (2.meshtastic.NodeInfoH $
config (2.meshtastic.ConfigH +

log_record (2.meshtastic.LogRecordH 
config_complete_id (H 
rebooted (H 0
moduleConfig	 (2.meshtastic.ModuleConfigH &
channel
 (2.meshtastic.ChannelH .
queueStatus (2.meshtastic.QueueStatusH *
xmodemPacket (2.meshtastic.XModemH .
metadata (2.meshtastic.DeviceMetadataH D
mqttClientProxyMessage (2".meshtastic.MqttClientProxyMessageH B
payload_variant"�
ToRadio(
packet (2.meshtastic.MeshPacketH 
want_config_id (H 

disconnect (H *
xmodemPacket (2.meshtastic.XModemH D
mqttClientProxyMessage (2".meshtastic.MqttClientProxyMessageH *
	heartbeat (2.meshtastic.HeartbeatH B
payload_variant"@

Compressed$
portnum (2.meshtastic.PortNum
data ("�
NeighborInfo
node_id (
last_sent_by_id ($
node_broadcast_interval_secs (\'
	neighbors (2.meshtastic.Neighbor"d
Neighbor
node_id (
snr (
last_rx_time ($
node_broadcast_interval_secs ("�
DeviceMetadata
firmware_version (	
device_state_version (
canShutdown (
hasWifi (
hasBluetooth (
hasEthernet (2
role (2$.meshtastic.Config.DeviceConfig.Role
position_flags (+
hw_model	 (2.meshtastic.HardwareModel
hasRemoteHardware
 ("
	Heartbeat"U
NodeRemoteHardwarePin
node_num (*
pin (2.meshtastic.RemoteHardwarePin"e
ChunkedPayload

payload_id (
chunk_count (
chunk_index (
payload_chunk ("
resend_chunks
chunks ("�
ChunkedPayloadResponse

payload_id (
request_transfer (H 
accept_transfer (H 2
resend_chunks (2.meshtastic.resend_chunksH B
payload_variant*�	
HardwareModel	
UNSET 
TLORA_V2
TLORA_V1
TLORA_V2_1_1P6	
TBEAM
HELTEC_V2_0

TBEAM_V0P7

T_ECHO
TLORA_V1_1P3
RAK4631	
HELTEC_V2_1

	HELTEC_V1
LILYGO_TBEAM_S3_CORE
RAK11200
NANO_G1
TLORA_V2_1_1P8
TLORA_T3_S3
NANO_G1_EXPLORER
NANO_G2_ULTRA
	LORA_TYPE
WIPHONE

WIO_WM1110
RAK2560

STATION_G1
RAK11310
SENSELORA_RP2040
SENSELORA_S3
	CANARYONE
RP2040_LORA

STATION_G2
LORA_RELAY_V1 

NRF52840DK!
PPR"
GENIEBLOCKS#
NRF52_UNKNOWN$
	PORTDUINO%
ANDROID_SIM&

DIY_V1\'
NRF52840_PCA10059(

DR_DEV)
M5STACK*
	HELTEC_V3+
HELTEC_WSL_V3,
BETAFPV_2400_TX-
BETAFPV_900_NANO_TX.
RPI_PICO/
HELTEC_WIRELESS_TRACKER0
HELTEC_WIRELESS_PAPER1

T_DECK2

T_WATCH_S33
PICOMPUTER_S34
HELTEC_HT625
EBYTE_ESP32_S36
ESP32_S3_PICO7
	CHATTER_28
HELTEC_WIRELESS_PAPER_V1_09 
HELTEC_WIRELESS_TRACKER_V1_0:
UNPHONE;
TD_LORAC<
CDEBYTE_EORA_S3=
TWC_MESH_V4>
NRF52_PROMICRO_DIY?
RADIOMASTER_900_BANDIT_NANO@
HELTEC_CAPSULE_SENSOR_V3A

PRIVATE_HW�*,
	Constants
ZERO 
DATA_PAYLOAD_LEN�*�
CriticalErrorCode
NONE 
TX_WATCHDOG
SLEEP_ENTER_WAIT
NO_RADIO
UNSPECIFIED
UBLOX_UNIT_FAILED
	NO_AXP192
INVALID_RADIO_SETTING
TRANSMIT_FAILED
BROWNOUT	
SX1262_FAILURE

RADIO_SPI_BUGB_
com.geeksville.meshB
MeshProtosZ"github.com/meshtastic/go/generated�Meshtastic.Protobufs� bproto3'
        , true);

        static::$is_initialized = true;
    }
}

