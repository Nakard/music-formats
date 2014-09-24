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
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
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

    public function testShouldBeDiscardedWithTagAlteration()
    {
        $this->frame->setFlags(0x4000);
        $this->assertTrue($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testShouldBeDiscardedWithFileAlteration()
    {
        $this->frame->setFlags(0x2000);
        $this->assertTrue($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testIsReadOnly()
    {
        $this->frame->setFlags(0x1000);
        $this->assertTrue($this->frame->isReadOnly());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testContainsGroupInformation()
    {
        $this->frame->setFlags(0x0040);
        $this->assertTrue($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testIsCompressed()
    {
        $this->frame->setFlags(0x0008);
        $this->assertTrue($this->frame->isCompressed());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testIsEncrypted()
    {
        $this->frame->setFlags(0x0004);
        $this->assertTrue($this->frame->isEncrypted());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testIsUnsynchronized()
    {
        $this->frame->setFlags(0x0002);
        $this->assertTrue($this->frame->isUnsynchronized());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->hasDataLengthIndicator());
    }

    public function testHasDataLengthIndicator()
    {
        $this->frame->setFlags(0x0001);
        $this->assertTrue($this->frame->hasDataLengthIndicator());
        $this->assertFalse($this->frame->shouldBeDiscardedWithTagAlteration());
        $this->assertFalse($this->frame->shouldBeDiscardedWithFileAlteration());
        $this->assertFalse($this->frame->isReadOnly());
        $this->assertFalse($this->frame->containsGroupInformation());
        $this->assertFalse($this->frame->isCompressed());
        $this->assertFalse($this->frame->isEncrypted());
        $this->assertFalse($this->frame->isUnsynchronized());
    }
}