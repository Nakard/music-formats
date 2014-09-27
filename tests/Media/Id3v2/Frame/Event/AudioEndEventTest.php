<?php
/**
 * AudioEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:07
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\AudioEndEvent;

/**
 * Class AudioEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class AudioEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new AudioEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0xfd, $this->event->getTypeCode());
    }
} 