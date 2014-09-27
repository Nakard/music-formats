<?php
/**
 * ReleaseTimeTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:35
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\ReleaseTime;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class ReleaseTimeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class ReleaseTimeTest extends AbstractFrameTestCase
{
    /**
     * @var ReleaseTime
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new ReleaseTime();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TDRL', $this->frame->getIdentifier());
    }
} 