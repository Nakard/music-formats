<?php
/**
 * Resolver.php
 *
 * Creation date: 2014-09-20
 * Creation time: 13:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException;
use Nakard\MusicFormats\Reader\BinaryReaderAwareInterface;
use Nakard\MusicFormats\Reader\BinaryTrait;
use PhpBinaryReader\BinaryReader;

/**
 * Class Resolver
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class Resolver implements BinaryReaderAwareInterface
{
    use BinaryTrait;

    /**
     * @param BinaryReader $binaryReader
     *
     * @return Resolver;
     */
    public function setBinaryReader(BinaryReader $binaryReader)
    {
        $this->binaryReader = $binaryReader;

        return $this;
    }

    /**
     * @param   string       $identifier
     *
     * @return  AbstractFrame
     * @throws \InvalidArgumentException
     * @throws InvalidIdentifierException
     */
    public function resolve($identifier)
    {
        if (!is_string($identifier)) {
            throw new \InvalidArgumentException('Identifier must be a string');
        }
        if ('' === $identifier) {
            throw new \InvalidArgumentException('Identifier can\'t be an empty string');
        }
        if (4 !== strlen($identifier)) {
            throw new InvalidIdentifierException('Identifier must have 4 characters');
        }
        switch(strtoupper($identifier)) {
            default:
                return new Unknown($this->getBinaryReader(), $identifier);
        }
    }
} 