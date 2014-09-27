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

/**
 * Class AbstractEvent
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Event
 */
class AbstractEvent 
{
    /**
     * @var int
     */
    protected $timestamp;

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

    /**
     * @return int
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param int $timestamp
     * @throws \InvalidArgumentException
     * @return AbstractEvent
     */
    public function setTimestamp($timestamp)
    {
        if (!is_int($timestamp)) {
            throw new \InvalidArgumentException('Timestamp must be an integer');
        }
        $this->timestamp = $timestamp;

        return $this;
    }


} 