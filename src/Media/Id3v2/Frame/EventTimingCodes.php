<?php
/**
 * EventTimingCodes.php
 *
 * Creation date: 2014-09-27
 * Creation time: 21:38
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Media\Id3v2\Frame;

/**
 * Class EventTimingCodes
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class EventTimingCodes extends AbstractFrame
{
    protected $identifier = 'ETCO';

    /**
     * @var integer
     */
    private $timestampFormat;

    /**
     * @var
     */
    private $events;
} 