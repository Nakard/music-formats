<?php
/**
 * TagRestrictions.php
 *
 * Creation date: 2014-09-23
 * Creation time: 19:08
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

/**
 * Class TagRestrictions
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
class TagRestrictions
{
    use FlagTrait;

    /**
     * @var int
     */
    private $tagSizeRestrictions;

    /**
     * @var int
     */
    private $textEncodingRestrictions;

    /**
     * @var int
     */
    private $textFieldsSizeRestrictions;

    /**
     * @var int
     */
    private $imageEncodingRestrictions;

    /**
     * @var int
     */
    private $imageSizeRestrictions;

    /**
     * Constructs new tag restrictions
     */
    public function __construct()
    {
        $this->tagSizeRestrictions = 0;
        $this->textEncodingRestrictions = 0;
        $this->textFieldsSizeRestrictions = 0;
        $this->imageEncodingRestrictions = 0;
        $this->imageSizeRestrictions = 0;
        $this->flags = 0;
    }

    /**
     * @return int
     */
    public function getImageEncodingRestrictions()
    {
        return $this->imageEncodingRestrictions;
    }

    /**
     * @param int $imageEncodingRestrictions
     *
     * @return TagRestrictions
     */
    public function setImageEncodingRestrictions($imageEncodingRestrictions)
    {
        if (!is_int($imageEncodingRestrictions)) {
            throw new \InvalidArgumentException('Image encoding restrictions must be an integer');
        }
        $this->imageEncodingRestrictions = $imageEncodingRestrictions;

        return $this;
    }

    /**
     * @return int
     */
    public function getImageSizeRestrictions()
    {
        return $this->imageSizeRestrictions;
    }

    /**
     * @param int $imageSizeRestrictions
     *
     * @return TagRestrictions
     */
    public function setImageSizeRestrictions($imageSizeRestrictions)
    {
        if (!is_int($imageSizeRestrictions)) {
            throw new \InvalidArgumentException('Image size restrictions must be an integer');
        }
        $this->imageSizeRestrictions = $imageSizeRestrictions;

        return $this;
    }

    /**
     * @return int
     */
    public function getTagSizeRestrictions()
    {
        return $this->tagSizeRestrictions;
    }

    /**
     * @param int $tagSizeRestrictions
     *
     * @return TagRestrictions
     */
    public function setTagSizeRestrictions($tagSizeRestrictions)
    {
        if (!is_int($tagSizeRestrictions)) {
            throw new \InvalidArgumentException('Tag size restrictions must be an integer');
        }
        $this->tagSizeRestrictions = $tagSizeRestrictions;

        return $this;
    }

    /**
     * @return int
     */
    public function getTextEncodingRestrictions()
    {
        return $this->textEncodingRestrictions;
    }

    /**
     * @param int $textEncodingRestrictions
     *
     * @return TagRestrictions
     */
    public function setTextEncodingRestrictions($textEncodingRestrictions)
    {
        if (!is_int($textEncodingRestrictions)) {
            throw new \InvalidArgumentException('Text encoding restrictions must be an integer');
        }
        $this->textEncodingRestrictions = $textEncodingRestrictions;

        return $this;
    }

    /**
     * @return int
     */
    public function getTextFieldsSizeRestrictions()
    {
        return $this->textFieldsSizeRestrictions;
    }

    /**
     * @param int $textFieldsSizeRestrictions
     *
     * @return TagRestrictions
     */
    public function setTextFieldsSizeRestrictions($textFieldsSizeRestrictions)
    {
        if (!is_int($textFieldsSizeRestrictions)) {
            throw new \InvalidArgumentException('Text fields size restrictions must be an integer');
        }
        $this->textFieldsSizeRestrictions = $textFieldsSizeRestrictions;

        return $this;
    }

    /**
     * @param int $flags
     *
     * @throws \InvalidArgumentException
     * @return TagRestrictions
     */
    public function setFlags($flags)
    {
        if (!is_int($flags)) {
            throw new \InvalidArgumentException('Flags must be an integer');
        }
        $this->flags = $flags;
        $this->setTagSizeRestrictions(($this->getFlags() & 0b11000000) >> 6);
        $this->setTextEncodingRestrictions(($this->getFlags() & 0b00100000) >> 5);
        $this->setTextFieldsSizeRestrictions(($this->getFlags() & 0b00011000) >> 3);
        $this->setImageEncodingRestrictions(($this->getFlags() & 0b00000100) >> 2);
        $this->setImageSizeRestrictions($this->getFlags() & 0b00000011);

        return $this;
    }
} 