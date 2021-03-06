<?php
/**
 * OutroEndEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:53
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\OutroEndEvent;

/**
 * Class OutroEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class OutroEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new OutroEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x05, $this->event->getTypeCode());
    }
} 