<?php
/**
 * AbstractFrameTestCase.php
 *
 * Creation date: 2014-09-21
 * Creation time: 14:43
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Tests\Media\Id3v2\AbstractTestCase;
use Nakard\MusicFormats\Media\Id3v2\Frame\AbstractFrame;
use PhpBinaryReader\BinaryReader;

/**
 * Class AbstractFrameTestCase
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
abstract class AbstractFrameTestCase extends AbstractTestCase
{
    /**
     * @var AbstractFrame;
     */
    protected $frame;

    public function testGetBinaryReader()
    {
        $this->assertNull($this->frame->getBinaryReader());
    }

    public function testSetBinaryReader()
    {
        $this->frame->setBinaryReader($this->binaryReader);
        $this->assertInstanceOf('PhpBinaryReader\\BinaryReader', $this->frame->getBinaryReader());
        $this->assertSame($this->binaryReader, $this->frame->getBinaryReader());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testSetBinaryReaderWithInvalidArgument()
    {
        $this->frame->setBinaryReader($this->frame);
    }

    public function testGetIdentifer()
    {
        $this->assertSame('', $this->frame->getIdentifier());
    }

    public function testSetIdentifier()
    {
        $this->frame->setIdentifier('test');
        $this->assertSame('test', $this->frame->getIdentifier());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Identifier must be a string
     */
    public function testSetIdentifierWithInvalidArgument($argument)
    {
        $this->frame->setIdentifier($argument);
    }

    public function testGetFlags()
    {
        $this->assertSame(0, $this->frame->getFlags());
    }

    public function testSetFlags()
    {
        $this->frame->setFlags(0x10);
        $this->assertSame(0x10, $this->frame->getFlags());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Flags must be an integer
     */
    public function testSetFlagsWithInvalidArgument($argument)
    {
        $this->frame->setFlags($argument);
    }

    public function testGetSize()
    {
        $this->assertSame(0, $this->frame->getSize());
    }

    public function testSetSize()
    {
        $this->frame->setSize(0x1234567);
        $this->assertSame(0x1234567, $this->frame->getSize());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Size must be an integer
     */
    public function testSetSizeWithInvalidArgument($argument)
    {
        $this->frame->setSize($argument);
    }

    public function testGetContent()
    {
        $this->assertSame('', $this->frame->getContent());
    }

    public function testSetContent()
    {
        $this->frame->setContent('test');
        $this->assertSame('test', $this->frame->getContent());
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
} 