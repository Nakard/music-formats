<?php
/**
 * EventTimingCodesTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 12:28
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Doctrine\Common\Collections\ArrayCollection;
use Nakard\MusicFormats\Media\Id3v2\Frame\Event\UnknownEvent;
use Nakard\MusicFormats\Media\Id3v2\Frame\EventTimingCodes;

/**
 * Class EventTimingCodesTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class EventTimingCodesTest extends AbstractFrameTestCase
{
    /**
     * @var EventTimingCodes
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new EventTimingCodes();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('ETCO', $this->frame->getIdentifier());
    }

    public function testGetTimestampFormat()
    {
        $this->assertSame(0x01, $this->frame->getTimestampFormat());
    }

    public function testSetTimestampFormat()
    {
        $this->frame->setTimestampFormat(0x02);
        $this->assertSame(0x02, $this->frame->getTimestampFormat());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Timestamp format must be an integer
     */
    public function testSetTimestampFormatWithInvalidArgument($argument)
    {
        $this->frame->setTimestampFormat($argument);
    }

    public function testGetEvents()
    {
        $this->assertEquals(new ArrayCollection(), $this->frame->getEvents());
    }

    public function testAddEvent()
    {
        $event = new UnknownEvent();
        $this->frame->addEvent($event);
        $this->assertSame($event, $this->frame->getEvents()->get(0));
        $this->assertCount(1, $this->frame->getEvents());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testAddEventWithInvalidArgument()
    {
        $this->frame->addEvent($this->frame);
    }
} 