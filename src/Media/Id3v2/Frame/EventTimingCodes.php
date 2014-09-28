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
     * @return int
     */
    public function getTimestampFormat()
    {
        return $this->timestampFormat;
    }

    /**
     * @param int $timestampFormat
     * @throws \InvalidArgumentException
     * @return EventTimingCodes
     */
    public function setTimestampFormat($timestampFormat)
    {
        if (!is_int($timestampFormat)) {
            throw new \InvalidArgumentException('Timestamp format must be an integer');
        }
        $this->timestampFormat = $timestampFormat;

        return $this;
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