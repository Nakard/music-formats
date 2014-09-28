<?php
/**
 * MpegLocationLookupTable.php
 *
 * Creation date: 2014-09-28
 * Creation time: 14:58
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Doctrine\Common\Collections\ArrayCollection;
use Nakard\MusicFormats\Media\Id3v2\Frame\Reference\Reference;

/**
 * Class MpegLocationLookupTable
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class MpegLocationLookupTable extends AbstractFrame
{
    protected $identifier = 'MLLT';

    /**
     * @var int
     */
    private $mpegFramesBetweenReference;

    /**
     * @var int
     */
    private $bytesBetweenReference;

    /**
     * @var int
     */
    private $msBetweenReference;

    /**
     * @var int
     */
    private $bitsNumberBytesDeviation;

    /**
     * @var int
     */
    private $bitsNumberMsDeviation;

    /**
     * @var ArrayCollection
     */
    private $references;

    /**
     * Construct new mpeg lookup table
     */
    public function __construct()
    {
        parent::__construct();
        $this->mpegFramesBetweenReference = 0x0000;
        $this->bytesBetweenReference = 0x000000;
        $this->msBetweenReference = 0x000000;
        $this->bitsNumberBytesDeviation = 0x00;
        $this->bitsNumberMsDeviation = 0x00;
        $this->references = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getBitsNumberBytesDeviation()
    {
        return $this->bitsNumberBytesDeviation;
    }

    /**
     * @param int $bitsNumberBytesDeviation
     * @throws \InvalidArgumentException
     * @return MpegLocationLookupTable
     */
    public function setBitsNumberBytesDeviation($bitsNumberBytesDeviation)
    {
        if (!is_int($bitsNumberBytesDeviation)) {
            throw new \InvalidArgumentException('Bytes deviation bits number must be an integer');
        }
        $this->bitsNumberBytesDeviation = $bitsNumberBytesDeviation;

        return $this;
    }

    /**
     * @return int
     */
    public function getBitsNumberMsDeviation()
    {
        return $this->bitsNumberMsDeviation;
    }

    /**
     * @param int $bitsNumberMsDeviation
     * @throws \InvalidArgumentException
     * @return MpegLocationLookupTable
     */
    public function setBitsNumberMsDeviation($bitsNumberMsDeviation)
    {
        if (!is_int($bitsNumberMsDeviation)) {
            throw new \InvalidArgumentException('Milisecond deviation bits number must be an integer');
        }
        $this->bitsNumberMsDeviation = $bitsNumberMsDeviation;

        return $this;
    }

    /**
     * @return int
     */
    public function getBytesBetweenReference()
    {
        return $this->bytesBetweenReference;
    }

    /**
     * @param int $bytesBetweenReference
     * @throws \InvalidArgumentException
     * @return MpegLocationLookupTable
     */
    public function setBytesBetweenReference($bytesBetweenReference)
    {
        if (!is_int($bytesBetweenReference)) {
            throw new \InvalidArgumentException('Bytes between reference must be an integer');
        }
        $this->bytesBetweenReference = $bytesBetweenReference;

        return $this;
    }

    /**
     * @return int
     */
    public function getMpegFramesBetweenReference()
    {
        return $this->mpegFramesBetweenReference;
    }

    /**
     * @param int $mpegFramesBetweenReference
     * @throws \InvalidArgumentException
     * @return MpegLocationLookupTable
     */
    public function setMpegFramesBetweenReference($mpegFramesBetweenReference)
    {
        if (!is_int($mpegFramesBetweenReference)) {
            throw new \InvalidArgumentException('MPEG frames between reference must be an integer');
        }
        $this->mpegFramesBetweenReference = $mpegFramesBetweenReference;

        return $this;
    }

    /**
     * @return int
     */
    public function getMsBetweenReference()
    {
        return $this->msBetweenReference;
    }

    /**
     * @param int $msBetweenReference
     * @throws \InvalidArgumentException
     * @return MpegLocationLookupTable
     */
    public function setMsBetweenReference($msBetweenReference)
    {
        if (!is_int($msBetweenReference)) {
            throw new \InvalidArgumentException('Miliseconds between reference must be an integer');
        }
        $this->msBetweenReference = $msBetweenReference;

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getReferences()
    {
        return $this->references;
    }

    /**
     * @param Reference $reference
     *
     * @return MpegLocationLookupTable
     */
    public function addReference(Reference $reference)
    {
        $this->references->add($reference);

        return $this;
    }
}
