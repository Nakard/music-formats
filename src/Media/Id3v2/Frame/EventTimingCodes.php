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

use Doctrine\Common\Collections\ArrayCollection;
use Nakard\MusicFormats\Media\Id3v2\Frame\Event\AbstractEvent;
use Nakard\MusicFormats\Media\Id3v2\TimestampFormatTrait;

/**
 * Class EventTimingCodes
 *
 * @package Nakard\MusicFormats\Media\Id3v2\Frame
 */
class EventTimingCodes extends AbstractFrame
{
    use TimestampFormatTrait;

    protected $identifier = 'ETCO';

    /**
     * @var ArrayCollection
     */
    private $events;

    /**
     * Constructs new event timing code frame
     */
    public function __construct()
    {
        parent::__construct();
        $this->timestampFormat = 0x01;
        $this->events = new ArrayCollection();
    }

    /**
     * @param AbstractEvent $event
     *
     * @return $this
     */
    public function addEvent(AbstractEvent $event)
    {
        $this->events->add($event);

        return $this;
    }

    /**
     * @return ArrayCollection
     */
    public function getEvents()
    {
        return $this->events;
    }
} 