<?php
/**
 * FlagTrait.php
 *
 * Creation date: 2014-09-22
 * Creation time: 21:23
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class FlagTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait FlagTrait
{
    /**
     * @var int
     */
    private $flags;

    /**
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * @param int $flags
     *
     * @return ExtendedHeader
     */
    public function setFlags($flags)
    {
        if (!is_int($flags)) {
            throw new \InvalidArgumentException('Flags must be an integer');
        }
        $this->flags = $flags;

        return $this;
    }
} 