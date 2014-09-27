<?php
/**
 * RefrainStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:55
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\RefrainStartEvent;

/**
 * Class RefrainStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class RefrainStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new RefrainStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x07, $this->event->getTypeCode());
    }
} 