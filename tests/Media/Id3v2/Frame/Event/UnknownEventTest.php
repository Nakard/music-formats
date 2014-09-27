<?php
/**
 * UnknownEventTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 00:19
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\UnknownEvent;

/**
 * Class UnknownEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class UnknownEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new UnknownEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame('Unknown', $this->event->getTypeCode());
    }
} 