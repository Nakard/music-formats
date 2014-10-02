<?php
/**
 * UnsynchronisedLyricsTranscription.php
 *
 * Creation date: 2014-09-28
 * Creation time: 16:55
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\ContentDescriptorTrait;
use Nakard\MusicFormats\Media\Id3v2\LanguageTrait;
use Nakard\MusicFormats\Media\Id3v2\TextEncodingTrait;

/**
 * Class UnsynchronisedLyricsTranscription
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class UnsynchronisedLyricsTranscription extends AbstractFrame
{
    use TextEncodingTrait, LanguageTrait, ContentDescriptorTrait;

    protected $identifier = 'USLT';

    /**
     * @var string
     */
    private $lyrics;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();
        $this->language = 0x000000;
        $this->contentDescriptor = '';
        $this->lyrics = '';
        $this->textEncoding = 0x00;
    }

    /**
     * @return string
     */
    public function getLyrics()
    {
        return $this->lyrics;
    }

    /**
     * @param   string $lyrics
     * @throws  \InvalidArgumentException
     * @return  $this
     */
    public function setLyrics($lyrics)
    {
        if (!is_string($lyrics)) {
            throw new \InvalidArgumentException('Lyrics must be a string');
        }
        $this->lyrics = $lyrics;

        return $this;
    }
}
 