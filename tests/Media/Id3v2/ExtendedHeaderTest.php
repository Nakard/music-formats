<?php
/**
 * ExtendedHeaderTest.php
 *
 * Creation date: 2014-09-20
 * Creation time: 01:50
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2;

use Nakard\MusicFormats\Media\Id3v2\ExtendedHeader;
use ErrorException;

/**
 * Class ExtendedHeaderTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2
 */
class ExtendedHeaderTest extends AbstractTestCase
{
    /**
     * @var ExtendedHeader
     */
    private $extendedHeader;

    protected function setUp()
    {
        parent::setUp();
        $this->extendedHeader = new ExtendedHeader($this->binaryReader);
    }

    public function testConstruct()
    {
        $this->assertInstanceOf('Nakard\\MusicFormats\Media\\Id3v2\\ExtendedHeader', $this->extendedHeader);
    }

    public function testGetSize()
    {
        $this->assertSame(0, $this->extendedHeader->getSize());
    }

    public function testGetFlags()
    {
        $this->assertSame(0, $this->extendedHeader->getFlags());
    }

    public function testGetPaddingSize()
    {
        $this->assertSame(0, $this->extendedHeader->getPaddingSize());
    }

    public function testSetSize()
    {
        $this->extendedHeader->setSize(10);
        $this->assertSame(10, $this->extendedHeader->getSize());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Size must be an integer
     */
    public function testSetSizeWithInvalidArgument($argument)
    {
        $this->extendedHeader->setSize($argument);
    }

    public function testSetFlags()
    {
        $this->extendedHeader->setFlags(15);
        $this->assertSame(15, $this->extendedHeader->getFlags());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Flags must be an integer
     */
    public function testSetFlagsWithInvalidArgument($argument)
    {
        $this->extendedHeader->setFlags($argument);
    }

    public function testSetPaddingSize()
    {
        $this->extendedHeader->setPaddingSize(20);
        $this->assertSame(20, $this->extendedHeader->getPaddingSize());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Padding size must be an integer
     */
    public function testSetPaddingSizeWithInvalidArgument($argument)
    {
        $this->extendedHeader->setPaddingSize($argument);
    }

    public function testGetBinaryReader()
    {
        $this->assertSame($this->binaryReader, $this->extendedHeader->getBinaryReader());
    }

    public function testSetBinaryReader()
    {
        $this->extendedHeader->setBinaryReader($this->binaryReader);
        $this->assertSame($this->binaryReader, $this->extendedHeader->getBinaryReader());
    }

    /**
     * @expectedException ErrorException
     */
    public function testSetBinaryReaderWithInvalidArgument()
    {
        $this->extendedHeader->setBinaryReader($this->extendedHeader);
    }
}
