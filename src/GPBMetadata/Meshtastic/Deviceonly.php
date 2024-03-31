<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/deviceonly.proto

namespace GPBMetadata\Meshtastic;

class Deviceonly
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Meshtastic\Channel::initOnce();
        \GPBMetadata\Meshtastic\Localonly::initOnce();
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        \GPBMetadata\Meshtastic\Telemetry::initOnce();
        \GPBMetadata\Meshtastic\ModuleConfig::initOnce();
        \GPBMetadata\Nanopb::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
meshtastic/deviceonly.proto
meshtasticmeshtastic/localonly.protomeshtastic/mesh.protomeshtastic/telemetry.protomeshtastic/module_config.protonanopb.proto"�
DeviceState\'
my_node (2.meshtastic.MyNodeInfo
owner (2.meshtastic.User-
receive_queue (2.meshtastic.MeshPacket
version (/
rx_text_message (2.meshtastic.MeshPacket
no_save	 (B
did_gps_reset (+
rx_waypoint (2.meshtastic.MeshPacketD
node_remote_hardware_pins (2!.meshtastic.NodeRemoteHardwarePinZ
node_db_lite (2.meshtastic.NodeInfoLiteB*�?\'�$std::vector<meshtastic_NodeInfoLite>"�
NodeInfoLite
num (
user (2.meshtastic.User*
position (2.meshtastic.PositionLite
snr (

last_heard (1
device_metrics (2.meshtastic.DeviceMetrics
channel (
via_mqtt (
	hops_away	 (
is_favorite
 ("�
PositionLite

latitude_i (
longitude_i (
altitude (
time (7
location_source (2.meshtastic.Position.LocSource"E
ChannelFile%
channels (2.meshtastic.Channel
version ("�
OEMStore
oem_icon_width (
oem_icon_height (
oem_icon_bits ()
oem_font (2.meshtastic.ScreenFonts
oem_text (	
oem_aes_key (1
oem_local_config (2.meshtastic.LocalConfig>
oem_local_module_config (2.meshtastic.LocalModuleConfig*>
ScreenFonts

FONT_SMALL 
FONT_MEDIUM

FONT_LARGEBm
com.geeksville.meshB
DeviceOnlyZ"github.com/meshtastic/go/generated�Meshtastic.Protobufs� �?�<vector>bproto3'
        , true);

        static::$is_initialized = true;
    }
}

