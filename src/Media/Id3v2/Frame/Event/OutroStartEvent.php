<?php
/**
 * OutroStartEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:36
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class OutroStartEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class OutroStartEvent extends AbstractEvent
{
    protected $typeCode = 0x04;
} 