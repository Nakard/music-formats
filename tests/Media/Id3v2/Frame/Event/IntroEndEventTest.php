<?php
/**
 * IntroEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:02
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\IntroEndEvent;

/**
 * Class IntroEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class IntroEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new IntroEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x10, $this->event->getTypeCode());
    }
} 