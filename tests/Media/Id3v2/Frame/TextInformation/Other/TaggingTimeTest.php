<?php
/**
 * TaggingTimeTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:36
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\TaggingTime;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class TaggingTimeTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class TaggingTimeTest extends AbstractFrameTestCase
{
    /**
     * @var TaggingTime
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new TaggingTime();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TDTG', $this->frame->getIdentifier());
    }
} 