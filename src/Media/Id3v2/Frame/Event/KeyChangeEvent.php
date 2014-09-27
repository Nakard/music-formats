<?php
/**
 * KeyChangeEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:39
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class KeyChangeEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class KeyChangeEvent extends AbstractEvent
{
    protected $typeCode = 0x0b;
} 