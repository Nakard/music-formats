<?php
/**
 * IntroStartEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:33
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class IntroStartEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class IntroStartEvent extends AbstractEvent
{
    protected $typeCode = 0x02;
} 