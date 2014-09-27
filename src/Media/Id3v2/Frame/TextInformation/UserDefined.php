<?php
/**
 * UserDefined.php
 *
 * Creation date: 2014-09-27
 * Creation time: 19:37
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation;

use Nakard\MusicFormats\Media\Id3v2\DescriptionTrait;

/**
 * Class UserDefined
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation
 */
class UserDefined extends AbstractFrame
{
    use DescriptionTrait;

    protected $identifier = 'TXXX';

    /**
     * Constructs new user defined text information frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->description = '';
    }
} 