<?php
/**
 * BinaryTrait.php
 *
 * Creation date: 2014-09-21
 * Creation time: 11:39
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Reader;

use PhpBinaryReader\BinaryReader;
/**
 * Class BinaryTrait
 *
 * @package Nakard\MusicFormats\Reader
 */
trait BinaryTrait
{
    /**
     * @var BinaryReader
     */
    private $binaryReader;

    /**
     * @return BinaryReader
     */
    public function getBinaryReader()
    {
        return $this->binaryReader;
    }
} 