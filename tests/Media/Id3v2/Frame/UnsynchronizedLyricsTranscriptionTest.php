<?php
/**
 * UnsynchronizedLyricsTranscriptionTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 17:00
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\UnsynchronisedLyricsTranscription;

/**
 * Class UnsynchronizedLyricsTranscriptionTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class UnsynchronizedLyricsTranscriptionTest extends AbstractFrameTestCase
{
    /**
     * @var UnsynchronisedLyricsTranscription
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new UnsynchronisedLyricsTranscription();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('USLT', $this->frame->getIdentifier());
    }

    public function testGetLyrics()
    {
        $this->assertSame('', $this->frame->getLyrics());
    }

    public function testSetLyrics()
    {
        $this->frame->setLyrics('lyrics');
        $this->assertSame('lyrics', $this->frame->getLyrics());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Lyrics must be a string
     */
    public function testSetLyricsWithInvalidArgument($argument)
    {
        $this->frame->setLyrics($argument);
    }

    public function testGetLanguage()
    {
        $this->assertSame(0x000000, $this->frame->getLanguage());
    }

    public function testSetLanguage()
    {
        $this->frame->setLanguage(0x0f0f0f);
        $this->assertSame(0x0f0f0f, $this->frame->getLanguage());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Language must be an integer
     */
    public function testSetLanguageWithInvalidArgument($argument)
    {
        $this->frame->setLanguage($argument);
    }

    public function testGetContentDescriptor()
    {
        $this->assertSame('', $this->frame->getContentDescriptor());
    }

    public function testSetContentDescriptor()
    {
        $this->frame->setContentDescriptor('descriptor');
        $this->assertSame('descriptor', $this->frame->getContentDescriptor());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedExceptionMessage Content descriptor must be a string
     * @expectedException \InvalidArgumentException
     */
    public function testSetContentDescriptorWithInvalidArgument($argument)
    {
        $this->frame->setContentDescriptor($argument);
    }
}
