<?php
/**
 * PlaylistDelayTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 18:29
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Other\PlaylistDelay;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class PlaylistDelayTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Other
 */
class PlaylistDelayTest extends AbstractFrameTestCase
{
    /**
     * @var PlaylistDelay
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new PlaylistDelay();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TDLY', $this->frame->getIdentifier());
    }
} 