<?php
/**
 * RefrainStartEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:37
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class RefrainStartEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class RefrainStartEvent extends AbstractEvent
{
    protected $typeCode = 0x07;
} 