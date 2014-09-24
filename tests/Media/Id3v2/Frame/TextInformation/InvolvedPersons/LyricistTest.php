<?php
/**
 * LyricistTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:10
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Lyricist;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class LyricistTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class LyricistTest extends AbstractFrameTestCase
{
    /**
     * @var Lyricist
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Lyricist();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TEXT', $this->frame->getIdentifier());
    }
} 