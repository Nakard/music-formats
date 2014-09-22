<?php
/**
 * AbstractFrame.php
 *
 * Creation date: 2014-09-20
 * Creation time: 11:38
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\FlagTrait;
use Nakard\MusicFormats\Media\Id3v2\SizeTrait;

/**
 * Class AbstractFrame
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
abstract class AbstractFrame
{
    use SizeTrait, FlagTrait;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var string
     */
    private $content;

    /**
     * Constructs new frame
     */
    public function __construct()
    {
        $this->identifier = '';
        $this->content = '';
        $this->size = 0;
        $this->flags = 0;
    }

    /**
     * @return string
     */
    public function getIdentifier()
    {
        return $this->identifier;
    }

    /**
     * @param string $id
     */
    public function setIdentifier($id)
    {
        if (!is_string($id)) {
            throw new \InvalidArgumentException('Identifier must be a string');
        }
        $this->identifier = $id;
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
     */
    public function setContent($content)
    {
        if (!is_string($content)) {
            throw new \InvalidArgumentException('Content must be a string');
        }
        $this->content = $content;
    }
}
