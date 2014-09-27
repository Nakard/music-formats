<?php
/**
 * FillerEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:46
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class FillerEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class FillerEvent extends AbstractEvent
{
    protected $typeCode = 0xff;
} 