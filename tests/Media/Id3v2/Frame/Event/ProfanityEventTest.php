<?php
/**
 * ProfanityEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:06
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\ProfanityEvent;

/**
 * Class ProfanityEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class ProfanityEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new ProfanityEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x15, $this->event->getTypeCode());
    }
} 