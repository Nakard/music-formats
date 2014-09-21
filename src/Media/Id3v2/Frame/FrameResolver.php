<?php
/**
 * FrameResolver.php
 *
 * Creation date: 2014-09-20
 * Creation time: 13:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\BinaryReaderAwareInterface;
use PhpBinaryReader\BinaryReader;

/**
 * Class FrameResolver
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class FrameResolver implements BinaryReaderAwareInterface
{
    /**
     * @var BinaryReader
     */
    private $reader;

    /**
     * @param BinaryReader $binaryReader
     */
    public function __construct(BinaryReader $binaryReader)
    {
        $this->setBinaryReader($binaryReader);
    }

    /**
     * @inheritdoc
     */
    public function setBinaryReader(BinaryReader &$binaryReader)
    {
        $this->reader = $binaryReader;
    }

    /**
     * @return BinaryReader
     */
    public function getBinaryReader()
    {
        return $this->reader;
    }

    /**
     * @param   string       $identifier
     *
     * @return  AbstractFrame
     */
    public function resolve($identifier)
    {
        switch($identifier) {
            default:
                return new UnknownFrame($this->getBinaryReader(), $identifier);
        }
    }
} 