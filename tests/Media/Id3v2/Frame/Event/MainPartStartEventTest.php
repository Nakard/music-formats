<?php
/**
 * MainPartStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:50
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\MainPartStartEvent;

/**
 * Class MainPartStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class MainPartStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new MainPartStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x03, $this->event->getTypeCode());
    }
} 