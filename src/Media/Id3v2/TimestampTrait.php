<?php
/**
 * TimestampTrait.php
 *
 * Creation date: 2014-10-02
 * Creation time: 19:34
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class TimestampTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait TimestampTrait
{
    /**
     * @var int
     */
    protected $timestamp;

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
     * @return $this
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
