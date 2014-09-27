<?php
/**
 * KeyChangeEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:58
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\KeyChangeEvent;

/**
 * Class KeyChangeEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class KeyChangeEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new KeyChangeEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x0b, $this->event->getTypeCode());
    }
} 