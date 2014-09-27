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
     * @param int $typeCode
     *
     * @return AbstractEvent
     */
    public function resolve($typeCode)
    {
        if (!is_int($typeCode)) {
            throw new \InvalidArgumentException('Type code must be an integer');
        }
        switch ($typeCode) {
            case 0x00:
                return new PaddingEvent();
            case 0x01:
                return new InitialSilenceEndEvent();
            case 0x02:
                return new IntroStartEvent();
            case 0x03:
                return new MainPartStartEvent();
            case 0x04:
                return new OutroStartEvent();
            case 0x05:
                return new OutroEndEvent();
            case 0x06:
                return new VerseStartEvent();
            case 0x07:
                return new RefrainStartEvent();
            case 0x08:
                return new InterludeStartEvent();
            case 0x09:
                return new ThemeStartEvent();
            case 0x0a:
                return new VariationStartEvent();
            case 0x0b:
                return new KeyChangeEvent();
            case 0x0c:
                return new TimeChangeEvent();
            case 0x0d:
                return new UnwantedNoiseEvent();
            case 0x0e:
                return new SustainedNoiseEvent();
            case 0x0f:
                return new SustainedNoiseEndEvent();
            case 0x10:
                return new IntroEndEvent();
            case 0x11:
                return new MainPartEndEvent();
            case 0x12:
                return new VerseEndEvent();
            case 0x13:
                return new RefrainEndEvent();
            case 0x14:
                return new ThemeEndEvent();
            case 0x15:
                return new ProfanityEvent();
            case 0x16:
                return new ProfanityEndEvent();
            case 0xfd:
                return new AudioEndEvent();
            case 0xfe:
                return new AudioFileEndEvent();
            case 0xff:
                return new FillerEvent();
            default:
                return new UnknownEvent();
        }
    }
} 