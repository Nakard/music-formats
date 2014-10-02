<?php
/**
 * SynchronisedTextTest.php
 *
 * Creation date: 2014-10-02
 * Creation time: 19:19
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Doctrine\Common\Collections\ArrayCollection;
use Nakard\MusicFormats\Media\Id3v2\Frame\Sync\Sync;
use Nakard\MusicFormats\Media\Id3v2\Frame\SynchronisedText;

/**
 * Class SynchronisedTextTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class SynchronisedTextTest extends AbstractFrameTestCase
{
    /**
     * @var SynchronisedText
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new SynchronisedText();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('SYLT', $this->frame->getIdentifier());
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

    public function testGetTimestampFormat()
    {
        $this->assertSame(0x00, $this->frame->getTimestampFormat());
    }

    public function testSetTimestampFormat()
    {
        $this->frame->setTimestampFormat(0x02);
        $this->assertSame(0x02, $this->frame->getTimestampFormat());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Timestamp format must be an integer
     */
    public function testSetTimestampFormatWithInvalidArgument($argument)
    {
        $this->frame->setTimestampFormat($argument);
    }

    public function testGetContentType()
    {
        $this->assertSame(0x00, $this->frame->getContentType());
    }

    public function testSetContentType()
    {
        $this->frame->setContentType(0x02);
        $this->assertSame(0x02, $this->frame->getContentType());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Content type must be an integer
     */
    public function testSetContentTypeWithInvalidArgument($argument)
    {
        $this->frame->setContentType($argument);
    }

    public function testGetSyncs()
    {
        $this->assertEquals(new ArrayCollection(), $this->frame->getSyncs());
        $this->assertEmpty($this->frame->getSyncs());
    }

    public function testAddSync()
    {
        $sync = new Sync();
        $sync->setTimestamp(0x1000)->setSyncedText('test');
        $this->frame->addSync($sync);
        $this->assertSame($sync, $this->frame->getSyncs()->get(0));
        $this->assertCount(1, $this->frame->getSyncs());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testAddSyncWithInvalidArgument()
    {
        $this->frame->addSync($this->frame);
    }
}
 