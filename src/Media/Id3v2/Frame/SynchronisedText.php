<?php
/**
 * SynchronisedText.php
 *
 * Creation date: 2014-09-28
 * Creation time: 18:52
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\ContentDescriptorTrait;
use Nakard\MusicFormats\Media\Id3v2\LanguageTrait;
use Nakard\MusicFormats\Media\Id3v2\TextEncodingTrait;
use Nakard\MusicFormats\Media\Id3v2\TimestampFormatTrait;

/**
 * Class SynchronisedText
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class SynchronisedText extends AbstractFrame
{
    use TextEncodingTrait, LanguageTrait, TimestampFormatTrait, ContentDescriptorTrait;

    protected $identifier = 'SYLT';

    /**
     * @var int
     */
    private $contentType;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();
        $this->textEncoding = 0x00;
        $this->language = 0x000000;
        $this->timestampFormat = 0x00;
        $this->contentType = 0x00;
        $this->contentDescriptor = '';
    }

    /**
     * @return int
     */
    public function getContentType()
    {
        return $this->contentType;
    }

    /**
     * @param int $contentType
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContentType($contentType)
    {
        if (!is_int($contentType)) {
            throw new \InvalidArgumentException('Content type must be an integer');
        }
        $this->contentType = $contentType;

        return $this;
    }
}
 