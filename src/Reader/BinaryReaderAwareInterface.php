<?php
/**
 * BinaryReaderAwareInterface.php
 *
 * Creation date: 2014-09-20
 * Creation time: 11:51
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Reader;

use PhpBinaryReader\BinaryReader;

/**
 * Interface BinaryReaderAwareInterface
 *
 * @package Nakard\MusicFormats\Reader
 */
interface BinaryReaderAwareInterface
{
    /**
     * @param BinaryReader $binaryReader
     *
     * @return void
     */
    public function setBinaryReader(BinaryReader $binaryReader);
} 