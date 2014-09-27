<?php
/**
 * UserDefinedTest.php
 *
 * Creation date: 2014-09-27
 * Creation time: 20:54
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink;

use Nakard\MusicFormats\Media\Id3v2\Frame\UrlLink\UserDefined;

/**
 * Class UserDefinedTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame\UrlLink
 */
class UserDefinedTest extends AbstractFrameTestCase
{
    /**
     * @var UserDefined
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new UserDefined();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('WXXX', $this->frame->getIdentifier());
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

    public function testGetDescription()
    {
        $this->assertSame('', $this->frame->getDescription());
    }

    public function testSetDescription()
    {
        $this->frame->setDescription('test description');
        $this->assertSame('test description', $this->frame->getDescription());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Description must be a string
     */
    public function testSetDescriptionWithInvalidArgument($argument)
    {
        $this->frame->setDescription($argument);
    }
} 