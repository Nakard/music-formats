<?php
/**
 * InternetStationTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:52
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\License\InternetStation;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class InternetStationTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\License
 */
class InternetStationTest extends AbstractFrameTestCase
{
    /**
     * @var InternetStation
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new InternetStation();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TRSN', $this->frame->getIdentifier());
    }
} 