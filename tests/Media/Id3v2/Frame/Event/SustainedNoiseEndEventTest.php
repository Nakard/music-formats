<?php
/**
 * SustainedNoiseEndEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:02
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\SustainedNoiseEndEvent;

/**
 * Class SustainedNoiseEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class SustainedNoiseEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new SustainedNoiseEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x0f, $this->event->getTypeCode());
    }
} 