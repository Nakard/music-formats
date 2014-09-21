<?php
/**
 * Size28BitTrait.php
 *
 * Creation date: 2014-09-20
 * Creation time: 14:04
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2;

use Nakard\MusicFormats\Reader\BinaryTrait;

/**
 * Class Size28BitTrait
 *
 * @package Nakard\MusicFormats\Media\Id3v2
 */
trait Size28BitTrait
{
    use BinaryTrait;

    /**
     * @var int
     */
    private $size;

    /**
     * @var int
     */
    private $tagSizeByteLength = 4;

    /**
     * Calculates integer on 4 bytes when the msb on each byte must be removed
     *
     * @return void
     */
    private function readSize()
    {
        $binaryString = '';
        for ($i = 0; $i < $this->tagSizeByteLength; $i++) {
            $binaryString .= str_pad(
                decbin($this->binaryReader->readUInt8()),
                7,
                '0',
                STR_PAD_LEFT
            );
        }
        $this->size = bindec($binaryString);
    }
} 