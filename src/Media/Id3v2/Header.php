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

use Nakard\MusicFormats\Exception\NotImplementedException;
use PhpBinaryReader\BinaryReader;
use Symfony\Component\HttpFoundation\File\File;

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
     * @param File $file
     * @throws \InvalidArgumentException
     */
    public function __construct(File $file, BinaryReader $binaryReader)
    {
        if ('audio/mpeg' !== $file->getMimeType()) {
            throw new \InvalidArgumentException($file->getFilename() . ' is not an MPEG file');
        }

        $this->setBinaryReader($binaryReader);

        $this->readIdentifier();
        $this->readVersion();
        $this->readRevision();
        $this->readFlags();
        $this->readSize();

        if ($this->isExtendedHeaderUsed()) {
            throw new NotImplementedException('Files with extended header are not yet supported!');
        }
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
     * @param string $identifier
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
    public function setBinaryReader(BinaryReader &$binaryReader)
    {
        $this->reader = $binaryReader;
    }

    /**
     * @return void
     */
    private function readIdentifier()
    {
        $this->identifier = $this->reader->readString(3);
    }

    /**
     * @return void
     */
    private function readVersion()
    {
        $this->version = $this->reader->readUInt8();
    }

    /**
     * @return void
     */
    private function readRevision()
    {
        $this->revision = $this->reader->readUInt8();
    }

    /**
     * @return void
     */
    private function readFlags()
    {
        $this->flags = $this->reader->readUInt8();
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
