<?php
/**
 * ThemeStartEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:38
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class ThemeStartEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class ThemeStartEvent extends AbstractEvent
{
    protected $typeCode = 0x09;
} 