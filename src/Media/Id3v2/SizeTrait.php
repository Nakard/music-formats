<?php
/**
 * SizeTrait.php
 *
 * Creation date: 2014-09-20
 * Creation time: 14:04
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class SizeTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait SizeTrait
{
    /**
     * @var int
     */
    private $size;

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setSize($size)
    {
        if (!is_int($size)) {
            throw new \InvalidArgumentException('Size must be an integer');
        }
        $this->size = $size;

        return $this;
    }
} 