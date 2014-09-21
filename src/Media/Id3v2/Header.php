<?php
/**
 * Header.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:46
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use PhpBinaryReader\BinaryReader;
use Nakard\MusicFormats\Reader\BinaryReaderAwareInterface;

/**
 * Class Header
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
class Header implements BinaryReaderAwareInterface
{
    use Size28BitTrait;

    /**
     * @var string
     */
    private $identifier;

    /**
     * @var int
     */
    private $version;

    /**
     * @var int
     */
    private $revision;

    /**
     * @var int
     */
    private $flags;

    /**
     * Constructs new ID3v2 header
     */
    public function __construct()
    {
        $this->identifier = 'ID3';
        $this->version = 0;
        $this->revision = 0;
        $this->flags = 0;
        $this->size = 0;
    }

    /**
     * @return int
     */
    public function getFlags()
    {
        return $this->flags;
    }

    /**
     * @param $flags
     * @throws \InvalidArgumentException
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
     * @param string $identifier
     * @throws \InvalidArgumentException
     */
    public function setIdentifier($identifier)
    {
        if (!is_string($identifier)) {
            throw new \InvalidArgumentException('Identifier must be a string');
        }
        $this->identifier = $identifier;
    }

    /**
     * @return int
     */
    public function getRevision()
    {
        return $this->revision;
    }

    /**
     * @param int $revision
     * @throws \InvalidArgumentException
     */
    public function setRevision($revision)
    {
        if (!is_int($revision)) {
            throw new \InvalidArgumentException('Revision must be an integer');
        }
        $this->revision = $revision;
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
     * @throws \InvalidArgumentException
     */
    public function setSize($size)
    {
        if (!is_int($size)) {
            throw new \InvalidArgumentException('Size must be an integer');
        }
        $this->size = $size;
    }

    /**
     * @return int
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * @param int $version
     * @throws \InvalidArgumentException
     */
    public function setVersion($version)
    {
        if (!is_int($version)) {
            throw new \InvalidArgumentException('Version must be an integer');
        }
        $this->version = $version;
    }

    /**
     * @inheritdoc
     */
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;
    }

    /**
     * @return bool
     */
    public function isUnsynchronized()
    {
        return (bool) ($this->flags & 0x80);
    }

    /**
     * @return bool
     */
    public function isExtendedHeaderUsed()
    {
        return (bool) ($this->flags & 0x40);
    }

    /**
     * @return bool
     */
    public function isExperimentalSet()
    {
        return (bool) ($this->flags & 0x20);
    }

    /**
     * @return bool
     */
    public function isFooterSet()
    {
        return (bool) ($this->flags & 0x10);
    }
}
