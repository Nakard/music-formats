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

use Symfony\Component\HttpFoundation\File\File;
use PhpBinaryReader\BinaryReader;
use PhpBinaryReader\Endian;
use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame;
use Nakard\MusicFormats\Media\Id3v2\Frame\FrameResolver;

/**
 * Class Object
 *
 * @package  Nakard\Media\Id3v2
 */
class Object
{
    /**
     * @var Header
     */
    private $header;

    /**
     * @var BinaryReader
     */
    private $reader;

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
    public function __construct(File $file)
    {
        if ('audio/mpeg' !== $file->getMimeType()) {
            throw new \InvalidArgumentException($file->getFilename() . ' is not an MPEG file');
        }
        $this->createBinaryReader($file);

        $this->header = new Header($file, $this->reader);
        $this->frameResolver = new FrameResolver($this->reader);
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
     * @return BinaryReader
     */
    public function getReader()
    {
        return $this->reader;
    }

    /**
     * @param File $file
     *
     * @return BinaryReader
     */
    private function createBinaryReader(File $file)
    {
        $handle = fopen($file->getRealPath(), 'rb+');
        $this->reader = new BinaryReader($handle, Endian::ENDIAN_BIG);
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
