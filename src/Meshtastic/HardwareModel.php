<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/mesh.proto

namespace Meshtastic;

use UnexpectedValueException;

/**
 * Note: these enum names must EXACTLY match the string used in the device
 * bin/build-all.sh script.
 * Because they will be used to find firmware filenames in the android app for OTA updates.
 * To match the old style filenames, _ is converted to -, p is converted to .
 *
 * Protobuf type <code>meshtastic.HardwareModel</code>
 */
class HardwareModel
{
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V2 = 1;</code>
     */
    const TLORA_V2 = 1;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V1 = 2;</code>
     */
    const TLORA_V1 = 2;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V2_1_1P6 = 3;</code>
     */
    const TLORA_V2_1_1P6 = 3;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TBEAM = 4;</code>
     */
    const TBEAM = 4;
    /**
     * The original heltec WiFi_Lora_32_V2, which had battery voltage sensing hooked to GPIO 13
     * (see HELTEC_V2 for the new version).
     *
     * Generated from protobuf enum <code>HELTEC_V2_0 = 5;</code>
     */
    const HELTEC_V2_0 = 5;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TBEAM_V0P7 = 6;</code>
     */
    const TBEAM_V0P7 = 6;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>T_ECHO = 7;</code>
     */
    const T_ECHO = 7;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V1_1P3 = 8;</code>
     */
    const TLORA_V1_1P3 = 8;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>RAK4631 = 9;</code>
     */
    const RAK4631 = 9;
    /**
     * The new version of the heltec WiFi_Lora_32_V2 board that has battery sensing hooked to GPIO 37.
     * Sadly they did not update anything on the silkscreen to identify this board
     *
     * Generated from protobuf enum <code>HELTEC_V2_1 = 10;</code>
     */
    const HELTEC_V2_1 = 10;
    /**
     * Ancient heltec WiFi_Lora_32 board
     *
     * Generated from protobuf enum <code>HELTEC_V1 = 11;</code>
     */
    const HELTEC_V1 = 11;
    /**
     * New T-BEAM with ESP32-S3 CPU
     *
     * Generated from protobuf enum <code>LILYGO_TBEAM_S3_CORE = 12;</code>
     */
    const LILYGO_TBEAM_S3_CORE = 12;
    /**
     * RAK WisBlock ESP32 core: https://docs.rakwireless.com/Product-Categories/WisBlock/RAK11200/Overview/
     *
     * Generated from protobuf enum <code>RAK11200 = 13;</code>
     */
    const RAK11200 = 13;
    /**
     * B&Q Consulting Nano Edition G1: https://uniteng.com/wiki/doku.php?id=meshtastic:nano
     *
     * Generated from protobuf enum <code>NANO_G1 = 14;</code>
     */
    const NANO_G1 = 14;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_V2_1_1P8 = 15;</code>
     */
    const TLORA_V2_1_1P8 = 15;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>TLORA_T3_S3 = 16;</code>
     */
    const TLORA_T3_S3 = 16;
    /**
     * B&Q Consulting Nano G1 Explorer: https://wiki.uniteng.com/en/meshtastic/nano-g1-explorer
     *
     * Generated from protobuf enum <code>NANO_G1_EXPLORER = 17;</code>
     */
    const NANO_G1_EXPLORER = 17;
    /**
     * B&Q Consulting Nano G2 Ultra: https://wiki.uniteng.com/en/meshtastic/nano-g2-ultra
     *
     * Generated from protobuf enum <code>NANO_G2_ULTRA = 18;</code>
     */
    const NANO_G2_ULTRA = 18;
    /**
     * LoRAType device: https://loratype.org/
     *
     * Generated from protobuf enum <code>LORA_TYPE = 19;</code>
     */
    const LORA_TYPE = 19;
    /**
     * wiphone https://www.wiphone.io/
     *
     * Generated from protobuf enum <code>WIPHONE = 20;</code>
     */
    const WIPHONE = 20;
    /**
     * WIO Tracker WM1110 family from Seeed Studio. Includes wio-1110-tracker and wio-1110-sdk
     *
     * Generated from protobuf enum <code>WIO_WM1110 = 21;</code>
     */
    const WIO_WM1110 = 21;
    /**
     * RAK2560 Solar base station based on RAK4630
     *
     * Generated from protobuf enum <code>RAK2560 = 22;</code>
     */
    const RAK2560 = 22;
    /**
     * Heltec HRU-3601: https://heltec.org/project/hru-3601/
     *
     * Generated from protobuf enum <code>HELTEC_HRU_3601 = 23;</code>
     */
    const HELTEC_HRU_3601 = 23;
    /**
     * Heltec Wireless Bridge
     *
     * Generated from protobuf enum <code>HELTEC_WIRELESS_BRIDGE = 24;</code>
     */
    const HELTEC_WIRELESS_BRIDGE = 24;
    /**
     * B&Q Consulting Station Edition G1: https://uniteng.com/wiki/doku.php?id=meshtastic:station
     *
     * Generated from protobuf enum <code>STATION_G1 = 25;</code>
     */
    const STATION_G1 = 25;
    /**
     * RAK11310 (RP2040 + SX1262)
     *
     * Generated from protobuf enum <code>RAK11310 = 26;</code>
     */
    const RAK11310 = 26;
    /**
     * Makerfabs SenseLoRA Receiver (RP2040 + RFM96)
     *
     * Generated from protobuf enum <code>SENSELORA_RP2040 = 27;</code>
     */
    const SENSELORA_RP2040 = 27;
    /**
     * Makerfabs SenseLoRA Industrial Monitor (ESP32-S3 + RFM96)
     *
     * Generated from protobuf enum <code>SENSELORA_S3 = 28;</code>
     */
    const SENSELORA_S3 = 28;
    /**
     * Canary Radio Company - CanaryOne: https://canaryradio.io/products/canaryone
     *
     * Generated from protobuf enum <code>CANARYONE = 29;</code>
     */
    const CANARYONE = 29;
    /**
     * Waveshare RP2040 LoRa - https://www.waveshare.com/rp2040-lora.htm
     *
     * Generated from protobuf enum <code>RP2040_LORA = 30;</code>
     */
    const RP2040_LORA = 30;
    /**
     * B&Q Consulting Station G2: https://wiki.uniteng.com/en/meshtastic/station-g2
     *
     * Generated from protobuf enum <code>STATION_G2 = 31;</code>
     */
    const STATION_G2 = 31;
    /**
     * ---------------------------------------------------------------------------
     * Less common/prototype boards listed here (needs one more byte over the air)
     * ---------------------------------------------------------------------------
     *
     * Generated from protobuf enum <code>LORA_RELAY_V1 = 32;</code>
     */
    const LORA_RELAY_V1 = 32;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>NRF52840DK = 33;</code>
     */
    const NRF52840DK = 33;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>PPR = 34;</code>
     */
    const PPR = 34;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>GENIEBLOCKS = 35;</code>
     */
    const GENIEBLOCKS = 35;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>NRF52_UNKNOWN = 36;</code>
     */
    const NRF52_UNKNOWN = 36;
    /**
     * TODO: REPLACE
     *
     * Generated from protobuf enum <code>PORTDUINO = 37;</code>
     */
    const PORTDUINO = 37;
    /**
     * The simulator built into the android app
     *
     * Generated from protobuf enum <code>ANDROID_SIM = 38;</code>
     */
    const ANDROID_SIM = 38;
    /**
     * Custom DIY device based on &#64;NanoVHF schematics: https://github.com/NanoVHF/Meshtastic-DIY/tree/main/Schematics
     *
     * Generated from protobuf enum <code>DIY_V1 = 39;</code>
     */
    const DIY_V1 = 39;
    /**
     * nRF52840 Dongle : https://www.nordicsemi.com/Products/Development-hardware/nrf52840-dongle/
     *
     * Generated from protobuf enum <code>NRF52840_PCA10059 = 40;</code>
     */
    const NRF52840_PCA10059 = 40;
    /**
     * Custom Disaster Radio esp32 v3 device https://github.com/sudomesh/disaster-radio/tree/master/hardware/board_esp32_v3
     *
     * Generated from protobuf enum <code>DR_DEV = 41;</code>
     */
    const DR_DEV = 41;
    /**
     * M5 esp32 based MCU modules with enclosure, TFT and LORA Shields. All Variants (Basic, Core, Fire, Core2, CoreS3, Paper) https://m5stack.com/
     *
     * Generated from protobuf enum <code>M5STACK = 42;</code>
     */
    const M5STACK = 42;
    /**
     * New Heltec LoRA32 with ESP32-S3 CPU
     *
     * Generated from protobuf enum <code>HELTEC_V3 = 43;</code>
     */
    const HELTEC_V3 = 43;
    /**
     * New Heltec Wireless Stick Lite with ESP32-S3 CPU
     *
     * Generated from protobuf enum <code>HELTEC_WSL_V3 = 44;</code>
     */
    const HELTEC_WSL_V3 = 44;
    /**
     * New BETAFPV ELRS Micro TX Module 2.4G with ESP32 CPU
     *
     * Generated from protobuf enum <code>BETAFPV_2400_TX = 45;</code>
     */
    const BETAFPV_2400_TX = 45;
    /**
     * BetaFPV ExpressLRS "Nano" TX Module 900MHz with ESP32 CPU
     *
     * Generated from protobuf enum <code>BETAFPV_900_NANO_TX = 46;</code>
     */
    const BETAFPV_900_NANO_TX = 46;
    /**
     * Raspberry Pi Pico (W) with Waveshare SX1262 LoRa Node Module
     *
     * Generated from protobuf enum <code>RPI_PICO = 47;</code>
     */
    const RPI_PICO = 47;
    /**
     * Heltec Wireless Tracker with ESP32-S3 CPU, built-in GPS, and TFT
     * Newer V1.1, version is written on the PCB near the display.
     *
     * Generated from protobuf enum <code>HELTEC_WIRELESS_TRACKER = 48;</code>
     */
    const HELTEC_WIRELESS_TRACKER = 48;
    /**
     * Heltec Wireless Paper with ESP32-S3 CPU and E-Ink display
     *
     * Generated from protobuf enum <code>HELTEC_WIRELESS_PAPER = 49;</code>
     */
    const HELTEC_WIRELESS_PAPER = 49;
    /**
     * LilyGo T-Deck with ESP32-S3 CPU, Keyboard and IPS display
     *
     * Generated from protobuf enum <code>T_DECK = 50;</code>
     */
    const T_DECK = 50;
    /**
     * LilyGo T-Watch S3 with ESP32-S3 CPU and IPS display
     *
     * Generated from protobuf enum <code>T_WATCH_S3 = 51;</code>
     */
    const T_WATCH_S3 = 51;
    /**
     * Bobricius Picomputer with ESP32-S3 CPU, Keyboard and IPS display
     *
     * Generated from protobuf enum <code>PICOMPUTER_S3 = 52;</code>
     */
    const PICOMPUTER_S3 = 52;
    /**
     * Heltec HT-CT62 with ESP32-C3 CPU and SX1262 LoRa
     *
     * Generated from protobuf enum <code>HELTEC_HT62 = 53;</code>
     */
    const HELTEC_HT62 = 53;
    /**
     * EBYTE SPI LoRa module and ESP32-S3
     *
     * Generated from protobuf enum <code>EBYTE_ESP32_S3 = 54;</code>
     */
    const EBYTE_ESP32_S3 = 54;
    /**
     * Waveshare ESP32-S3-PICO with PICO LoRa HAT and 2.9inch e-Ink
     *
     * Generated from protobuf enum <code>ESP32_S3_PICO = 55;</code>
     */
    const ESP32_S3_PICO = 55;
    /**
     * CircuitMess Chatter 2 LLCC68 Lora Module and ESP32 Wroom
     * Lora module can be swapped out for a Heltec RA-62 which is "almost" pin compatible
     * with one cut and one jumper Meshtastic works
     *
     * Generated from protobuf enum <code>CHATTER_2 = 56;</code>
     */
    const CHATTER_2 = 56;
    /**
     * Heltec Wireless Paper, With ESP32-S3 CPU and E-Ink display
     * Older "V1.0" Variant, has no "version sticker"
     * E-Ink model is DEPG0213BNS800
     * Tab on the screen protector is RED
     * Flex connector marking is FPC-7528B
     *
     * Generated from protobuf enum <code>HELTEC_WIRELESS_PAPER_V1_0 = 57;</code>
     */
    const HELTEC_WIRELESS_PAPER_V1_0 = 57;
    /**
     * Heltec Wireless Tracker with ESP32-S3 CPU, built-in GPS, and TFT
     * Older "V1.0" Variant
     *
     * Generated from protobuf enum <code>HELTEC_WIRELESS_TRACKER_V1_0 = 58;</code>
     */
    const HELTEC_WIRELESS_TRACKER_V1_0 = 58;
    /**
     * unPhone with ESP32-S3, TFT touchscreen,  LSM6DS3TR-C accelerometer and gyroscope
     *
     * Generated from protobuf enum <code>UNPHONE = 59;</code>
     */
    const UNPHONE = 59;
    /**
     * Teledatics TD-LORAC NRF52840 based M.2 LoRA module
     * Compatible with the TD-WRLS development board
     *
     * Generated from protobuf enum <code>TD_LORAC = 60;</code>
     */
    const TD_LORAC = 60;
    /**
     * CDEBYTE EoRa-S3 board using their own MM modules, clone of LILYGO T3S3
     *
     * Generated from protobuf enum <code>CDEBYTE_EORA_S3 = 61;</code>
     */
    const CDEBYTE_EORA_S3 = 61;
    /**
     * TWC_MESH_V4
     * Adafruit NRF52840 feather express with SX1262, SSD1306 OLED and NEO6M GPS
     *
     * Generated from protobuf enum <code>TWC_MESH_V4 = 62;</code>
     */
    const TWC_MESH_V4 = 62;
    /**
     * NRF52_PROMICRO_DIY
     * Promicro NRF52840 with SX1262/LLCC68, SSD1306 OLED and NEO6M GPS
     *
     * Generated from protobuf enum <code>NRF52_PROMICRO_DIY = 63;</code>
     */
    const NRF52_PROMICRO_DIY = 63;
    /**
     * RadioMaster 900 Bandit Nano, https://www.radiomasterrc.com/products/bandit-nano-expresslrs-rf-module
     * ESP32-D0WDQ6 With SX1276/SKY66122, SSD1306 OLED and No GPS
     *
     * Generated from protobuf enum <code>RADIOMASTER_900_BANDIT_NANO = 64;</code>
     */
    const RADIOMASTER_900_BANDIT_NANO = 64;
    /**
     * Heltec Capsule Sensor V3 with ESP32-S3 CPU, Portable LoRa device that can replace GNSS modules or sensors
     *
     * Generated from protobuf enum <code>HELTEC_CAPSULE_SENSOR_V3 = 65;</code>
     */
    const HELTEC_CAPSULE_SENSOR_V3 = 65;
    /**
     * Heltec Vision Master T190 with ESP32-S3 CPU, and a 1.90 inch TFT display
     *
     * Generated from protobuf enum <code>HELTEC_VISION_MASTER_T190 = 66;</code>
     */
    const HELTEC_VISION_MASTER_T190 = 66;
    /**
     * Heltec Vision Master E213 with ESP32-S3 CPU, and a 2.13 inch E-Ink display
     *
     * Generated from protobuf enum <code>HELTEC_VISION_MASTER_E213 = 67;</code>
     */
    const HELTEC_VISION_MASTER_E213 = 67;
    /**
     * Heltec Vision Master E290 with ESP32-S3 CPU, and a 2.9 inch E-Ink display
     *
     * Generated from protobuf enum <code>HELTEC_VISION_MASTER_E290 = 68;</code>
     */
    const HELTEC_VISION_MASTER_E290 = 68;
    /**
     * Heltec Mesh Node T114 board with nRF52840 CPU, and a 1.14 inch TFT display, Ultimate low-power design,
     * specifically adapted for the Meshtatic project
     *
     * Generated from protobuf enum <code>HELTEC_MESH_NODE_T114 = 69;</code>
     */
    const HELTEC_MESH_NODE_T114 = 69;
    /**
     * Sensecap Indicator from Seeed Studio. ESP32-S3 device with TFT and RP2040 coprocessor
     *
     * Generated from protobuf enum <code>SENSECAP_INDICATOR = 70;</code>
     */
    const SENSECAP_INDICATOR = 70;
    /**
     * Seeed studio T1000-E tracker card. NRF52840 w/ LR1110 radio, GPS, button, buzzer, and sensors.
     *
     * Generated from protobuf enum <code>TRACKER_T1000_E = 71;</code>
     */
    const TRACKER_T1000_E = 71;
    /**
     * RAK3172 STM32WLE5 Module (https://store.rakwireless.com/products/wisduo-lpwan-module-rak3172)
     *
     * Generated from protobuf enum <code>RAK3172 = 72;</code>
     */
    const RAK3172 = 72;
    /**
     * Seeed Studio Wio-E5 (either mini or Dev kit) using STM32WL chip.
     *
     * Generated from protobuf enum <code>WIO_E5 = 73;</code>
     */
    const WIO_E5 = 73;
    /**
     * RadioMaster 900 Bandit, https://www.radiomasterrc.com/products/bandit-expresslrs-rf-module
     * SSD1306 OLED and No GPS
     *
     * Generated from protobuf enum <code>RADIOMASTER_900_BANDIT = 74;</code>
     */
    const RADIOMASTER_900_BANDIT = 74;
    /**
     * Minewsemi ME25LS01 (ME25LE01_V1.0). NRF52840 w/ LR1110 radio, buttons and leds and pins.
     *
     * Generated from protobuf enum <code>ME25LS01_4Y10TD = 75;</code>
     */
    const ME25LS01_4Y10TD = 75;
    /**
     * RP2040_FEATHER_RFM95
     * Adafruit Feather RP2040 with RFM95 LoRa Radio RFM95 with SX1272, SSD1306 OLED
     * https://www.adafruit.com/product/5714
     * https://www.adafruit.com/product/326
     * https://www.adafruit.com/product/938
     *  ^^^ short A0 to switch to I2C address 0x3C
     *
     * Generated from protobuf enum <code>RP2040_FEATHER_RFM95 = 76;</code>
     */
    const RP2040_FEATHER_RFM95 = 76;
    /**
     * M5 esp32 based MCU modules with enclosure, TFT and LORA Shields. All Variants (Basic, Core, Fire, Core2, CoreS3, Paper) https://m5stack.com/ 
     *
     * Generated from protobuf enum <code>M5STACK_COREBASIC = 77;</code>
     */
    const M5STACK_COREBASIC = 77;
    /**
     * Generated from protobuf enum <code>M5STACK_CORE2 = 78;</code>
     */
    const M5STACK_CORE2 = 78;
    /**
     * Pico2 with Waveshare Hat, same as Pico 
     *
     * Generated from protobuf enum <code>RPI_PICO2 = 79;</code>
     */
    const RPI_PICO2 = 79;
    /**
     * M5 esp32 based MCU modules with enclosure, TFT and LORA Shields. All Variants (Basic, Core, Fire, Core2, CoreS3, Paper) https://m5stack.com/ 
     *
     * Generated from protobuf enum <code>M5STACK_CORES3 = 80;</code>
     */
    const M5STACK_CORES3 = 80;
    /**
     * Seeed XIAO S3 DK
     *
     * Generated from protobuf enum <code>SEEED_XIAO_S3 = 81;</code>
     */
    const SEEED_XIAO_S3 = 81;
    /**
     * Nordic nRF52840+Semtech SX1262 LoRa BLE Combo Module. nRF52840+SX1262 MS24SF1
     *
     * Generated from protobuf enum <code>MS24SF1 = 82;</code>
     */
    const MS24SF1 = 82;
    /**
     * Lilygo TLora-C6 with the new ESP32-C6 MCU
     *
     * Generated from protobuf enum <code>TLORA_C6 = 83;</code>
     */
    const TLORA_C6 = 83;
    /**
     * WisMesh Tap
     * RAK-4631 w/ TFT in injection modled case
     *
     * Generated from protobuf enum <code>WISMESH_TAP = 84;</code>
     */
    const WISMESH_TAP = 84;
    /**
     * Similar to PORTDUINO but used by Routastic devices, this is not any
     * particular device and does not run Meshtastic's code but supports
     * the same frame format.
     * Runs on linux, see https://github.com/Jorropo/routastic
     *
     * Generated from protobuf enum <code>ROUTASTIC = 85;</code>
     */
    const ROUTASTIC = 85;
    /**
     * Mesh-Tab, esp32 based
     * https://github.com/valzzu/Mesh-Tab
     *
     * Generated from protobuf enum <code>MESH_TAB = 86;</code>
     */
    const MESH_TAB = 86;
    /**
     * MeshLink board developed by LoraItalia. NRF52840, eByte E22900M22S (Will also come with other frequencies), 25w MPPT solar charger (5v,12v,18v selectable), support for gps, buzzer, oled or e-ink display, 10 gpios, hardware watchdog
     * https://www.loraitalia.it
     *
     * Generated from protobuf enum <code>MESHLINK = 87;</code>
     */
    const MESHLINK = 87;
    /**
     * Seeed XIAO nRF52840 + Wio SX1262 kit
     *
     * Generated from protobuf enum <code>XIAO_NRF52_KIT = 88;</code>
     */
    const XIAO_NRF52_KIT = 88;
    /**
     * Elecrow ThinkNode M1 & M2
     * https://www.elecrow.com/wiki/ThinkNode-M1_Transceiver_Device(Meshtastic)_Power_By_nRF52840.html
     * https://www.elecrow.com/wiki/ThinkNode-M2_Transceiver_Device(Meshtastic)_Power_By_NRF52840.html (this actually uses ESP32-S3)
     *
     * Generated from protobuf enum <code>THINKNODE_M1 = 89;</code>
     */
    const THINKNODE_M1 = 89;
    /**
     * Generated from protobuf enum <code>THINKNODE_M2 = 90;</code>
     */
    const THINKNODE_M2 = 90;
    /**
     * Lilygo T-ETH-Elite
     *
     * Generated from protobuf enum <code>T_ETH_ELITE = 91;</code>
     */
    const T_ETH_ELITE = 91;
    /**
     * Heltec HRI-3621 industrial probe
     *
     * Generated from protobuf enum <code>HELTEC_SENSOR_HUB = 92;</code>
     */
    const HELTEC_SENSOR_HUB = 92;
    /**
     * Reserved Fried Chicken ID for future use
     *
     * Generated from protobuf enum <code>RESERVED_FRIED_CHICKEN = 93;</code>
     */
    const RESERVED_FRIED_CHICKEN = 93;
    /**
     * Heltec Magnetic Power Bank with Meshtastic compatible
     *
     * Generated from protobuf enum <code>HELTEC_MESH_POCKET = 94;</code>
     */
    const HELTEC_MESH_POCKET = 94;
    /**
     * Seeed Solar Node
     *
     * Generated from protobuf enum <code>SEEED_SOLAR_NODE = 95;</code>
     */
    const SEEED_SOLAR_NODE = 95;
    /**
     * NomadStar Meteor Pro https://nomadstar.ch/
     *
     * Generated from protobuf enum <code>NOMADSTAR_METEOR_PRO = 96;</code>
     */
    const NOMADSTAR_METEOR_PRO = 96;
    /**
     * Elecrow CrowPanel Advance models, ESP32-S3 and TFT with SX1262 radio plugin
     *
     * Generated from protobuf enum <code>CROWPANEL = 97;</code>
     */
    const CROWPANEL = 97;
    /**
     * Lilygo LINK32 board with sensors
     *
     * Generated from protobuf enum <code>LINK_32 = 98;</code>
     */
    const LINK_32 = 98;
    /**
     * Seeed Tracker L1
     *
     * Generated from protobuf enum <code>SEEED_WIO_TRACKER_L1 = 99;</code>
     */
    const SEEED_WIO_TRACKER_L1 = 99;
    /**
     * Seeed Tracker L1 EINK driver
     *
     * Generated from protobuf enum <code>SEEED_WIO_TRACKER_L1_EINK = 100;</code>
     */
    const SEEED_WIO_TRACKER_L1_EINK = 100;
    /**
     * Reserved ID for future and past use
     *
     * Generated from protobuf enum <code>QWANTZ_TINY_ARMS = 101;</code>
     */
    const QWANTZ_TINY_ARMS = 101;
    /**
     * Lilygo T-Deck Pro
     *
     * Generated from protobuf enum <code>T_DECK_PRO = 102;</code>
     */
    const T_DECK_PRO = 102;
    /**
     * Lilygo TLora Pager
     *
     * Generated from protobuf enum <code>T_LORA_PAGER = 103;</code>
     */
    const T_LORA_PAGER = 103;
    /**
     * GAT562 Mesh Trial Tracker
     *
     * Generated from protobuf enum <code>GAT562_MESH_TRIAL_TRACKER = 104;</code>
     */
    const GAT562_MESH_TRIAL_TRACKER = 104;
    /**
     * RAKwireless WisMesh Tag
     *
     * Generated from protobuf enum <code>WISMESH_TAG = 105;</code>
     */
    const WISMESH_TAG = 105;
    /**
     * RAKwireless WisBlock Core RAK3312 https://docs.rakwireless.com/product-categories/wisduo/rak3112-module/overview/
     *
     * Generated from protobuf enum <code>RAK3312 = 106;</code>
     */
    const RAK3312 = 106;
    /**
     * Elecrow ThinkNode M5 https://www.elecrow.com/wiki/ThinkNode_M5_Meshtastic_LoRa_Signal_Transceiver_ESP32-S3.html
     *
     * Generated from protobuf enum <code>THINKNODE_M5 = 107;</code>
     */
    const THINKNODE_M5 = 107;
    /**
     * ------------------------------------------------------------------------------------------------------------------------------------------
     * Reserved ID For developing private Ports. These will show up in live traffic sparsely, so we can use a high number. Keep it within 8 bits.
     * ------------------------------------------------------------------------------------------------------------------------------------------
     *
     * Generated from protobuf enum <code>PRIVATE_HW = 255;</code>
     */
    const PRIVATE_HW = 255;

