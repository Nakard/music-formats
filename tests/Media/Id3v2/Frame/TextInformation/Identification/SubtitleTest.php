<?php
/**
 * SubtitleTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\Subtitle;

/**
 * Class SubtitleTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class SubtitleTest extends AbstractFrameTestCase
{
    /**
     * @var Subtitle
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Subtitle();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TIT3', $this->frame->getIdentifier());
    }
} 