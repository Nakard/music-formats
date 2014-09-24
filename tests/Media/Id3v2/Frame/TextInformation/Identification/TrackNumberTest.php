<?php
/**
 * TrackNumberTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 20:50
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification;

use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\Identification\TrackNumber;

/**
 * Class TrackNumberTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\Identification
 */
class TrackNumberTest extends AbstractFrameTestCase
{
    /**
     * @var TrackNumber
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new TrackNumber();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TRCK', $this->frame->getIdentifier());
    }
} 