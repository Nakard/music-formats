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
use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame;
use Nakard\MusicFormats\Media\Id3v2\Frame\Resolver;

/**
 * Class Tag
 *
 * @package Nakard\Media\Id3v2
 */
class Tag
{
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
     * Constructs new tag
     */
    public function __construct()
    {
        $this->header = new Header();
        $this->extendedHeader = new ExtendedHeader();
        $this->resolver = new Resolver();
        $this->frames = new ArrayCollection();
    }

    /**
     * @param Header $header
     *
     * @return Tag
     */
    public function setHeader(Header $header)
    {
        $this->header = $header;

        return $this;
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
     *
     * @return Tag
     */
    public function setExtendedHeader(ExtendedHeader $extendedHeader)
    {
        $this->extendedHeader = $extendedHeader;

        return $this;
    }

    /**
     * @return ExtendedHeader
     */
    public function getExtendedHeader()
    {
        return $this->extendedHeader;
    }

    /**
     * @param AbstractFrame $frame
     *
     * @return Tag
     */
    public function addFrame(AbstractFrame $frame)
    {
        $this->frames[] = $frame;

        return $this;
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
     *
     * @return Tag
     */
    public function setResolver(Resolver $resolver)
    {
        $this->resolver = $resolver;

        return $this;
    }
}
