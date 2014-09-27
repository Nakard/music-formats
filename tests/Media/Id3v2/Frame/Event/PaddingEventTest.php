<?php
/**
 * PaddingEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:46
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\PaddingEvent;

/**
 * Class PaddingEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class PaddingEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new PaddingEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x00, $this->event->getTypeCode());
    }
} 