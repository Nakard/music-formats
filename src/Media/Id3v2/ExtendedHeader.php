<?php
/**
 * ExtendedHeader.php
 *
 * Creation date: 2014-09-20
 * Creation time: 01:52
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class ExtendedHeader
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 * //TODO to implement when I got my hands on a file with extended header
 */
class ExtendedHeader
{
    use SizeTrait, FlagTrait;

    /**
     * @var int
     */
    private $paddingSize;

    /**
     * Constructs new extended header
     */
    public function __construct()
    {
        $this->size = 0;
        $this->flags = 0;
        $this->paddingSize = 0;
    }

    /**
     * @return int
     */
    public function getPaddingSize()
    {
        return $this->paddingSize;
    }

    /**
     * @param int $paddingSize
     * @return ExtendedHeader
     */
    public function setPaddingSize($paddingSize)
    {
        if (!is_int($paddingSize)) {
            throw new \InvalidArgumentException('Padding size must be an integer');
        }
        $this->paddingSize = $paddingSize;

        return $this;
    }
}
