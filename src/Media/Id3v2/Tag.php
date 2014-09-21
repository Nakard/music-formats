<?php
/**
 * Tag.php
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
use Nakard\MusicFormats\Media\Id3v2\Frame\Resolver;
use Nakard\MusicFormats\Reader\BinaryReaderAwareInterface;

/**
 * Class Tag
 *
 * @package  Nakard\Media\Id3v2
 */
class Tag implements BinaryReaderAwareInterface
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
     * @var Resolver
     */
    private $resolver;

    /**
     * @param File $file
     */
    public function __construct()
    {
        $this->header = new Header();
        $this->extendedHeader = new ExtendedHeader();
        $this->resolver = new Resolver($this->getBinaryReader());
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
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;
    }

    /**
     * @param AbstractFrame $frame
     */
    public function addFrame(AbstractFrame $frame)
    {
        $this->frames[] = $frame;
    }

    /**
     * @return ArrayCollection
     */
    public function getFrames()
    {
        return $this->frames;
    }

    /**
     * @return Resolver
     */
    public function getResolver()
    {
        return $this->resolver;
    }

    /**
     * @param Resolver $resolver
     */
    public function setResolver(Resolver $resolver)
    {
        $this->resolver = $resolver;
    }
}
