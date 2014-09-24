<?php
/**
 * TrackNumber.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:47
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\AbstractFrame;

/**
 * Class TrackNumber
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification
 */
class TrackNumber extends AbstractFrame
{
    protected $identifier = 'TRCK';
} 