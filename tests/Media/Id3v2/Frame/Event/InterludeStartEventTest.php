<?php
/**
 * InterludeStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:55
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\InterludeStartEvent;

/**
 * Class InterludeStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class InterludeStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new InterludeStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x08, $this->event->getTypeCode());
    }
} 