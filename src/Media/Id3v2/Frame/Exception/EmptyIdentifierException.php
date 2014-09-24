<?php
/**
 * EmptyIdentifierException.php
 *
 * Creation date: 2014-09-24
 * Creation time: 18:56
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\Exception;

/**
 * Class EmptyIdentifierException
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\Exception
 */
class EmptyIdentifierException extends \InvalidArgumentException
{
    /**
     * @inheritdoc
     */
    public function __construct($message = "Identifier can't be empty", $code = 0, \Exception $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
} 