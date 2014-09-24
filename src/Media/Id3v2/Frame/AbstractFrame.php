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
    protected $identifier = '';

    /**
     * Constructs new frame
     */
    public function __construct()
    {
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
     * @return bool
     */
    public function shouldBeDiscardedWithTagAlteration()
    {
        return (bool) ($this->getFlags() & 0x4000);
    }

    /**
     * @return bool
     */
    public function shouldBeDiscardedWithFileAlteration()
    {
        return (bool) ($this->getFlags() & 0x2000);
    }

    /**
     * @return bool
     */
    public function isReadOnly()
    {
        return (bool) ($this->getFlags() & 0x1000);
    }

    /**
     * @return bool
     */
    public function containsGroupInformation()
    {
        return (bool) ($this->getFlags() & 0x0040);
    }

    /**
     * @return bool
     */
    public function isCompressed()
    {
        return (bool) ($this->getFlags() & 0x0008);
    }

    /**
     * @return bool
     */
    public function isEncrypted()
    {
        return (bool) ($this->getFlags() & 0x0004);
    }

    /**
     * @return bool
     */
    public function isUnsynchronized()
    {
        return (bool) ($this->getFlags() & 0x0002);
    }

    /**
     * @return bool
     */
    public function hasDataLengthIndicator()
    {
        return (bool) ($this->getFlags() & 0x0001);
    }
}
