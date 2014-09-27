<?php
/**
 * VerseEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:04
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\VerseEndEvent;

/**
 * Class VerseEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class VerseEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new VerseEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x12, $this->event->getTypeCode());
    }
} 