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

use PhpBinaryReader\BinaryReader;
use Nakard\MusicFormats\Reader\BinaryReaderAwareInterface;

/**
 * Class ExtendedHeader
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 * //TODO to implement when I got my hands on a file with extended header
 */
class ExtendedHeader implements BinaryReaderAwareInterface
{
    use Size28BitTrait;

    /**
     * @var int
     */
    private $flags;

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
     * @param BinaryReader $binaryReader
     * @return ExtendedHeader
     */
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;

        return $this;
    }

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

    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     * @return ExtendedHeader
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
