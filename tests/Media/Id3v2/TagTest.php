<?php
/**
 * ObjectTest.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:41
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\ExtendedHeader;
use Nakard\MusicFormats\Media\Id3v2\Frame\Resolver;
use Nakard\MusicFormats\Media\Id3v2\Frame\Unknown;
use Nakard\MusicFormats\Media\Id3v2\Header;
use Nakard\MusicFormats\Media\Id3v2\Tag;

/**
 * Class ObjectTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class TagTest extends AbstractTestCase
{
    /**
     * @var Tag
     */
    private $tag;

    protected function setUp()
    {
        parent::setUp();
        $this->tag = new Tag();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Tag', $this->tag);
    }

    public function testGetHeader()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', $this->tag->getHeader());
    }

    public function testSetHeader()
    {
        $header = new Header();
        $header->setRevision(5);
        $this->tag->setHeader($header);
        $this->assertSame($header, $this->tag->getHeader());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testSetHeaderWithInvalidArgument()
    {
        $this->tag->setHeader($this->tag);
    }

    public function testGetExtendedHeader()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\ExtendedHeader', $this->tag->getExtendedHeader());
    }

    public function testSetExtendedHeader()
    {
        $header = new ExtendedHeader();
        $header->setFlags(0x01);
        $this->tag->setExtendedHeader($header);
        $this->assertSame($header, $this->tag->getExtendedHeader());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testSetExtendedHeaderWithInvalidArgument()
    {
        $this->tag->setExtendedHeader($this->tag);
    }

    public function testGetFrames()
    {
        $this->assertInstanceOf('Doctrine\\Common\\Collections\\ArrayCollection', $this->tag->getFrames());
        $this->assertEmpty($this->tag->getFrames());
    }

    public function testAddFrame()
    {
        $frame = new Unknown('TXXX');
        $this->tag->addFrame($frame);
        $this->assertNotEmpty($this->tag->getFrames());
        $this->assertInstanceOf(
            'Nakard\\MusicFormats\\Media\\Id3v2\\Frame\\AbstractFrame',
            $this->tag->getFrames()->get(0)
        );
    }
}
