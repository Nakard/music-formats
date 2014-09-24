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

use Doctrine\Common\Collections\ArrayCollection;
use Nakard\MusicFormats\BinaryReader;
use Nakard\MusicFormats\Media\Id3v2\Frame\Resolver;
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

        $frames = $this->readFrames();

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
        $extendedHeader->setSize($this->getBinaryReader()->readUInt8WithDiscardedMsb(4));
        $extendedHeader->setFlagBytesNumber($this->getBinaryReader()->readUInt8());
        $extendedHeader->setFlags($this->getBinaryReader()->readBytes($extendedHeader->getFlagBytesNumber()));
        if ($extendedHeader->hasTagUpdate()) {
            $tagUpdateFlagDataLength = $this->getBinaryReader()->readUInt8();
            if ($tagUpdateFlagDataLength) {
                //left if this flag will get ever data attached to it
            }
        }
        if ($extendedHeader->hasCrcData()) {
            $crcDataFlagDataLength = $this->getBinaryReader()->readUInt8();
            if ($crcDataFlagDataLength) {
                $extendedHeader->setCrcData(
                    $this->getBinaryReader()->readUInt8WithDiscardedMsb($crcDataFlagDataLength)
                );
            }
        }
        if ($extendedHeader->hasTagRestrictions()) {
            $tagRestrictionsFlagDataLength = $this->getBinaryReader()->readUInt8();
            if ($tagRestrictionsFlagDataLength) {
                $extendedHeader->getTagRestrictions()->setFlags($this->getBinaryReader()->readUInt8());
            }
        }

        return $extendedHeader;
    }

    private function readFrames()
    {
        $frames = new ArrayCollection();
        $resolver = new Resolver();
        while (false) {
            $identifier = $this->getBinaryReader()->readString(4);
            if (empty($identifier)) {
                break;
            }
            $frame = $resolver->resolve($identifier);
            $frame->setSize($this->getBinaryReader()->readUInt8WithDiscardedMsb(4));
            $frame->setFlags($this->getBinaryReader()->readUInt16());
        }
    }
} 