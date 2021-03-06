<?php
/**
 * Resolver.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:15
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class Resolver
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class Resolver 
{
    /**
     * @var array Mapping of event classes
     */
    private $mapping = [
        0x00 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\PaddingEvent',
        0x01 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\InitialSilenceEndEvent',
        0x02 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\IntroStartEvent',
        0x03 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\MainPartStartEvent',
        0x04 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\OutroStartEvent',
        0x05 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\OutroEndEvent',
        0x06 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\VerseStartEvent',
        0x07 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\RefrainStartEvent',
        0x08 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\InterludeStartEvent',
        0x09 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\ThemeStartEvent',
        0x0a => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\VariationStartEvent',
        0x0b => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\KeyChangeEvent',
        0x0c => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\TimeChangeEvent',
        0x0d => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\UnwantedNoiseEvent',
        0x0e => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\SustainedNoiseEvent',
        0x0f => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\SustainedNoiseEndEvent',
        0x10 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\IntroEndEvent',
        0x11 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\MainPartEndEvent',
        0x12 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\VerseEndEvent',
        0x13 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\RefrainEndEvent',
        0x14 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\ThemeEndEvent',
        0x15 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\ProfanityEvent',
        0x16 => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\ProfanityEndEvent',
        0xfd => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\AudioEndEvent',
        0xfe => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\AudioFileEndEvent',
        0xff => '\\Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\Event\\FillerEvent',
    ];
    /**
     * @param int $typeCode
     *
     * @return AbstractEvent
     */
    public function resolve($typeCode)
    {
        if (!is_int($typeCode)) {
            throw new \InvalidArgumentException('Type code must be an integer');
        }
        if (!isset($this->mapping[$typeCode])) {
            return new UnknownEvent();
        }
        return new $this->mapping[$typeCode]();
    }
} 