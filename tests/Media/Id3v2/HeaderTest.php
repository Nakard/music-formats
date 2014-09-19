<?php
/**
 * HeaderTes.php
 *
 * Creation date: 2014-09-19
 * Creation time: 20:48
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\Header;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class HeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class HeaderTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var File
     */
    private $file;

    /**
     * @var Header
     */
    private $header;

    protected function setUp()
    {
        $this->file = new File(__DIR__ . '/asset/tagtest.ID3v2.4.mp3');
        $this->header = new Header($this->file);
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', $this->header);
    }

    public function testGetIdentifier()
    {
        $this->assertSame('ID3', $this->header->getIdentifier());
    }

    public function testGetVersion()
    {
        $this->assertSame(0x04, $this->header->getVersion());
    }

    public function testGetRevision()
    {
        $this->assertSame(0x00, $this->header->getRevision());
    }

    public function testGetFlags()
    {
        $this->assertSame(0x80, $this->header->getFlags());
    }

    public function testGetSize()
    {
        $this->assertSame(0x000b535, $this->header->getSize());
    }

    public function testIsUnsynchronized()
    {
        $this->assertTrue($this->header->isUnsynchronized());
    }

    public function testIsExtendedHeaderUsed()
    {
        $this->assertFalse($this->header->isExtendedHeaderUsed());
    }

    public function testIsExperimentalSet()
    {
        $this->assertFalse($this->header->isExperimentalSet());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidMimeTypeConstruct()
    {
        $file = new File(__DIR__ . '/asset/plain_text.txt');
        new Header($file);
    }
}
