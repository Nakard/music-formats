<?php
/**
 * MpegLocationLookupTableTest.php
 *
 * Creation date: 2014-09-28
 * Creation time: 15:21
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\MpegLocationLookupTable;
use Nakard\MusicFormats\Media\Id3v2\Frame\Reference\Reference;

/**
 * Class MpegLocationLookupTableTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class MpegLocationLookupTableTest extends AbstractFrameTestCase
{
    /**
     * @var MpegLocationLookupTable
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new MpegLocationLookupTable();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('MLLT', $this->frame->getIdentifier());
    }

    public function testGetMpegFramesBetweenReference()
    {
        $this->assertSame(0x0000, $this->frame->getMpegFramesBetweenReference());
    }

    public function testSetMpegFramesBetweenReference()
    {
        $this->frame->setMpegFramesBetweenReference(0x0004);
        $this->assertSame(0x0004, $this->frame->getMpegFramesBetweenReference());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage MPEG frames between reference must be an integer
     */
    public function testSetMpegFramesBetweenReferenceWithInvalidArgument($argument)
    {
        $this->frame->setMpegFramesBetweenReference($argument);
    }

    public function testGetBytesBetweenReference()
    {
        $this->assertSame(0x0000, $this->frame->getBytesBetweenReference());
    }

    public function testSetBytesBetweenReference()
    {
        $this->frame->setBytesBetweenReference(0x0004);
        $this->assertSame(0x0004, $this->frame->getBytesBetweenReference());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Bytes between reference must be an integer
     */
    public function testSetBytesBetweenReferenceWithInvalidArgument($argument)
    {
        $this->frame->setBytesBetweenReference($argument);
    }

    public function testGetMsBetweenReference()
    {
        $this->assertSame(0x0000, $this->frame->getMsBetweenReference());
    }

    public function testSetMsBetweenReference()
    {
        $this->frame->setMsBetweenReference(0x0004);
        $this->assertSame(0x0004, $this->frame->getMsBetweenReference());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Miliseconds between reference must be an integer
     */
    public function testSetMsBetweenReferenceWithInvalidArgument($argument)
    {
        $this->frame->setMsBetweenReference($argument);
    }

    public function testGetBitsNumberBytesDeviation()
    {
        $this->assertSame(0x0000, $this->frame->getBitsNumberBytesDeviation());
    }

    public function testSetBitsNumberBytesDeviation()
    {
        $this->frame->setBitsNumberBytesDeviation(0x0004);
        $this->assertSame(0x0004, $this->frame->getBitsNumberBytesDeviation());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Bytes deviation bits number must be an integer
     */
    public function testSetBitsNumberBytesDeviationWithInvalidArgument($argument)
    {
        $this->frame->setBitsNumberBytesDeviation($argument);
    }

    public function testGetBitsNumberMsDeviation()
    {
        $this->assertSame(0x0000, $this->frame->getBitsNumberMsDeviation());
    }

    public function testSetBitsNumberMsDeviation()
    {
        $this->frame->setBitsNumberMsDeviation(0x0004);
        $this->assertSame(0x0004, $this->frame->getBitsNumberMsDeviation());
    }

    /**
     * @dataProvider exceptionForOnlyIntegerProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Milisecond deviation bits number must be an integer
     */
    public function testSetBitsNumberMsDeviationWithInvalidArgument($argument)
    {
        $this->frame->setBitsNumberMsDeviation($argument);
    }

    public function testGetReferences()
    {
        $this->assertEmpty($this->frame->getReferences());
    }

    public function testAddReference()
    {
        $reference = new Reference(0x04, 0x0c);
        $this->frame->addReference($reference);
        $this->assertEquals($reference, $this->frame->getReferences()->get(0));
        $this->assertCount(1, $this->frame->getReferences());
    }

    /**
     * @expectedException \ErrorException
     */
    public function testAddReferenceWithInvalidArgument()
    {
        $this->frame->addReference($this->frame);
    }
}
 