<?php
/**
 * OriginalAlbumTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:46
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\OriginalAlbum;

/**
 * Class OriginalAlbumTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class OriginalAlbumTest extends AbstractFrameTestCase
{
    /**
     * @var OriginalAlbum
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OriginalAlbum();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TOAL', $this->frame->getIdentifier());
    }
} 