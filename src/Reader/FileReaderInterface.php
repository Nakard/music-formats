<?php
/**
 * FileReaderInterface.php
 *
 * Creation date: 2014-09-21
 * Creation time: 15:14
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Reader;

/**
 * Interface FileReaderInterface
 *
 * @package Nakard\MusicFormats\Reader
 */
interface FileReaderInterface
{
    /**
     * Reads appropriate information from file
     **
     * @return void
     */
    public function read();
} 