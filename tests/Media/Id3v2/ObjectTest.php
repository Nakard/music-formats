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

use Nakard\MusicFormats\Media\Id3v2\Header;
use Nakard\MusicFormats\Media\Id3v2\Object;
use Symfony\Component\HttpFoundation\File\File;

/**
 * Class ObjectTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ObjectTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var File
     */
    private $file;

    protected function setUp()
    {
        $this->file = new File(__DIR__ . '/asset/tagtest.ID3v2.4.mp3');
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Object', new Object($this->file));
    }

    public function testGetHeader()
    {
        $object = new Object($this->file);
        $this->assertInstanceOf('Nakard\\MusicFormats\\Media\\Id3v2\\Header', $object->getHeader());
    }

    public function testSetHeader()
    {
        $object = new Object($this->file);
        $header = new Header($this->file);
        $header->setRevision(5);
        $object->setHeader($header);
        $this->assertSame($header, $object->getHeader());
    }

    /**
     * @expectedException \InvalidArgumentException
     */
    public function testInvalidMimeTypeConstruct()
    {
        $file = new File(__DIR__ . '/asset/plain_text.txt');
        new Object($file);
    }
}
