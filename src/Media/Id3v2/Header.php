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
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class Header
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
class Header
{
    const TAG_SIZE_BYTE_LENGTH = 4;

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
     * @var int
     */
    private $size;

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
        $this->version = $version;
    }

    /**
     * @var BinaryReader
     */
    private $reader;

    /**
     * @param File $file
     * @throws \InvalidArgumentException
     */
    public function __construct(File $file)
    {
        if ('audio/mpeg' !== $file->getMimeType()) {
            throw new \InvalidArgumentException($file->getFilename() . ' is not an MPEG file');
        }

        $this->reader = $this->createBinaryReader($file);
        $this->readIdentifier();
        $this->readVersion();
        $this->readRevision();
        $this->readFlags();
        $this->readSize();
    }

    /**
     * @param File $file
     *
     * @return BinaryReader
     */
    protected function createBinaryReader(File $file)
    {
        $handle = fopen($file->getRealPath(), 'rb+');
        return new BinaryReader($handle);
    }

    /**
     * @return void
     */
    private function readIdentifier()
    {
        $this->identifier = $this->reader->getStringReader()->read($this->reader, 3);
    }

    /**
     * @return void
     */
    private function readVersion()
    {
        $this->version = $this->reader->getInt8Reader()->read($this->reader, 1);
    }

    /**
     * @return void
     */
    private function readRevision()
    {
        $this->revision = $this->reader->getInt8Reader()->read($this->reader, 1);
    }

    /**
     * @return void
     */
    private function readFlags()
    {
        $this->flags = $this->reader->getInt8Reader()->read($this->reader, 1);
    }

    /**
     * @return void
     */
    private function readSize()
    {
        $binaryString = '';
        for ($i = 0; $i < self::TAG_SIZE_BYTE_LENGTH; $i++) {
            $binaryString .= str_pad(
                decbin($this->reader->getInt8Reader()->read($this->reader, 1)),
                7,
                '0',
                STR_PAD_LEFT
            );
        }
        $this->size = bindec($binaryString);
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
}
