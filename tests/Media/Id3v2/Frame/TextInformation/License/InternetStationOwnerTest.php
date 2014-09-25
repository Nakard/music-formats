<?php
/**
 * InternetStationOwnerTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:53
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\License\InternetStationOwner;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class InternetStationOwnerTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License
 */
class InternetStationOwnerTest extends AbstractFrameTestCase
{
    /**
     * @var InternetStationOwner
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new InternetStationOwner();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TRSO', $this->frame->getIdentifier());
    }
} 