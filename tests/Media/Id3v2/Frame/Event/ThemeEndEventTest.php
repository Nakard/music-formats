<?php
/**
 * ThemeEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:06
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\ThemeEndEvent;

/**
 * Class ThemeEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class ThemeEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new ThemeEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x14, $this->event->getTypeCode());
    }
} 