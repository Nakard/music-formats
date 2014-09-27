<?php
/**
 * IntroStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:50
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\IntroStartEvent;

/**
 * Class IntroStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class IntroStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new IntroStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x02, $this->event->getTypeCode());
    }
} 