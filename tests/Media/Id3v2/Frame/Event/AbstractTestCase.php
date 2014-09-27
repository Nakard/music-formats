<?php
/**
 * AbstractTestCase.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:26
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Tests\Media\Id3v2\AbstractTestCase as BaseTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\Event\AbstractEvent;

/**
 * Class AbstractTestCase
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
abstract class AbstractTestCase extends BaseTestCase
{
    /**
     * @var AbstractEvent
     */
    protected $event;

    abstract public function testGetTypeCode();

    public function testGetTimestamp()
    {
        $this->assertSame(0x00000000, $this->event->getTimestamp());
    }

    public function testSetTimestamp()
    {
        $this->event->setTimestamp(0x0f0facbe);
        $this->assertSame(0x0f0facbe, $this->event->getTimestamp());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Timestamp must be an integer
     */
    public function testSetTimestampWithInvalidArgument($argument)
    {
        $this->event->setTimestamp($argument);
    }
} 