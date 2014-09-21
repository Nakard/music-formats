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

use Symfony\Component\HttpFoundation\File\File;

/**
 * Interface FileReaderInterface
 *
 * @package Nakard\MusicFormats\Reader
 */
interface FileReaderInterface
{
    /**
     * Reads appropriate information from file
     *
     * @param File $file
     *
     * @return mixed
     */
    public function read(File $file);
} 