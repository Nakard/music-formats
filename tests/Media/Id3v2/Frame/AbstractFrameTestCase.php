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
}