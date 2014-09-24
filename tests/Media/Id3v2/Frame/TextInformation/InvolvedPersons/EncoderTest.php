<?php
/**
 * EncoderTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 21:32
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons;

use Nakard\MusicFormats\Media\Id3v2\Frame\TextInformation\InvolvedPersons\Encoder;
use Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\AbstractFrameTestCase;

/**
 * Class EncoderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\TextInformation\InvolvedPersons
 */
class EncoderTest extends AbstractFrameTestCase
{
    /**
     * @var Encoder
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Encoder();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('TENC', $this->frame->getIdentifier());
    }
} 