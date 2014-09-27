<?php
/**
 * OriginalReleaseTimeTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:33
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\OriginalReleaseTime;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class OriginalReleaseTimeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class OriginalReleaseTimeTest extends AbstractFrameTestCase
{
    /**
     * @var OriginalReleaseTime
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OriginalReleaseTime();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TDOR', $this->frame->getIdentifier());
    }
} 