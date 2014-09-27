<?php
/**
 * UnwantedNoiseEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:00
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\UnwantedNoiseEvent;

/**
 * Class UnwantedNoiseEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class UnwantedNoiseEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new UnwantedNoiseEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x0d, $this->event->getTypeCode());
    }
} 