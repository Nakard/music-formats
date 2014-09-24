<?php
/**
 * Album.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:44
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\AbstractFrame;

/**
 * Class Album
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification
 */
class Album extends AbstractFrame
{
    protected $identifier = 'TALB';
} 