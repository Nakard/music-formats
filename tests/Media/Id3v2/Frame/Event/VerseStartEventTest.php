<?php
/**
 * VerseStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:54
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\VerseStartEvent;

/**
 * Class VerseStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class VerseStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new VerseStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x06, $this->event->getTypeCode());
    }
} 