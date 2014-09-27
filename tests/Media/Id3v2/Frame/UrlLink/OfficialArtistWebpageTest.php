<?php
/**
 * OfficialArtistWebpageTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:35
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\OfficialArtistWebpage;

/**
 * Class OfficialArtistWebpageTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class OfficialArtistWebpageTest extends AbstractFrameTestCase
{
    /**
     * @var OfficialArtistWebpage
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OfficialArtistWebpage();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WOAR', $this->frame->getIdentifier());
    }
} 