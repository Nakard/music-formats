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

use Nakard\MusicFormats\Media\Id3v2\TextEncodingTrait;

/**
 * Class UnsynchronisedLyricsTranscription
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class UnsynchronisedLyricsTranscription extends AbstractFrame
{
    use TextEncodingTrait;

    protected $identifier = 'USLT';

    /**
     * @var int
     */
    private $language;

    /**
     * @var string
     */
    private $contentDescriptor;

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

    /**
     * @return int
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * @param int $language
     */
    public function setLanguage($language)
    {
        if (!is_int($language)) {
            throw new \InvalidArgumentException('Language must be an integer');
        }
        $this->language = $language;

        return $this;
    }

    /**
     * @return string
     */
    public function getContentDescriptor()
    {
        return $this->contentDescriptor;
    }

    /**
     * @param string $contentDescriptor
     */
    public function setContentDescriptor($contentDescriptor)
    {
        if (!is_string($contentDescriptor)) {
            throw new \InvalidArgumentException('Content descriptor must be a string');
        }
        $this->contentDescriptor = $contentDescriptor;

        return $this;
    }
}
 