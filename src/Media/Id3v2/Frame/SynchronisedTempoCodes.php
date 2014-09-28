<?php
/**
 * SynchronisedTempoCodes.php
 *
 * Creation date: 2014-09-28
 * Creation time: 16:27
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\TimestampFormatTrait;

/**
 * Class SynchronisedTempoCodes
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class SynchronisedTempoCodes extends AbstractFrame
{
    use TimestampFormatTrait;

    protected $identifier = 'SYTC';

    /**
     * @var string
     */
    private $tempoData;

    /**
     * Constructs new synchronised tempo codes frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->timestampFormat = 0x01;
        $this->tempoData = (binary) '';
    }

    /**
     * @return string
     */
    public function getTempoData()
    {
        return (binary) $this->tempoData;
    }

    /**
     * @param string $tempoData
     */
    public function setTempoData($tempoData)
    {
        if (!is_string($tempoData)) {
            throw new \InvalidArgumentException('Tempo data must be a binary string');
        }
        $this->tempoData = (binary) $tempoData;

        return $this;
    }


}
 