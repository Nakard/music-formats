<?php
/**
 * RecordingTimeTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:34
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\RecordingTime;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class RecordingTimeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class RecordingTimeTest extends AbstractFrameTestCase
{
    /**
     * @var RecordingTime
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new RecordingTime();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TDRC', $this->frame->getIdentifier());
    }
} 