<?php
/**
 * Object.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:25
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use Doctrine\Common\Collections\ArrayCollection;
use Nakard\MusicFormats\Reader\BinaryTrait;
use Symfony\Component\HttpFoundation\File\File;
use PhpBinaryReader\BinaryReader;
use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame;
use Nakard\MusicFormats\Media\Id3v2\Frame\FrameResolver;
use Nakard\MusicFormats\Reader\BinaryReaderAwareInterface;

/**
 * Class Object
 *
 * @package  Nakard\Media\Id3v2
 */
class Object implements BinaryReaderAwareInterface
{
    use BinaryTrait;

    /**
     * @var Header
     */
    private $header;

    /**
     * @var ExtendedHeader
     */
    private $extendedHeader;

    /**
     * @var AbstractFrame[]
     */
    private $frames;

    /**
     * @var FrameResolver
     */
    private $frameResolver;

    /**
     * @param File $file
     */
    public function __construct(BinaryReader &$binaryReader)
    {
        $this->setBinaryReader($binaryReader);
        $this->header = new Header($this->getBinaryReader());
        $this->extendedHeader = new ExtendedHeader($this->getBinaryReader());
        $this->frameResolver = new FrameResolver($this->getBinaryReader());
        $this->frames = new ArrayCollection();
    }

    /**
     * @param Header $header
     */
    public function setHeader(Header $header)
    {
        $this->header = $header;
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * @param ExtendedHeader $extendedHeader
     */
    public function setExtendedHeader(ExtendedHeader $extendedHeader)
    {
        $this->extendedHeader = $extendedHeader;
    }

    /**
     * @return ExtendedHeader
     */
    public function getExtendedHeader()
    {
        return $this->extendedHeader;
    }

    /**
     * @inheritdoc
     */
    public function setBinaryReader(BinaryReader &$binaryReader)
    {
        $this->reader = $binaryReader;
    }

    /**
     * @param AbstractFrame $frame
     */
    public function addFrame(AbstractFrame $frame)
    {
        $this->frames[] = $frame;
    }

    /**
     * @return AbstractFrame[]
     */
    public function getFrames()
    {
        return $this->frames;
    }
}
