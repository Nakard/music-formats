<?php
/**
 * BinaryReader.php
 *
 * Creation date: 2014-09-22
 * Creation time: 22:18
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats;

/**
 * Class BinaryReader
 *
 * @package Nakard\MusicFormats
 */
class BinaryReader extends \PhpBinaryReader\BinaryReader
{
    /**
     * Reads integer from 4 bytes where the MSB is discarded
     *
     * @return int
     */
    public function read28BitInteger()
    {
        $binaryString = '';
        $bytes = 4;
        for ($i = 0; $i < $bytes; $i++) {
            $binary = decbin($this->readUInt8());
            if (8 === strlen($binary)) {
                $binary = substr($binary, 1);
            }
            $binaryString .= str_pad($binary, 7, '0', STR_PAD_LEFT);
        }

        return bindec($binaryString);
    }
} 