    private static $valueToName = [
        self::PBUNSET => 'UNSET',
        self::TLORA_V2 => 'TLORA_V2',
        self::TLORA_V1 => 'TLORA_V1',
        self::TLORA_V2_1_1P6 => 'TLORA_V2_1_1P6',
        self::TBEAM => 'TBEAM',
        self::HELTEC_V2_0 => 'HELTEC_V2_0',
        self::TBEAM_V0P7 => 'TBEAM_V0P7',
        self::T_ECHO => 'T_ECHO',
        self::TLORA_V1_1P3 => 'TLORA_V1_1P3',
        self::RAK4631 => 'RAK4631',
        self::HELTEC_V2_1 => 'HELTEC_V2_1',
        self::HELTEC_V1 => 'HELTEC_V1',
        self::LILYGO_TBEAM_S3_CORE => 'LILYGO_TBEAM_S3_CORE',
        self::RAK11200 => 'RAK11200',
        self::NANO_G1 => 'NANO_G1',
        self::TLORA_V2_1_1P8 => 'TLORA_V2_1_1P8',
        self::TLORA_T3_S3 => 'TLORA_T3_S3',
        self::NANO_G1_EXPLORER => 'NANO_G1_EXPLORER',
        self::NANO_G2_ULTRA => 'NANO_G2_ULTRA',
        self::LORA_TYPE => 'LORA_TYPE',
        self::WIPHONE => 'WIPHONE',
        self::WIO_WM1110 => 'WIO_WM1110',
        self::RAK2560 => 'RAK2560',
        self::HELTEC_HRU_3601 => 'HELTEC_HRU_3601',
        self::HELTEC_WIRELESS_BRIDGE => 'HELTEC_WIRELESS_BRIDGE',
        self::STATION_G1 => 'STATION_G1',
        self::RAK11310 => 'RAK11310',
        self::SENSELORA_RP2040 => 'SENSELORA_RP2040',
        self::SENSELORA_S3 => 'SENSELORA_S3',
        self::CANARYONE => 'CANARYONE',
        self::RP2040_LORA => 'RP2040_LORA',
        self::STATION_G2 => 'STATION_G2',
        self::LORA_RELAY_V1 => 'LORA_RELAY_V1',
        self::NRF52840DK => 'NRF52840DK',
        self::PPR => 'PPR',
        self::GENIEBLOCKS => 'GENIEBLOCKS',
        self::NRF52_UNKNOWN => 'NRF52_UNKNOWN',
        self::PORTDUINO => 'PORTDUINO',
        self::ANDROID_SIM => 'ANDROID_SIM',
        self::DIY_V1 => 'DIY_V1',
        self::NRF52840_PCA10059 => 'NRF52840_PCA10059',
        self::DR_DEV => 'DR_DEV',
        self::M5STACK => 'M5STACK',
        self::HELTEC_V3 => 'HELTEC_V3',
        self::HELTEC_WSL_V3 => 'HELTEC_WSL_V3',
        self::BETAFPV_2400_TX => 'BETAFPV_2400_TX',
        self::BETAFPV_900_NANO_TX => 'BETAFPV_900_NANO_TX',
        self::RPI_PICO => 'RPI_PICO',
        self::HELTEC_WIRELESS_TRACKER => 'HELTEC_WIRELESS_TRACKER',
        self::HELTEC_WIRELESS_PAPER => 'HELTEC_WIRELESS_PAPER',
        self::T_DECK => 'T_DECK',
        self::T_WATCH_S3 => 'T_WATCH_S3',
        self::PICOMPUTER_S3 => 'PICOMPUTER_S3',
        self::HELTEC_HT62 => 'HELTEC_HT62',
        self::EBYTE_ESP32_S3 => 'EBYTE_ESP32_S3',
        self::ESP32_S3_PICO => 'ESP32_S3_PICO',
        self::CHATTER_2 => 'CHATTER_2',
        self::HELTEC_WIRELESS_PAPER_V1_0 => 'HELTEC_WIRELESS_PAPER_V1_0',
        self::HELTEC_WIRELESS_TRACKER_V1_0 => 'HELTEC_WIRELESS_TRACKER_V1_0',
        self::UNPHONE => 'UNPHONE',
        self::TD_LORAC => 'TD_LORAC',
        self::CDEBYTE_EORA_S3 => 'CDEBYTE_EORA_S3',
        self::TWC_MESH_V4 => 'TWC_MESH_V4',
        self::NRF52_PROMICRO_DIY => 'NRF52_PROMICRO_DIY',
        self::RADIOMASTER_900_BANDIT_NANO => 'RADIOMASTER_900_BANDIT_NANO',
        self::HELTEC_CAPSULE_SENSOR_V3 => 'HELTEC_CAPSULE_SENSOR_V3',
        self::HELTEC_VISION_MASTER_T190 => 'HELTEC_VISION_MASTER_T190',
        self::HELTEC_VISION_MASTER_E213 => 'HELTEC_VISION_MASTER_E213',
        self::HELTEC_VISION_MASTER_E290 => 'HELTEC_VISION_MASTER_E290',
        self::HELTEC_MESH_NODE_T114 => 'HELTEC_MESH_NODE_T114',
        self::SENSECAP_INDICATOR => 'SENSECAP_INDICATOR',
        self::TRACKER_T1000_E => 'TRACKER_T1000_E',
        self::RAK3172 => 'RAK3172',
        self::WIO_E5 => 'WIO_E5',
        self::RADIOMASTER_900_BANDIT => 'RADIOMASTER_900_BANDIT',
        self::ME25LS01_4Y10TD => 'ME25LS01_4Y10TD',
        self::RP2040_FEATHER_RFM95 => 'RP2040_FEATHER_RFM95',
        self::M5STACK_COREBASIC => 'M5STACK_COREBASIC',
        self::M5STACK_CORE2 => 'M5STACK_CORE2',
        self::RPI_PICO2 => 'RPI_PICO2',
        self::M5STACK_CORES3 => 'M5STACK_CORES3',
        self::SEEED_XIAO_S3 => 'SEEED_XIAO_S3',
        self::MS24SF1 => 'MS24SF1',
        self::TLORA_C6 => 'TLORA_C6',
        self::WISMESH_TAP => 'WISMESH_TAP',
        self::ROUTASTIC => 'ROUTASTIC',
        self::MESH_TAB => 'MESH_TAB',
        self::MESHLINK => 'MESHLINK',
        self::XIAO_NRF52_KIT => 'XIAO_NRF52_KIT',
        self::THINKNODE_M1 => 'THINKNODE_M1',
        self::THINKNODE_M2 => 'THINKNODE_M2',
        self::T_ETH_ELITE => 'T_ETH_ELITE',
        self::HELTEC_SENSOR_HUB => 'HELTEC_SENSOR_HUB',
        self::RESERVED_FRIED_CHICKEN => 'RESERVED_FRIED_CHICKEN',
        self::HELTEC_MESH_POCKET => 'HELTEC_MESH_POCKET',
        self::SEEED_SOLAR_NODE => 'SEEED_SOLAR_NODE',
        self::NOMADSTAR_METEOR_PRO => 'NOMADSTAR_METEOR_PRO',
        self::CROWPANEL => 'CROWPANEL',
        self::LINK_32 => 'LINK_32',
        self::SEEED_WIO_TRACKER_L1 => 'SEEED_WIO_TRACKER_L1',
        self::SEEED_WIO_TRACKER_L1_EINK => 'SEEED_WIO_TRACKER_L1_EINK',
        self::QWANTZ_TINY_ARMS => 'QWANTZ_TINY_ARMS',
        self::T_DECK_PRO => 'T_DECK_PRO',
        self::T_LORA_PAGER => 'T_LORA_PAGER',
        self::GAT562_MESH_TRIAL_TRACKER => 'GAT562_MESH_TRIAL_TRACKER',
        self::WISMESH_TAG => 'WISMESH_TAG',
        self::RAK3312 => 'RAK3312',
        self::THINKNODE_M5 => 'THINKNODE_M5',
        self::PRIVATE_HW => 'PRIVATE_HW',
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
            $pbconst =  __CLASS__. '::PB' . strtoupper($name);
            if (!defined($pbconst)) {
                throw new UnexpectedValueException(sprintf(
                        'Enum %s has no value defined for name %s', __CLASS__, $name));
            }
            return constant($pbconst);
        }
        return constant($const);
    }
}

