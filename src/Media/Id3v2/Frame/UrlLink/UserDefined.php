<?php
/**
 * UserDefined.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:25
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\DescriptionTrait;
use Nakard\MusicFormats\Media\Id3v2\TextEncodingTrait;

/**
 * Class UserDefined
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink
 */
class UserDefined extends AbstractFrame
{
    use TextEncodingTrait, DescriptionTrait;

    protected $identifier = 'WXXX';

    /**
     * Constructs new user defined url link frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->textEncoding = 0x00;
        $this->description = '';
    }
} 