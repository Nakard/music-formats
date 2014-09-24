<?php
/**
 * OriginalArtistTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:09
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\OriginalArtist;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class OriginalArtistTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class OriginalArtistTest extends AbstractFrameTestCase
{
    /**
     * @var OriginalArtist
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new OriginalArtist();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TOPE', $this->frame->getIdentifier());
    }
} 