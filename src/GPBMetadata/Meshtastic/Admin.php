<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/admin.proto

namespace GPBMetadata\Meshtastic;

class Admin
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Meshtastic\Channel::initOnce();
        \GPBMetadata\Meshtastic\Config::initOnce();
        \GPBMetadata\Meshtastic\ConnectionStatus::initOnce();
        \GPBMetadata\Meshtastic\Mesh::initOnce();
        \GPBMetadata\Meshtastic\ModuleConfig::initOnce();
        $pool->internalAddGeneratedFile(
            '
�
meshtastic/admin.proto
meshtasticmeshtastic/config.proto"meshtastic/connection_status.protomeshtastic/mesh.protomeshtastic/module_config.proto"�
AdminMessage
get_channel_request (H 3
get_channel_response (2.meshtastic.ChannelH 
get_owner_request (H .
get_owner_response (2.meshtastic.UserH A
get_config_request (2#.meshtastic.AdminMessage.ConfigTypeH 1
get_config_response (2.meshtastic.ConfigH N
get_module_config_request (2).meshtastic.AdminMessage.ModuleConfigTypeH >
get_module_config_response (2.meshtastic.ModuleConfigH 4
*get_canned_message_module_messages_request
 (H 5
+get_canned_message_module_messages_response (	H %
get_device_metadata_request (H B
get_device_metadata_response (2.meshtastic.DeviceMetadataH 
get_ringtone_request (H 
get_ringtone_response (	H .
$get_device_connection_status_request (H S
%get_device_connection_status_response (2".meshtastic.DeviceConnectionStatusH 1
set_ham_mode (2.meshtastic.HamParametersH /
%get_node_remote_hardware_pins_request (H \\
&get_node_remote_hardware_pins_response (2*.meshtastic.NodeRemoteHardwarePinsResponseH  
enter_dfu_mode_request (H 
delete_file_request (	H %
	set_owner  (2.meshtastic.UserH *
set_channel! (2.meshtastic.ChannelH (

set_config" (2.meshtastic.ConfigH 5
set_module_config# (2.meshtastic.ModuleConfigH ,
"set_canned_message_module_messages$ (	H 
set_ringtone_message% (	H 
remove_by_nodenum& (H 
set_favorite_node\' (H 
remove_favorite_node( (H 2
set_fixed_position) (2.meshtastic.PositionH 
remove_fixed_position* (H 
begin_edit_settings@ (H 
commit_edit_settingsA (H 
reboot_ota_seconds_ (H 
exit_simulator` (H 
reboot_secondsa (H 
shutdown_secondsb (H 
factory_resetc (H 
nodedb_resetd (H "�

ConfigType
DEVICE_CONFIG 
POSITION_CONFIG
POWER_CONFIG
NETWORK_CONFIG
DISPLAY_CONFIG
LORA_CONFIG
BLUETOOTH_CONFIG"�
ModuleConfigType
MQTT_CONFIG 
SERIAL_CONFIG
EXTNOTIF_CONFIG
STOREFORWARD_CONFIG
RANGETEST_CONFIG
TELEMETRY_CONFIG
CANNEDMSG_CONFIG
AUDIO_CONFIG
REMOTEHARDWARE_CONFIG
NEIGHBORINFO_CONFIG	
AMBIENTLIGHTING_CONFIG

DETECTIONSENSOR_CONFIG
PAXCOUNTER_CONFIGB
payload_variant"[
HamParameters
	call_sign (	
tx_power (
	frequency (

short_name (	"f
NodeRemoteHardwarePinsResponseD
node_remote_hardware_pins (2!.meshtastic.NodeRemoteHardwarePinB`
com.geeksville.meshBAdminProtosZ"github.com/meshtastic/go/generated�Meshtastic.Protobufs� bproto3'
        , true);

        static::$is_initialized = true;
    }
}

