<?php
/**
 * Header.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:46
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Class Header
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
class Header
{
    private $identifier;

    private $version;

    private $flags;

    private $size;

    /**
     * @param File $file
     */
    public function __construct(File $file)
    {
        if ('audio/mpeg' !== $file->getMimeType()) {
            throw new \InvalidArgumentException($file->getFilename() . ' is not an MPEG file');
        }

        $contents = file_get_contents($file->getPath());

        $unpacked = unpack('c10', $contents);

        var_dump($unpacked);
    }
}
