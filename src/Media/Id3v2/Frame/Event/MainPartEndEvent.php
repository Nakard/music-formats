<?php
/**
 * MainPartEndEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:41
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class MainPartEndEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class MainPartEndEvent extends AbstractEvent
{
    protected $typeCode = 0x11;
} 