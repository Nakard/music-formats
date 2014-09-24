<?php
/**
 * UniqueFileIdentifierTest.php
 *
 * Creation date: 2014-09-24
 * Creation time: 19:53
 *
 * @author Arkadiusz Moskwa <a.moskwa@gmail.com>
 */

namespace Nakard\MusicFormats\Tests\Media\Id3v2\Frame;

use Nakard\MusicFormats\Media\Id3v2\Frame\UniqueFileIdentifier;

/**
 * Class UniqueFileIdentifierTest
 *
 * @package Nakard\MusicFormats\Tests\Media\Id3v2\Frame
 */
class UniqueFileIdentifierTest extends AbstractFrameTestCase
{
    /**
     * @var UniqueFileIdentifier
     */
    protected $frame;

    protected function setUp()
    {
        parent::setUp();
        $this->frame = new UniqueFileIdentifier();
    }

    public function testGetIdentifier()
    {
        $this->assertSame('UFID', $this->frame->getIdentifier());
    }

    public function testGetOwnerIdentifier()
    {
        $this->assertSame('', $this->frame->getOwnerIdentifier());
    }

    public function testSetOwnerIdentifier()
    {
        $this->frame->setOwnerIdentifier('Owner ID');
        $this->assertSame('Owner ID', $this->frame->getOwnerIdentifier());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage Owner identifier must be a string
     */
    public function testSetOwnerIdentifierWithInvalidArgument($argument)
    {
        $this->frame->setOwnerIdentifier($argument);
    }

    public function testGetFileIdentifier()
    {
        $this->assertSame('', $this->frame->getFileIdentifier());
    }

    public function testSetFileIdentifier()
    {
        $this->frame->setFileIdentifier('File ID');
        $this->assertSame('File ID', $this->frame->getFileIdentifier());
    }

    /**
     * @dataProvider exceptionForOnlyStringProvider
     * @expectedException \InvalidArgumentException
     * @expectedExceptionMessage File identifier must be a string
     */
    public function testSetFileIdentifierWithInvalidArgument($argument)
    {
        $this->frame->setFileIdentifier($argument);
    }
} 