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

use Nakard\MusicFormats\Media\Id3v2\TagRestrictions;

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
     * @var int
     */
    private $flagBytesNumber;

    /**
     * @var int
     */
    private $crcData;

    /**
     * @var TagRestrictions
     */
    private $tagRestrictions;


    /**
     * Constructs new extended header
     */
    public function __construct()
    {
        $this->size = 0;
        $this->flags = 0;
        $this->paddingSize = 0;
        $this->flagBytesNumber = 0;
        $this->crcData = 0;
        $this->tagRestrictions = new TagRestrictions();
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
     * @throws \InvalidArgumentException
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
    public function getFlagBytesNumber()
    {
        return $this->flagBytesNumber;
    }

    /**
     * @param int $flagBytesNumber
     * @throws \InvalidArgumentException
     * @return ExtendedHeader
     */
    public function setFlagBytesNumber($flagBytesNumber)
    {
        if (!is_int($flagBytesNumber)) {
            throw new \InvalidArgumentException('Flag bytes number must be an integer');
        }
        $this->flagBytesNumber = $flagBytesNumber;

        return $this;
    }

    /**
     * @return int
     */
    public function getCrcData()
    {
        return $this->crcData;
    }

    /**
     * @param int $crcData
     * @throws \InvalidArgumentException
     * @return ExtendedHeader
     */
    public function setCrcData($crcData)
    {
        if (!is_int($crcData)) {
            throw new \InvalidArgumentException('CRC data must be an integer');
        }
        $this->crcData = $crcData;

        return $this;
    }

    /**
     * @return TagRestrictions
     */
    public function getTagRestrictions()
    {
        return $this->tagRestrictions;
    }

    /**
     * @param TagRestrictions $tagRestrictions
     *
     * @return ExtendedHeader
     */
    public function setTagRestrictions(TagRestrictions $tagRestrictions)
    {
        $this->tagRestrictions = $tagRestrictions;

        return $this;
    }

    /**
     * @return bool
     */
    public function hasTagUpdate()
    {
        return (bool) ($this->getFlags() & 0x40);
    }

    /**
     * @return bool
     */
    public function hasCrcData()
    {
        return (bool) ($this->getFlags() & 0x20);
    }

    /**
     * @return bool
     */
    public function hasTagRestrictions()
    {
        return (bool) ($this->getFlags() & 0x10);
    }
}
