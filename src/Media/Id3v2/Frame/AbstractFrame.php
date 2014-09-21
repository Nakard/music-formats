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
     * @var int
     */
    private $id;

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
     * @param string        $identifier
     */
    public function __construct(BinaryReader $reader, $identifier)
    {
        $this->setBinaryReader($reader);
        $this->setId($identifier);
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
        $this->flags = $flags;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
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
        $this->size = $size;
    }

    /**
     * @inheritdoc
     */
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;
    }

    /**
     * @return void
     */
    private function readFlags()
    {
        $this->setFlags($this->binaryReader->readUInt16());
    }
}
