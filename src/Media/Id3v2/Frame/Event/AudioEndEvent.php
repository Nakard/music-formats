<?php
/**
 * AudioEndEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:44
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class AudioEndEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class AudioEndEvent extends AbstractEvent
{
    protected $typeCode = 0xfd;
} 