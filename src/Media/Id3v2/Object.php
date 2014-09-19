<?php
/**
 * Object.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:25
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use Symfony\Component\HttpFoundation\File\File;

/**
 * Class Object
 *
 * @package  Nakard\Media\Id3v2
 */
class Object
{
    /**
     * @var Header
     */
    private $header;

    /**
     * @param File $file
     */
    public function __construct(File $file)
    {
        if ('audio/mpeg' !== $file->getMimeType()) {
            throw new \InvalidArgumentException($file->getFilename() . ' is not an MPEG file');
        }
        $this->header = new Header($file);
    }

    /**
     * @param Header $header
     */
    public function setHeader(Header $header)
    {
        $this->header = $header;
    }

    /**
     * @return Header
     */
    public function getHeader()
    {
        return $this->header;
    }
}
