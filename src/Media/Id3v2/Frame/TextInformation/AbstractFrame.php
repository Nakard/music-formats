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
use Nakard\MusicFormats\Media\Id3v2\TextEncodingTrait;

/**
 * Class Frame
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation
 */
abstract class AbstractFrame extends BaseAbstractFrame
{
    use TextEncodingTrait;

    /**
     * @var string
     */
    protected $information;

    /**
     * Constructs new text information frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->textEncoding = 0x00;
        $this->information = '';
    }

    /**
     * @return string
     */
    public function getInformation()
    {
        return $this->information;
    }

    /**
     * @param string $information
     * @throws \InvalidArgumentException
     * @return AbstractFrame
     */
    public function setInformation($information)
    {
        if (!is_string($information)) {
            throw new \InvalidArgumentException('Information must be a string');
        }
        $this->information = $information;

        return $this;
    }
} 