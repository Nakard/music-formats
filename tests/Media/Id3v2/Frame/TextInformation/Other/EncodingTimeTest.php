<?php
/**
 * EncodingTimeTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:32
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\EncodingTime;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class EncodingTimeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class EncodingTimeTest extends AbstractFrameTestCase
{
    /**
     * @var EncodingTime
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new EncodingTime();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TDEN', $this->frame->getIdentifier());
    }
} 