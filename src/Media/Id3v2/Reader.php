<?php
/**
 * Reader.php
 *
 * Creation date: 2014-09-22
 * Creation time: 21:48
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use PhpBinaryReader\BinaryReader;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class Reader
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
class Reader
{
    /**
     * @var BinaryReader
     */
    private $binaryReader;

    /**
     * @param BinaryReader $binaryReader
     */
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;
    }

    /**
     * @return BinaryReader
     */
    public function getBinaryReader()
    {
        return $this->binaryReader;
    }

    /**
     * @param File $file
     *
     * @return Tag
     */
    public function readFile(File $file)
    {
        $this->setBinaryReader(new BinaryReader(fopen($file->getRealPath(), 'rb+')));
        return $this->readTag();
    }

    /**
     * @return Tag
     */
    private function readTag()
    {
        $tag = new Tag();
        $tag->setHeader($this->readHeader());
        if ($tag->getHeader()->isExtendedHeaderUsed()) {
            $tag->setExtendedHeader($this->readExtendedHeader());
        }

        return $tag;
    }

    /**
     * @return Header
     */
    private function readHeader()
    {
        $header = new Header();
        $header->setIdentifier($this->getBinaryReader()->readString(3));
        $header->setVersion($this->getBinaryReader()->readUInt8());
        $header->setRevision($this->getBinaryReader()->readUInt8());
        $header->setFlags($this->getBinaryReader()->readUInt8());

        return $header;
    }

    /**
     * @return ExtendedHeader
     */
    private function readExtendedHeader()
    {
        $extendedHeader = new ExtendedHeader();

        return $extendedHeader;
    }
} 