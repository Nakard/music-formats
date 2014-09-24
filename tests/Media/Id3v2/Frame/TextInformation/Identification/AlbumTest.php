<?php
/**
 * AlbumTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:45
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\Album;

/**
 * Class AlbumTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class AlbumTest extends AbstractFrameTestCase
{
    /**
     * @var Album
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Album();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TALB', $this->frame->getIdentifier());
    }
} 