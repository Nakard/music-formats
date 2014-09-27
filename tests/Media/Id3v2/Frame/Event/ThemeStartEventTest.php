<?php
/**
 * ThemeStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:56
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\ThemeStartEvent;

/**
 * Class ThemeStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class ThemeStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new ThemeStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x09, $this->event->getTypeCode());
    }
} 