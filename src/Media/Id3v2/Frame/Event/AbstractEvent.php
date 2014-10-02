<?php
/**
 * AbstractEvent.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:23
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\TimestampTrait;

/**
 * Class AbstractEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class AbstractEvent
{
    use TimestampTrait;

    /**
     * @var int
     */
    protected $typeCode;

    /**
     * Creates new event
     */
    public function __construct()
    {
        $this->timestamp = 0x00000000;
    }

    /**
     * @return int
     */
    public function getTypeCode()
    {
        return $this->typeCode;
    }
}
