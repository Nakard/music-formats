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

use Nakard\MusicFormats\Reader\BinaryReaderAwareInterface;
use Nakard\MusicFormats\Media\Id3v2\Size28BitTrait;
use PhpBinaryReader\BinaryReader;

/**
 * Class AbstractFrame
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
abstract class AbstractFrame implements BinaryReaderAwareInterface
{
    use Size28BitTrait;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var int
     */
    private $flags;

    /**
     * @var string
     */
    private $content;

    /**
     * @param BinaryReader  $reader
     */
    public function __construct(BinaryReader $reader)
    {
        $this->setBinaryReader($reader);
        $this->identifier = '';
        $this->content = '';
        $this->size = 0;
        $this->flags = 0;
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
     */
    public function setFlags($flags)
    {
        if (!is_int($flags)) {
            throw new \InvalidArgumentException('Flags must be an integer');
        }
        $this->flags = $flags;
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
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param int $size
     */
    public function setSize($size)
    {
        if (!is_int($size)) {
            throw new \InvalidArgumentException('Size must be an integer');
        }
        $this->size = $size;
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

    /**
     * @inheritdoc
     */
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;
    }
}
