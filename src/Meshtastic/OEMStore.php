<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: meshtastic/deviceonly.proto

namespace Meshtastic;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * This can be used for customizing the firmware distribution. If populated,
 * show a secondary bootup screen with custom logo and text for 2.5 seconds.
 *
 * Generated from protobuf message <code>meshtastic.OEMStore</code>
 */
class OEMStore extends \Google\Protobuf\Internal\Message
{
    /**
     * The Logo width in Px
     *
     * Generated from protobuf field <code>uint32 oem_icon_width = 1;</code>
     */
    protected $oem_icon_width = 0;
    /**
     * The Logo height in Px
     *
     * Generated from protobuf field <code>uint32 oem_icon_height = 2;</code>
     */
    protected $oem_icon_height = 0;
    /**
     * The Logo in XBM bytechar format
     *
     * Generated from protobuf field <code>bytes oem_icon_bits = 3;</code>
     */
    protected $oem_icon_bits = '';
    /**
     * Use this font for the OEM text.
     *
     * Generated from protobuf field <code>.meshtastic.ScreenFonts oem_font = 4;</code>
     */
    protected $oem_font = 0;
    /**
     * Use this font for the OEM text.
     *
     * Generated from protobuf field <code>string oem_text = 5;</code>
     */
    protected $oem_text = '';
    /**
     * The default device encryption key, 16 or 32 byte
     *
     * Generated from protobuf field <code>bytes oem_aes_key = 6;</code>
     */
    protected $oem_aes_key = '';
    /**
     * A Preset LocalConfig to apply during factory reset
     *
     * Generated from protobuf field <code>.meshtastic.LocalConfig oem_local_config = 7;</code>
     */
    protected $oem_local_config = null;
    /**
     * A Preset LocalModuleConfig to apply during factory reset
     *
     * Generated from protobuf field <code>.meshtastic.LocalModuleConfig oem_local_module_config = 8;</code>
     */
    protected $oem_local_module_config = null;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type int $oem_icon_width
     *           The Logo width in Px
     *     @type int $oem_icon_height
     *           The Logo height in Px
     *     @type string $oem_icon_bits
     *           The Logo in XBM bytechar format
     *     @type int $oem_font
     *           Use this font for the OEM text.
     *     @type string $oem_text
     *           Use this font for the OEM text.
     *     @type string $oem_aes_key
     *           The default device encryption key, 16 or 32 byte
     *     @type \Meshtastic\LocalConfig $oem_local_config
     *           A Preset LocalConfig to apply during factory reset
     *     @type \Meshtastic\LocalModuleConfig $oem_local_module_config
     *           A Preset LocalModuleConfig to apply during factory reset
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Meshtastic\Deviceonly::initOnce();
        parent::__construct($data);
    }

    /**
     * The Logo width in Px
     *
     * Generated from protobuf field <code>uint32 oem_icon_width = 1;</code>
     * @return int
     */
    public function getOemIconWidth()
    {
        return $this->oem_icon_width;
    }

    /**
     * The Logo width in Px
     *
     * Generated from protobuf field <code>uint32 oem_icon_width = 1;</code>
     * @param int $var
     * @return $this
     */
    public function setOemIconWidth($var)
    {
        GPBUtil::checkUint32($var);
        $this->oem_icon_width = $var;

        return $this;
    }

    /**
     * The Logo height in Px
     *
     * Generated from protobuf field <code>uint32 oem_icon_height = 2;</code>
     * @return int
     */
    public function getOemIconHeight()
    {
        return $this->oem_icon_height;
    }

    /**
     * The Logo height in Px
     *
     * Generated from protobuf field <code>uint32 oem_icon_height = 2;</code>
     * @param int $var
     * @return $this
     */
    public function setOemIconHeight($var)
    {
        GPBUtil::checkUint32($var);
        $this->oem_icon_height = $var;

        return $this;
    }

    /**
     * The Logo in XBM bytechar format
     *
     * Generated from protobuf field <code>bytes oem_icon_bits = 3;</code>
     * @return string
     */
    public function getOemIconBits()
    {
        return $this->oem_icon_bits;
    }

    /**
     * The Logo in XBM bytechar format
     *
     * Generated from protobuf field <code>bytes oem_icon_bits = 3;</code>
     * @param string $var
     * @return $this
     */
    public function setOemIconBits($var)
    {
        GPBUtil::checkString($var, False);
        $this->oem_icon_bits = $var;

        return $this;
    }

    /**
     * Use this font for the OEM text.
     *
     * Generated from protobuf field <code>.meshtastic.ScreenFonts oem_font = 4;</code>
     * @return int
     */
    public function getOemFont()
    {
        return $this->oem_font;
    }

    /**
     * Use this font for the OEM text.
     *
     * Generated from protobuf field <code>.meshtastic.ScreenFonts oem_font = 4;</code>
     * @param int $var
     * @return $this
     */
    public function setOemFont($var)
    {
        GPBUtil::checkEnum($var, \Meshtastic\ScreenFonts::class);
        $this->oem_font = $var;

        return $this;
    }

    /**
     * Use this font for the OEM text.
     *
     * Generated from protobuf field <code>string oem_text = 5;</code>
     * @return string
     */
    public function getOemText()
    {
        return $this->oem_text;
    }

    /**
     * Use this font for the OEM text.
     *
     * Generated from protobuf field <code>string oem_text = 5;</code>
     * @param string $var
     * @return $this
     */
    public function setOemText($var)
    {
        GPBUtil::checkString($var, True);
        $this->oem_text = $var;

        return $this;
    }

    /**
     * The default device encryption key, 16 or 32 byte
     *
     * Generated from protobuf field <code>bytes oem_aes_key = 6;</code>
     * @return string
     */
    public function getOemAesKey()
    {
        return $this->oem_aes_key;
    }

    /**
     * The default device encryption key, 16 or 32 byte
     *
     * Generated from protobuf field <code>bytes oem_aes_key = 6;</code>
     * @param string $var
     * @return $this
     */
    public function setOemAesKey($var)
    {
        GPBUtil::checkString($var, False);
        $this->oem_aes_key = $var;

        return $this;
    }

    /**
     * A Preset LocalConfig to apply during factory reset
     *
     * Generated from protobuf field <code>.meshtastic.LocalConfig oem_local_config = 7;</code>
     * @return \Meshtastic\LocalConfig|null
     */
    public function getOemLocalConfig()
    {
        return $this->oem_local_config;
    }

    public function hasOemLocalConfig()
    {
        return isset($this->oem_local_config);
    }

    public function clearOemLocalConfig()
    {
        unset($this->oem_local_config);
    }

    /**
     * A Preset LocalConfig to apply during factory reset
     *
     * Generated from protobuf field <code>.meshtastic.LocalConfig oem_local_config = 7;</code>
     * @param \Meshtastic\LocalConfig $var
     * @return $this
     */
    public function setOemLocalConfig($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\LocalConfig::class);
        $this->oem_local_config = $var;

        return $this;
    }

    /**
     * A Preset LocalModuleConfig to apply during factory reset
     *
     * Generated from protobuf field <code>.meshtastic.LocalModuleConfig oem_local_module_config = 8;</code>
     * @return \Meshtastic\LocalModuleConfig|null
     */
    public function getOemLocalModuleConfig()
    {
        return $this->oem_local_module_config;
    }

    public function hasOemLocalModuleConfig()
    {
        return isset($this->oem_local_module_config);
    }

    public function clearOemLocalModuleConfig()
    {
        unset($this->oem_local_module_config);
    }

    /**
     * A Preset LocalModuleConfig to apply during factory reset
     *
     * Generated from protobuf field <code>.meshtastic.LocalModuleConfig oem_local_module_config = 8;</code>
     * @param \Meshtastic\LocalModuleConfig $var
     * @return $this
     */
    public function setOemLocalModuleConfig($var)
    {
        GPBUtil::checkMessage($var, \Meshtastic\LocalModuleConfig::class);
        $this->oem_local_module_config = $var;

        return $this;
    }

}

