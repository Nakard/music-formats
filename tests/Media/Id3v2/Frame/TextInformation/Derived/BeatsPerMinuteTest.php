<?php
/**
 * BeatsPerMinuteTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:34
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Derived\BeatsPerMinute;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class BeatsPerMinuteTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Derived
 */
class BeatsPerMinuteTest extends AbstractFrameTestCase
{
    /**
     * @var BeatsPerMinute
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new BeatsPerMinute();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TBPM', $this->frame->getIdentifier());
    }
} 