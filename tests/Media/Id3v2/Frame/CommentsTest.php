<?php
/**
 * CommentsTest.php
 *
 * Creation date: 2014-10-02
 * Creation time: 19:52
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\Comments;

/**
 * Class CommentsTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class CommentsTest extends AbstractFrameTestCase
{
    /**
     * @var Comments
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new Comments();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('COMM', $this->frame->getIdentifier());
    }

    public function testGetTextEncoding()
    {
        $this->assertSame(0x00, $this->frame->getTextEncoding());
    }

    public function testSetTextEncoding()
    {
        $this->frame->setTextEncoding(0x02);
        $this->assertSame(0x02, $this->frame->getTextEncoding());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Text encoding must be an integer
     */
    public function testSetTextEncodingWithInvalidArgument($argument)
    {
        $this->frame->setTextEncoding($argument);
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

    public function testGetContent()
    {
        $this->assertSame('', $this->frame->getContent());
    }

    public function testSetContent()
    {
        $this->frame->setContent('content');
        $this->assertSame('content', $this->frame->getContent());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Content must be a string
     */
    public function testSetContentWithInvalidArgument($argument)
    {
        $this->frame->setContent($argument);
    }

    public function testGetContentDescription()
    {
        $this->assertSame('', $this->frame->getContentDescription());
    }

    public function testSetContentDescription()
    {
        $this->frame->setContentDescription('content');
        $this->assertSame('content', $this->frame->getContentDescription());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Content description must be a string
     */
    public function testSetContentDescriptionWithInvalidArgument($argument)
    {
        $this->frame->setContentDescription($argument);
    }
}
 