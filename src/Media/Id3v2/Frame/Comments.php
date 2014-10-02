<?php
/**
 * Comments.php
 *
 * Creation date: 2014-09-28
 * Creation time: 18:53
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\LanguageTrait;
use Nakard\MusicFormats\Media\Id3v2\TextEncodingTrait;

/**
 * Class Comments
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class Comments extends AbstractFrame
{
    use TextEncodingTrait, LanguageTrait;

    protected $identifier = 'COMM';

    /**
     * @var string
     */
    private $contentDescription;

    /**
     * @var string
     */
    private $content;

    /**
     * @inheritdoc
     */
    public function __construct()
    {
        parent::__construct();
        $this->content = '';
        $this->contentDescription = '';
        $this->textEncoding = 0x00;
        $this->language = 0x000000;
    }

    /**
     * @return string
     */
    public function getContentDescription()
    {
        return $this->contentDescription;
    }

    /**
     * @param string $contentDescription
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContentDescription($contentDescription)
    {
        if (!is_string($contentDescription)) {
            throw new \InvalidArgumentException('Content description must be a string');
        }
        $this->contentDescription = $contentDescription;

        return $this;
    }

    /**
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param string $content
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setContent($content)
    {
        if (!is_string($content)) {
            throw new \InvalidArgumentException('Content must be a string');
        }
        $this->content = $content;

        return $this;
    }
}
