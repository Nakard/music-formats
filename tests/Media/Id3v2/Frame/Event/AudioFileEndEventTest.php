<?php
/**
 * AudioFileEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:08
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\AudioFileEndEvent;

/**
 * Class AudioFileEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class AudioFileEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new AudioFileEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0xfe, $this->event->getTypeCode());
    }
} 