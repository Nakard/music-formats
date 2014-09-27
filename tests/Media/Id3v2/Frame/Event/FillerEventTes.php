<?php
/**
 * FillerEventTes.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:09
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\FillerEvent;

/**
 * Class FillerEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class FillerEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new FillerEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0xff, $this->event->getTypeCode());
    }
} 