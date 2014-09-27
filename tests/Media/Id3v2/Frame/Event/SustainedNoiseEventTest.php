<?php
/**
 * SustainedNoiseEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:01
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\SustainedNoiseEvent;

/**
 * Class SustainedNoiseEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class SustainedNoiseEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new SustainedNoiseEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x0e, $this->event->getTypeCode());
    }
} 