<?php
/**
 * TextEncodingTrait.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:26
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame;

/**
 * Class TextEncodingTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait TextEncodingTrait
{
    /**
     * @var int
     */
    protected $textEncoding;

    /**
     * @return int
     */
    public function getTextEncoding()
    {
        return $this->textEncoding;
    }

    /**
     * @param int $textEncoding
     * @throws \InvalidArgumentException
     * @return $this
     */
    public function setTextEncoding($textEncoding)
    {
        if (!is_int($textEncoding)) {
            throw new \InvalidArgumentException('Text encoding must be an integer');
        }
        $this->textEncoding = $textEncoding;

        return $this;
    }
} 