<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/config.proto

namespace Meshtastic\Config\LoRaConfig;

use UnexpectedValueException;

/**
 * Protobuf type <code>meshtastic.Config.LoRaConfig.RegionCode</code>
 */
class RegionCode
{
    /**
     * Region is not set
     *
     * Generated from protobuf enum <code>UNSET = 0;</code>
     */
    const PBUNSET = 0;
    /**
     * United States
     *
     * Generated from protobuf enum <code>US = 1;</code>
     */
    const US = 1;
    /**
     * European Union 433mhz
     *
     * Generated from protobuf enum <code>EU_433 = 2;</code>
     */
    const EU_433 = 2;
    /**
     * European Union 868mhz
     *
     * Generated from protobuf enum <code>EU_868 = 3;</code>
     */
    const EU_868 = 3;
    /**
     * China
     *
     * Generated from protobuf enum <code>CN = 4;</code>
     */
    const CN = 4;
    /**
     * Japan
     *
     * Generated from protobuf enum <code>JP = 5;</code>
     */
    const JP = 5;
    /**
     * Australia / New Zealand
     *
     * Generated from protobuf enum <code>ANZ = 6;</code>
     */
    const ANZ = 6;
    /**
     * Korea
     *
     * Generated from protobuf enum <code>KR = 7;</code>
     */
    const KR = 7;
    /**
     * Taiwan
     *
     * Generated from protobuf enum <code>TW = 8;</code>
     */
    const TW = 8;
    /**
     * Russia
     *
     * Generated from protobuf enum <code>RU = 9;</code>
     */
    const RU = 9;
    /**
     * India
     *
     * Generated from protobuf enum <code>IN = 10;</code>
     */
    const IN = 10;
    /**
     * New Zealand 865mhz
     *
     * Generated from protobuf enum <code>NZ_865 = 11;</code>
     */
    const NZ_865 = 11;
    /**
     * Thailand
     *
     * Generated from protobuf enum <code>TH = 12;</code>
     */
    const TH = 12;
    /**
     * WLAN Band
     *
     * Generated from protobuf enum <code>LORA_24 = 13;</code>
     */
    const LORA_24 = 13;
    /**
     * Ukraine 433mhz
     *
     * Generated from protobuf enum <code>UA_433 = 14;</code>
     */
    const UA_433 = 14;
    /**
     * Ukraine 868mhz
     *
     * Generated from protobuf enum <code>UA_868 = 15;</code>
     */
    const UA_868 = 15;
    /**
     * Malaysia 433mhz
     *
     * Generated from protobuf enum <code>MY_433 = 16;</code>
     */
    const MY_433 = 16;
    /**
     * Malaysia 919mhz
     *
     * Generated from protobuf enum <code>MY_919 = 17;</code>
     */
    const MY_919 = 17;
    /**
     * Singapore 923mhz
     *
     * Generated from protobuf enum <code>SG_923 = 18;</code>
     */
    const SG_923 = 18;

    private static $valueToName = [
        self::PBUNSET => 'UNSET',
        self::US => 'US',
        self::EU_433 => 'EU_433',
        self::EU_868 => 'EU_868',
        self::CN => 'CN',
        self::JP => 'JP',
        self::ANZ => 'ANZ',
        self::KR => 'KR',
        self::TW => 'TW',
        self::RU => 'RU',
        self::IN => 'IN',
        self::NZ_865 => 'NZ_865',
        self::TH => 'TH',
        self::LORA_24 => 'LORA_24',
        self::UA_433 => 'UA_433',
        self::UA_868 => 'UA_868',
        self::MY_433 => 'MY_433',
        self::MY_919 => 'MY_919',
        self::SG_923 => 'SG_923',
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

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(RegionCode::class, \Meshtastic\Config_LoRaConfig_RegionCode::class);

