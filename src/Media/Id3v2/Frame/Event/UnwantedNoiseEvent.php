<?php
/**
 * UnwantedNoiseEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:40
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class UnwantedNoiseEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class UnwantedNoiseEvent extends AbstractEvent
{
    protected $typeCode = 0x0d;
} 