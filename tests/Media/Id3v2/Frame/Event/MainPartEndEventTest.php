<?php
/**
 * MainPartEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:03
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\MainPartEndEvent;

/**
 * Class MainPartEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class MainPartEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new MainPartEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x11, $this->event->getTypeCode());
    }
} 