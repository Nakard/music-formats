<?php
/**
 * ArtistTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:01
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Artist;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class ArtistTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class ArtistTest extends AbstractFrameTestCase
{
    /**
     * @var Artist
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Artist();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TPE1', $this->frame->getIdentifier());
    }
} 