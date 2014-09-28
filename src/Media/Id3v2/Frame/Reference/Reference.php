<?php
/**
 * Reference.php
 *
 * Creation date: 2014-09-28
 * Creation time: 15:33
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Reference;

/**
 * Class Reference
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Reference
 */
class Reference 
{
    /**
     * @var int
     */
    private $bytesDeviationBits;

    /**
     * @var int
     */
    private $msDeviationBits;

    /**
     * @var int
     */
    private $bytesDeviation;

    /**
     * @var int
     */
    private $msDeviation;

    /**
     * Creates new reference
     *
     * @param int $bytesDeviationBits
     * @param int $msDeviationBits
     */
    public function __construct($bytesDeviationBits, $msDeviationBits)
    {
        if (!is_int($bytesDeviationBits)) {
            throw new \InvalidArgumentException('Bits for bytes deviation must be an integer');
        }
        if (!is_int($msDeviationBits)) {
            throw new \InvalidArgumentException('Bits for ms deviation must be an integer');
        }
        if (0 !== (($bytesDeviationBits + $msDeviationBits) % 4)) {
            throw new \InvalidArgumentException('Number of bits for both deviations must be divisible by 4');
        }

        $this->bytesDeviationBits = $bytesDeviationBits;
        $this->msDeviationBits = $msDeviationBits;
        $this->bytesDeviation = 0;
        $this->msDeviation = 0;
    }

    /**
     * @return int
     */
    public function getMsDeviation()
    {
        return $this->msDeviation;
    }

    /**
     * @param int $msDeviation
     * @throws \InvalidArgumentException
     * @return Reference
     */
    public function setMsDeviation($msDeviation)
    {
        if (!is_int($msDeviation)) {
            throw new \InvalidArgumentException('Milisecond deviation must be an integer');
        }
        if ($msDeviation > pow(2, $this->msDeviationBits) - 1) {
            throw new \InvalidArgumentException('Value beyond defined range');
        }
        $this->msDeviation = $msDeviation;

        return $this;
    }

    /**
     * @return int
     */
    public function getBytesDeviation()
    {
        return $this->bytesDeviation;
    }

    /**
     * @param int $bytesDeviation
     * @throws \InvalidArgumentException
     * @return Reference
     */
    public function setBytesDeviation($bytesDeviation)
    {
        if (!is_int($bytesDeviation)) {
            throw new \InvalidArgumentException('Bytes deviation must be an integer');
        }
        if ($bytesDeviation > pow(2, $this->bytesDeviationBits) - 1) {
            throw new \InvalidArgumentException('Value beyond defined range');
        }
        $this->bytesDeviation = $bytesDeviation;

        return $this;
    }
}
 