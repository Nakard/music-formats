<?php
/**
 * TimestampFormatTrait.php
 *
 * Creation date: 2014-09-28
 * Creation time: 16:33
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class TimestampFormatTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait TimestampFormatTrait 
{
    /**
     * @var integer
     */
    private $timestampFormat;

    /**
     * @return int
     */
    public function getTimestampFormat()
    {
        return $this->timestampFormat;
    }

    /**
     * @param int $timestampFormat
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTimestampFormat($timestampFormat)
    {
        if (!is_int($timestampFormat)) {
            throw new \InvalidArgumentException('Timestamp format must be an integer');
        }
        $this->timestampFormat = $timestampFormat;

        return $this;
    }
}
 