<?php
/**
 * InitialSilenceEndEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:48
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\InitialSilenceEndEvent;

/**
 * Class InitialSilenceEndEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class InitialSilenceEndEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new InitialSilenceEndEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x01, $this->event->getTypeCode());
    }
} 