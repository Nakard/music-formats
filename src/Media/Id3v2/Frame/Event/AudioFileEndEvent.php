<?php
/**
 * AudioFileEndEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:44
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

/**
 * Class AudioFileEndEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class AudioFileEndEvent extends AbstractEvent
{
    protected $typeCode = 0xfe;
} 