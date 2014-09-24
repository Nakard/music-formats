<?php
/**
 * AbstractFrame.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:10
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation;

use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame as BaseAbstractFrame;

/**
 * Class Frame
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation
 */
abstract class AbstractFrame extends BaseAbstractFrame
{
    /**
     * @var int
     */
    protected $textEncoding;

    /**
     * @var string
     */
    protected $information;

    /**
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param string $information
     *
     * @return AbstractFrame
     */
    public function setInformation($information)
    {
        $this->information = $information;

        return $this;
    }

    /**
     * @return int
     */
    public function getTextEncoding()
    {
        return $this->textEncoding;
    }

    /**
     * @param int $textEncoding
     *
     * @return AbstractFrame
     */
    public function setTextEncoding($textEncoding)
    {
        $this->textEncoding = $textEncoding;

        return $this;
    }
} 