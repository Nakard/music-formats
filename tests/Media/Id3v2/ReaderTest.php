<?php
/**
 * ReaderTest.php
 *
 * Creation date: 2014-09-22
 * Creation time: 21:51
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\Reader;
use PhpBinaryReader\BinaryReader;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class ReaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ReaderTest extends AbstractTestCase
{
    /**
     * @var Reader
     */
    private $reader;

    protected function setUp()
    {
        parent::setUp();
        $this->reader = new Reader();
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Reader', $this->reader);
    }

    public function testGetBinaryReader()
    {
        $this->assertNull($this->reader->getBinaryReader());
    }

    public function testSetBinaryReader()
    {
        $reader = new BinaryReader(fopen('php://memory', 'rb+'));
        $this->reader->setBinaryReader($reader);
        $this->assertSame($reader, $this->reader->getBinaryReader());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testSetBinaryReaderWithInvalidArgument()
    {
        $this->reader->setBinaryReader($this->reader);
    }

    public function testReadFile()
    {
        $file = new File(__DIR__ . '/asset/tagtest.ID3v2.4.mp3');
        $tag = $this->reader->readFile($file);

        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Tag', $tag);
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', $tag->getHeader());

        $this->assertSame('ID3', $tag->getHeader()->getIdentifier());
        $this->assertSame(4, $tag->getHeader()->getVersion());
        $this->assertSame(0, $tag->getHeader()->getRevision());
        $this->assertSame(0x80, $tag->getHeader()->getFlags());
        $this->assertTrue($tag->getHeader()->isUnsynchronized());
        $this->assertFalse($tag->getHeader()->isExtendedHeaderUsed());
        $this->assertFalse($tag->getHeader()->isExperimentalSet());
        $this->assertFalse($tag->getHeader()->isFooterSet());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testReadFileWithInvalidArgument()
    {
        $this->reader->readFile($this->reader);
    }
} 