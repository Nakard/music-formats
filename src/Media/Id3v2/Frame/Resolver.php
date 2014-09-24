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

use Nakard\MusicFormats\Media\Id3v2\Frame\Exception\EmptyIdentifierException;
use Nakard\MusicFormats\Media\Id3v2\Frame\Exception\InvalidIdentifierException;

/**
 * Class Resolver
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class Resolver
{
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
            throw new EmptyIdentifierException;
        }
        if (4 !== strlen($identifier)) {
            throw new InvalidIdentifierException('Identifier must have 4 characters');
        }
        switch(strtoupper($identifier)) {
            case 'UFID':
                return new UniqueFileIdentifier();
                break;
            default:
                return new Unknown();
                break;
        }
    }
} 