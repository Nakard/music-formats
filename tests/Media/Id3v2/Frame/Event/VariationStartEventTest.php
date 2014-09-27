<?php
/**
 * VariationStartEventTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 23:57
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event;

use Nakard\MusicFormats\Media\Id3v2\Frame\Event\VariationStartEvent;

/**
 * Class VariationStartEventTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\Event
 */
class VariationStartEventTest extends AbstractTestCase
{
    protected function setUp()
    {
        parent::setUp();
        $this->event = new VariationStartEvent();
    }

    public function testGetTypeCode()
    {
        $this->assertSame(0x0a, $this->event->getTypeCode());
    }
} 